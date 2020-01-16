<?php
	$site_name = get_bloginfo( 'name' );
	$site_name_array = explode('.', $site_name, 2);
	if ($site_name_array[1]) 
		echo "$site_name_array[0].<span class='logo_second-part'>$site_name_array[1]</span>";
	else echo $site_name_array[0];
?>
