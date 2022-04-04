<!DOCTYPE html>
<html lang="ru">

<?php 
    $lang_change = true;
    $title_page = 'Главный редактор, редколегия и редсовет';
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
    include_once 'includes/redcolegiya-main.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>

</html>