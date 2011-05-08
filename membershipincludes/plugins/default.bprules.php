<?php

class M_BPGroups extends M_Rule {

	var $name = 'bpgroups';
	var $label = 'Groups';

	var $rulearea = 'public';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-bpgroups'>
			<h2 class='sidebar-name'><?php _e('Groups', 'membership');?><span><a href='#remove' id='remove-bpgroups' class='removelink' title='<?php _e("Remove Groups from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('bpgroups', 'M_BPGroups', 'bp');

class M_BPGroupcreation extends M_Rule {

	var $name = 'bpgroupcreation';
	var $label = 'Group Creation';

	var $rulearea = 'public';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-bpgroupcreation'>
			<h2 class='sidebar-name'><?php _e('Group Creation', 'membership');?><span><a href='#remove' id='remove-bpgroupcreation' class='removelink' title='<?php _e("Remove Group Creation from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('bpgroupcreation', 'M_BPGroupcreation', 'bp');

class M_BPBlogs extends M_Rule {

	var $name = 'bpblogs';
	var $label = 'Blogs';

	var $rulearea = 'public';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-bpblogs'>
			<h2 class='sidebar-name'><?php _e('Blogs', 'membership');?><span><a href='#remove' id='remove-bpblogs' class='removelink' title='<?php _e("Remove Blogs from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('bpblogs', 'M_BPBlogs', 'bp');

class M_BPPrivatemessage extends M_Rule {

	var $name = 'bpprivatemessage';
	var $label = 'Private Messaging';

	var $rulearea = 'public';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-bpprivatemessage'>
			<h2 class='sidebar-name'><?php _e('Private Messaging', 'membership');?><span><a href='#remove' id='remove-bpprivatemessage' class='removelink' title='<?php _e("Remove Private Messaging from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

}
M_register_rule('bpprivatemessage', 'M_BPPrivatemessage', 'bp');

//BuddyPress Pages
class M_BPPages extends M_Rule {

	var $name = 'bppages';
	var $label = 'BuddyPress Pages';

	var $rulearea = 'public';

	function admin_main($data) {
		if(!$data) $data = array();
		?>
		<div class='level-operation' id='main-bppages'>
			<h2 class='sidebar-name'><?php _e('BuddyPress Pages', 'membership');?><span><a href='#remove' id='remove-bppages' class='removelink' title='<?php _e("Remove BuddyPress Pages from this rules area.",'membership'); ?>'><?php _e('Remove','membership'); ?></a></span></h2>
			<div class='inner-operation'>
				<p><strong><?php _e('Rule not available in this version','membership'); ?></p>
			</div>
		</div>
		<?php
	}

	function can_access_page( $posneg, $page ) {

		return false;

	}

}
M_register_rule('bppages', 'M_BPPages', 'bp');

// Pass thru function
function MBP_can_access_page( $page ) {

	global $user, $member;

	if(!empty($member) && method_exists($member, 'pass_thru')) {
		return $member->pass_thru( 'bppages', array( 'can_access_page' => $page ) );
	}

}


function M_AddBuddyPressSection($sections) {
	$sections['bp'] = array(	"title" => __('BuddyPress [Premium]','membership') );

	return $sections;
}

add_filter('membership_level_sections', 'M_AddBuddyPressSection');

?>