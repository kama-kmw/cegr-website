<!DOCTYPE html>
<html lang="ru">

<?php 
    
    $title_page = 'Нормативные документы';
    $title_page_eng = 'Regulatory documents';
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
    include_once 'includes/regulatory-main.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>

</html>