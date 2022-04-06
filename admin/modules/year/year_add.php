<?php

include "../../connect.php";

$year = $_POST['year'];

if($connection) {

    $is_add_year = true;
    $year_list = mysqli_query($connection, 'SELECT * FROM `year` ORDER BY `id`');
    while ( $year_item = mysqli_fetch_assoc($year_list) ) {
        if($year_item["year"] == $year) $is_add_year = false;
    }
    if($is_add_year) {
        mysqli_query($connection, "INSERT INTO `year` (`id`, `year`) VALUES (NULL, '$year');");
    }
  
}

mysqli_close($connection);
header('Location: ../../../admin/#year');
exit;

?>