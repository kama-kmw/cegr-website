<meta charset="UTF-8">
<?php

include "../../connect.php";

$name = $_POST['name'];
$name_eng = $_POST['name_eng'];
$year = $_POST['year'];
$doc_src;

// если была произведена отправка формы
if (isset($_FILES['doc'])) {
    // проверяем, можно ли загруить документ
    $check = can_upload($_FILES['doc']);

    if ($check === true) {
        // загружаем документ на сервер
        make_upload($_FILES['doc']);
        echo "<strong>Документ успешно загружен!</strong><br>";
    } else {
        // выводим сообщение об ошибке
        echo "<strong>$check</strong>";
    }
}

if ($connection) {
    mysqli_query($connection, "INSERT INTO `archive` (`id`, `name`, `name_eng`, `year`, `src`) VALUES (NULL, '$name', '$name_eng', '$year', '$doc_src');");
}

function can_upload($file)
{
    // если имя пустое, значит файл не выбран
    if ($file['name'] == '')
        return 'Вы не выбрали файл.<br>';
    /* если размер файла 0, значит его не пропустили настройки 
	сервера из-за того, что он слишком большой */
    if ($file['size'] == 0)
        return 'Файл слишком большой.<br>';
    // разбиваем имя файла по точке и получаем массив
    $getMime = explode('.', $file['name']);
    // нас интересует последний элемент массива - расширение
    $mime = strtolower(end($getMime));
    // объявим массив допустимых расширений
    $types = array('pdf', 'doc', 'docx');
    // если расширение не входит в список допустимых - return
    if (!in_array($mime, $types))
        return 'Недопустимый тип файла.<br>';
    return true;
}

function make_upload($file)
{
    // формируем имя документа
    $name = $file['name'];
    // формируем путь к папке загрузки
    $uploaddir = '../../../docs/archive/';
    $uploadfile = $uploaddir . basename($name);
    // переносим файл в папку
    move_uploaded_file($file['tmp_name'], $uploadfile);

    $GLOBALS['doc_src'] = $name;
}

mysqli_close($connection);
echo '<script>location.replace("/admin/");</script>';
// header('Location: ../../../admin/#archive');
exit;
