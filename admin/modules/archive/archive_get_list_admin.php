<?php
$year_list = mysqli_query($connection, "SELECT * FROM `year` ORDER BY `year`");
while ( $year_item = mysqli_fetch_assoc($year_list) ) {
   $archive_list = mysqli_query($connection, "SELECT * FROM `archive` ORDER BY `name`");
   while ( $archive_item = mysqli_fetch_assoc($archive_list) ) {
      if($year_item["year"] == $archive_item["year"]) {
         echo '
            <div class="aside__block relative" id="'.$archive_item["id"].'">
               <span class="span-id">'.$year_item["year"].'</span>
               <span class="aside__span archive_name">'.$archive_item["name"].'</span>
               <span class="aside__span">'.$archive_item["name_eng"].'</span>
               <span class="aside__span">'.$archive_item["src"].'</span>
               <div class="reform">
                  <img class="del-archive" src="/img/icons/del-icon.png">
               </div>
            </div>
         ';  
      }
   }
}

?>