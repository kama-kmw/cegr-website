<?php

$year_list = mysqli_query($connection, "SELECT * FROM `year` ORDER BY `year`");
while ( $year_item = mysqli_fetch_assoc($year_list) ) {
	echo '
	<li class="quicklinks-item">
        <a href="#" class="mob-menu__show-sub">'.$year_item["year"].'
            <span class="sp__arrow-d"></span>
        </a>
        <ul>';

		$archive_list = mysqli_query($connection, "SELECT * FROM `archive` ORDER BY `name`");
		while ( $archive_item = mysqli_fetch_assoc($archive_list) ) {
			if($year_item["year"] == $archive_item["year"]) {
				echo '
				<li class="quicklinks-sub__item">
                    <a href="docs/archive/'.$archive_item["src"].'" target="_blank" class="lang-ru">'.$archive_item["name"].'</a>
                    <a href="docs/archive/'.$archive_item["src"].'" target="_blank" class="lang-en">'.$archive_item["name_eng"].'</a>
                </li>
				';  
			}
		}

		echo '
		</ul>
    </li>';
}

?>

        
    
