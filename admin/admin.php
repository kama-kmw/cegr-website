<?php

include "connect.php";
include "modules/year/get_list_year.php";

?>

<main class="admin-main">
  <ul class="menu-admin">
    <div class="sticky">
      <p class="menu-admin__item"><a href="#year">Года</a></p>
      <p class="menu-admin__item"><a href="#archive">Архивы</a></p>
      <p class="menu-admin__item"><a href="#setting">Настройки</a></p>
      <p class="menu-admin__item"><a href="#" id="exit">Выйти</a></p>
    </div>
  </ul>

  <section class="admin-content">
    <h1 class="h1">
      <?php
      if ($connection) {
        echo 'Административная панель Cegr.ru';
      } else {
        echo 'Не удалось соединиться с сервером';
        exit();
      } ?>
    </h1>

    <?php 
    include "modules/year/year_section_admin.php"; 
    include "modules/archive/archive_section_admin.php";
    include "modules/setting/setting_section.php";
    ?>

  </section>
</main>

<?php 
include "modules/year/year_popup_delete.php";
include "modules/archive/archive_popup_delete.php"; 
include "modules/setting/exit_popup.php";
?>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/admin/js/del_year.js"></script>
<script src="/admin/js/del_archive.js"></script>
<script src="/js/close_popup.js"></script>
<script src="/admin/js/exit_popup.js"></script>

