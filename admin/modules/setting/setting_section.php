<div class="admin-page" id="setting">

    <h2 class="h2 mb20">Сменить пароль</h2>

    <form method="POST" action="modules/setting/password_update.php" class="admin-form mb30" enctype="multipart/form-data">

        <label class="admin-label flex__jc-sb">
            <div class="w-33">
                <p class="admin-label__text">Текущий пароль<sup>*</sup></p>
                <input type="text" required name="password_current" class="admin-input">
            </div>
            <div class="w-33">
                <p class="admin-label__text">Новый пароль<sup>*</sup></p>
                <input type="text" required name="password_new" class="admin-input">
            </div>
            <div class="w-33">
                <p class="admin-label__text">Повторите новый пароль<sup>*</sup></p>
                <input type="text" required name="password_new_2" class="admin-input">
            </div>
        </label>

        <input type="submit" value="Сменить" class="admin-submit">
    </form>

</div> 