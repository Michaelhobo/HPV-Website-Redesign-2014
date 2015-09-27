<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:53:25
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_community.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30081282352558a05682f14-54867703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f441edde3f80d5b4680ed9155e89f4b9513af653' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_community.tpl',
      1 => 1363898647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30081282352558a05682f14-54867703',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558a058960c9_81738154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558a058960c9_81738154')) {function content_52558a058960c9_81738154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
?>

<div class="navbar">
	<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_text'=>"Admin Groups"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_text'=>"Admin Users"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'_text'=>"Manage permissions"),$_smarty_tpl);?>
	
</div>

<form action="tiki-admin.php?page=community" method="post">
	<div class="input_submit_container clear" style="text-align: right;">
		<input type="submit" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_community")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_community"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"User features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"User features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
			<div class="admin featurelist">
				<?php echo smarty_function_preference(array('name'=>'feature_score'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_mytiki'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_minical'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_userPreferences'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_notepad'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_user_bookmarks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_contacts'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_user_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_group_watches'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_daily_report_watches'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_daily_report_watches_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'dailyreports_enabled_for_new_users'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_user_watches_translations'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_usermenu'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_tasks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_messages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_userfiles'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_userfiles_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_use_fgal_for_user_files'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_webmail'),$_smarty_tpl);?>
				
				<?php echo smarty_function_preference(array('name'=>'feature_userlevels'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_groupalert'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'change_theme'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_token_tellafriend'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'auth_token_share'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'feature_group_transition'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'user_favorites'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_invite'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"User features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Plugins")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Plugins"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_avatar'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_favorite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_group'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_groupexpiry'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_invite'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_mail'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_map'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberlist'),$_smarty_tpl);?>
				
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_memberpayment'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_perm'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_proposal'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_realnamelist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroup'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_subscribegroups'),$_smarty_tpl);?>
			
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_topfriends'),$_smarty_tpl);?>
		
			<?php echo smarty_function_preference(array('name'=>'wikiplugin_usercount'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlink'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userlist'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_userpref'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Plugins"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'user_show_realnames'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'highlight_group'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_display_my_to_others'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_tracker_infos'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_use_gravatar'),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_days'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_who_viewed_my_stuff_show_others'),$_smarty_tpl);?>

			
			<?php echo smarty_function_preference(array('name'=>'user_store_file_gallery_picture'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_picture_gallery_id'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'user_default_picture_id'),$_smarty_tpl);?>

			
			<input type="hidden" name="userfeatures" />
			<fieldset>
				<legend>Community<?php echo smarty_function_help(array('url'=>"Community"),$_smarty_tpl);?>
</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_community_gender'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_community_mouseover_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_name'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_gender'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_picture'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_friends'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_score'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_country'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_email'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_lastlogin'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_community_mouseover_distance'),$_smarty_tpl);?>

				</div>
			</fieldset>

			
			<fieldset>
				<legend>
					Default user preferences
					<?php echo smarty_function_help(array('url'=>"UsersDefaultPrefs",'desc'=>"Users Default Preferences"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'users_prefs_mailCharset'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_userbreadCrumb'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_timezone'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_user_information'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_user_dbl'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_display_12hr_clock'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'users_prefs_show_mouseover_user_info'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_tasks_maxRecords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_diff_versions'),$_smarty_tpl);?>



			</fieldset>

			
			<fieldset>
				<legend>
					User messages
					<?php echo smarty_function_help(array('url'=>"Inter-User+Messages"),$_smarty_tpl);?>

				</legend>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_maxRecords'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_allowMsgs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_sendReadStatus'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_minPrio'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mess_archiveAfter'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>My Tiki</legend>
				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_pages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_blogs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_gals'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_msgs'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_tasks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_topics'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_forum_replies'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'users_prefs_mytiki_items'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Friendship Network")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Friendship Network"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'feature_friends'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_friends_childcontainer">
				<div class="adminoptionbox">
					<div class="adminoptionlabel">
						Select which items to display when listing users.
					</div>
				</div>
				<?php echo smarty_function_preference(array('name'=>'user_list_order'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_list_name'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_list_score'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_list_country'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_community_list_distance'),$_smarty_tpl);?>

			</div>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Friendship Network"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"BigBlueButton")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"BigBlueButton"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo smarty_function_preference(array('name'=>'bigbluebutton_feature'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="bigbluebutton_feature_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_location'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_server_salt'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'bigbluebutton_recording_max_duration'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_bigbluebutton'),$_smarty_tpl);?>

			</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"BigBlueButton"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_community"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="input_submit_container clear" style="text-align: center;">
		<input type="submit" value="Change preferences" />
	</div>
</form>
<?php }} ?>