<?php

function M_AddAdminSection($sections) {
	//$sections['admin'] = array(	"title" => __('Administration','membership') );

	return $sections;
}

add_filter('membership_level_sections', 'M_AddAdminSection', 99);

?>