<?php 
    $year_list = mysqli_query($connection, 'SELECT * FROM `year` ORDER BY `year`');
    while ( $year_item = mysqli_fetch_assoc($year_list) ) {
        echo '<option>'.$year_item["year"].'</option>';  
    }
?>