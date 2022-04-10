<!DOCTYPE html>
<html lang="ru">

<?php 
    $lang_change = true;
    $title_page = 'ПОЛОЖЕНИЕ О ЖУРНАЛЕ «ЭКОНОМИЧЕСКИЕ И ГУМАНИТАРНЫЕ ИССЛЕДОВАНИЯ РЕГИОНОВ»';
    $title_page_eng = 'REGULATIONS ON the JOURNAL "ECONOMIC AND HUMANITARIAN STUDIES OF REGIONS"';
	include 'includes/head.php';
?>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php
    include 'admin/connect.php';
    include_once 'includes/header.php';
    include_once 'includes/hero-section.php';
    include_once 'includes/about-journal-main.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>

</html>