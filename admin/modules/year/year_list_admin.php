<div class="teg__section">
    <?php 
    $year_list = mysqli_query($connection, 'SELECT * FROM `year` ORDER BY `year`');
    while ( $year_item = mysqli_fetch_assoc($year_list) ) {
        echo '
        <div class="teg__item" id="'.$year_item["id"].'">'.$year_item["year"].'
            <img src="/img/icons/del-red-icon.png" class="teg__close">
        </div>';  
    }
    ?>
</div>