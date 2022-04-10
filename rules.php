<!DOCTYPE html>
<html lang="ru">

<?php 
    $lang_change = true;
    $title_page = 'ПРАВИЛА РЕЦЕНЗИРОВАНИЯ';
    $title_page_eng = 'REVIEW RULES';
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
    include_once 'includes/rules-main.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>

</html>