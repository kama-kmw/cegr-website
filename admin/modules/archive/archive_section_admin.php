<div class="admin-page" id="archive">

	<h2 class="h2 mb20">Добавить архив</h2>

	<form method="POST" action="modules/archive/archive_add.php" class="admin-form mb30" enctype="multipart/form-data">

		<label class="admin-label flex flex-wrap">
			<div class="w-48 mr20 mb20">
				<p class="admin-label__text">Название<sup>*</sup></p>
				<input type="text" required name="name" class="admin-input">
			</div>
			<div class="w-48 mr20">
				<p class="admin-label__text">Название на английском<sup>*</sup></p>
				<input type="text" required name="name_eng" class="admin-input">
			</div>
			<div class="mr20">
				<p class="admin-label__text">Выберите год<sup>*</sup></p>
				<select name="year" required class="admin-select">
					<option></option>
					<?php include 'modules/year/get_list_year.php'; ?>
				</select>
			</div>
			<div>
				<label class="admin-label">
					<p class="admin-label__text">Загрузите файл<sup>*</sup></p>
					<input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
					<input type="file" required name="doc" class="admin-input-photo">
				</label>
			</div>
		</label>

		<input type="submit" value="Добавить архив" class="admin-submit">
	</form>

	<h2 class="h2 mb20 mt20">Список архивов</h2>

	<div class="aside__block relative">
		<span class="span-id">Год</span>
		<span class="aside__span">Название (рус)</span>
		<span class="aside__span">Название (англ)</span>
		<span class="aside__span">Имя файла</span>
	</div>
	<?php
	include "modules/archive/archive_get_list_admin.php";
	?>

</div>