<!DOCTYPE html>
<html lang="ru">

<?php 
    $title_page = 'Разрешение на опубликование индивидуальных сведений об авторе';
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
    include_once 'includes/agreement-main.php';
    // include_once 'includes/banner-section.php';
    include_once 'includes/footer.php';
	include_once 'includes/js.php';
    ?>
</body>

</html>