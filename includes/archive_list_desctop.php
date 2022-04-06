<?php

$year_list = mysqli_query($connection, "SELECT * FROM `year` ORDER BY `year`");
while ( $year_item = mysqli_fetch_assoc($year_list) ) {
	echo '
	<li class="sub-menu__item">
		<a href="#" class="main-menu__link">'.$year_item["year"].'</a>
		<ul class="sub-menu__subpoint">';

		$archive_list = mysqli_query($connection, "SELECT * FROM `archive` ORDER BY `name`");
		while ( $archive_item = mysqli_fetch_assoc($archive_list) ) {
			if($year_item["year"] == $archive_item["year"]) {
				echo '
				<li>
					<a href="docs/archive/'.$archive_item["src"].'" class="main-menu__link lang-ru" target="_blank">'.$archive_item["name"].'</a>
					<a href="docs/archive/'.$archive_item["src"].'" class="main-menu__link lang-en" target="_blank">'.$archive_item["name_eng"].'</a>
				</li>
				';  
			}
		}

		echo '
		</ul>
	</li>';
}

?>

		
	