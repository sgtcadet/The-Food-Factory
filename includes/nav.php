<ul>
	<?php

		foreach ($navItems as $item) {
			echo "<a href=\"$item[slug]\" class=\"navLink \"><li>$item[title]</li></a>";
		
		}

		/*
		foreach ($navItems as $item) {
			$showNavItem = "<a href=\"$item[slug]\" class=";
		
			if(TITLE == "Home | The Food Factory" ){
			$showNavItem	.= "\" \">";
		}
		$showNavItem .="<li>$item[title]</li></a>";
		echo $showNavItem;
		*/
	//}
	?>

	<?php

	?>

</ul> 