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
	include 'admin/connect.php';
    include 'includes/header.php';
    include 'includes/hero-section.php';
    include 'includes/categories-section.php';
    // include 'includes/courses-section.php';
    // include 'includes/banner-section.php';
    include 'includes/footer.php';
	include 'includes/js.php';
    ?>
</body>
    
</html>