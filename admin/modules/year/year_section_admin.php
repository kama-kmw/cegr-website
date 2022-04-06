<div class="admin-page" id="year">

    <h2 class="h2 mb20">Добавить год</h2>

    <form method="POST" action="modules/year/year_add.php" class="admin-form mb30" enctype="multipart/form-data">

        <label class="admin-label">
            <p class="admin-label__text">Год<sup>*</sup></p>
            <input type="number" required name="year" class="admin-input">
        </label>

        <input type="submit" value="Добавить год" class="admin-submit">
    </form>

    <h2 class="h2 mb20 mt20">Список годов</h2>

    <?php include "year_list_admin.php"; ?>

</div>