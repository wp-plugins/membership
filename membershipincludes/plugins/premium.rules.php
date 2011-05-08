<?php
class M_Blogcreation extends M_Rule {

	var $name = 'blogcreation';
	var $label = 'Blog Creation';

	var $rulearea = 'core';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-blogcreation'>
			<h2 class='sidebar-name'><?php _e('Blog Creation', 'membership');?><span><a href='#remove' id='remove-blogcreation' class='removelink' title='<?php _e("Remove Blog Creation from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('blogcreation', 'M_Blogcreation', 'premium');

class M_Mainmenus extends M_Rule {

	var $name = 'mainmenus';
	var $label = 'Main Menus';
	var $rulearea = 'admin';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-mainmenus'>
			<h2 class='sidebar-name'><?php _e('Main Menus', 'membership');?><span><a href='#remove' class='removelink' id='remove-mainmenus' title='<?php _e("Remove Main Menus from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('mainmenus', 'M_Mainmenus', 'premium');

class M_Submenus extends M_Rule {

	var $name = 'submenus';
	var $label = 'Sub Menus';
	var $rulearea = 'admin';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-submenus'>
			<h2 class='sidebar-name'><?php _e('Sub Menus', 'membership');?><span><a href='#remove' class='removelink' id='remove-submenus' title='<?php _e("Remove Sub Menus from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}

M_register_rule('submenus', 'M_Submenus', 'premium');

class M_Dashboardwidgets extends M_Rule {

	var $name = 'dashboard';
	var $label = 'Dashboard Widgets';
	var $rulearea = 'admin';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-dashboard'>
			<h2 class='sidebar-name'><?php _e('Dashboard Widgets', 'membership');?><span><a href='#remove' class='removelink' id='remove-dashboard' title='<?php _e("Remove Dashboard Widgets from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}

M_register_rule('dashboard', 'M_Dashboardwidgets', 'premium');

class M_Plugins extends M_Rule {

	var $name = 'plugins';
	var $label = 'Plugins';
	var $rulearea = 'admin';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-plugins'>
			<h2 class='sidebar-name'><?php _e('Plugins', 'membership');?><span><a href='#remove' class='removelink' id='remove-plugins' title='<?php _e("Remove Main Menus from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}

M_register_rule('plugins', 'M_Plugins', 'premium');

class M_Favouriteactions extends M_Rule {

	var $name = 'favactions';
	var $label = 'Favorite Actions';
	var $rulearea = 'admin';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-favactions'>
			<h2 class='sidebar-name'><?php _e('Favorite Actions', 'membership');?><span><a href='#remove' class='removelink' id='remove-favactions' title='<?php _e("Remove Favorite Actions from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('favactions', 'M_Favouriteactions', 'admin');

// The buddypress rules

function M_AddPremiumSection($sections) {
	$sections['premium'] = array(	"title" => __('Administration [Premium]','membership') );

	return $sections;
}

add_filter('membership_level_sections', 'M_AddPremiumSection', 99);
?>