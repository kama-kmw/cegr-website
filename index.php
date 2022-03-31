<!DOCTYPE html>
<html lang="ru">

<?php 
	$title_page = 'Экономические и гуманитарные исследования регионов'; 
	$title_page_eng = 'Economic and humanitarian studies of the regions';
	$lang_change = true;
	include 'includes/head.php';
?>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?php
    include_once 'includes/header.php';
    include_once 'includes/hero-section.php';
    include_once 'includes/categories-section.php';
    // include_once 'includes/courses-section.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>
    
</html>