<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 08:23:56
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-user_preferences.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9605485265256641cbb2478-13268929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740d4713d0e7e795bb7e815606c6385d89b939c0' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-user_preferences.tpl',
      1 => 1363898647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9605485265256641cbb2478-13268929',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userwatch' => 0,
    'user' => 0,
    'tiki_p_admin_users' => 0,
    'userinfo' => 0,
    'tikifeedback' => 0,
    'prefs' => 0,
    'user_prefs' => 0,
    'avatar' => 0,
    'flags' => 0,
    'location' => 0,
    'userPageExists' => 0,
    'usertrackerId' => 0,
    'tiki_p_admin' => 0,
    'customfields' => 0,
    'scramblingMethods' => 0,
    'scramblingEmails' => 0,
    'mailCharsets' => 0,
    'group_style' => 0,
    'styles' => 0,
    'tiki_p_create_css' => 0,
    'languages' => 0,
    'timezones' => 0,
    'tzinfo' => 0,
    'offset' => 0,
    'tz' => 0,
    'offset_min' => 0,
    'show_mouseover_user_info' => 0,
    'tiki_p_messages' => 0,
    'tiki_p_tasks' => 0,
    'tiki_p_forum_read' => 0,
    'levn' => 0,
    'lev' => 0,
    'tiki_p_delete_account' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5256641d4e5eb4_00160085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256641d4e5eb4_00160085')) {function content_5256641d4e5eb4_00160085($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_modifier_countryflag')) include 'lib/smarty_tiki/modifier.countryflag.php';
if (!is_callable('smarty_block_sortlinks')) include 'lib/smarty_tiki/block.sortlinks.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_stringfix')) include 'lib/smarty_tiki/modifier.stringfix.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_function_math')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.math.php';
?>

<?php if ($_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"User+Preferences")); $_block_repeat=true; echo smarty_block_title(array('help'=>"User+Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Preferences: <?php echo $_smarty_tpl->tpl_vars['userwatch']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"User+Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"User+Preferences")); $_block_repeat=true; echo smarty_block_title(array('help'=>"User+Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Preferences<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"User+Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value||$_smarty_tpl->tpl_vars['userwatch']->value==''){?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-mytiki_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'){?>
	<div class="navbar">
		<?php $_smarty_tpl->tpl_vars['thisuser'] = new Smarty_variable($_smarty_tpl->tpl_vars['userinfo']->value['login'], null, 0);?>
		<?php echo smarty_function_button(array('href'=>"tiki-assignuser.php?assign_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_text'=>"Assign Group"),$_smarty_tpl);?>

		<?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['thisuser']->value),'_text'=>"User Information"),$_smarty_tpl);?>

	</div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['tikifeedback']->value){?>
	<div class="simplebox highlight">
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tikifeedback']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<div><?php echo $_smarty_tpl->tpl_vars['tikifeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['mes'];?>
</div>
		<?php endfor; endif; ?>
	</div>
<?php }?>
<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"mytiki_user_preference")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userPreferences']=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Personal Information")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Personal Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form action="tiki-user_preferences.php" method="post">
		<input type="hidden" name="view_user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true);?>
">

		<table class="formcolor">
			<tr>
				<td>User:</td>
				<td>
					<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</strong>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'){?>
						<em>(Use the email as username)</em>
					<?php }?>
				</td>
			</tr>

			<tr>
				<td>
					Real Name:
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_ldap_nameattr']==''||$_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='ldap'){?>
						<input type="text" name="realName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_prefs']->value['realName'], ENT_QUOTES, 'UTF-8', true);?>
" style="width:20em;font-size:1.1em;">
					<?php }else{ ?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_prefs']->value['realName'], ENT_QUOTES, 'UTF-8', true);?>

					<?php }?>
				</td>
			</tr>

			<tr>
				<td>Avatar:</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['user_use_gravatar']=='y'){?>
						<a href="http://www.gravatar.com" class="link">
							Pick user Avatar
						</a>
					<?php }else{ ?>
						<a href="tiki-pick_avatar.php<?php if ($_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value){?>?view_user=<?php echo $_smarty_tpl->tpl_vars['userwatch']->value;?>
<?php }?>" class="link">
							Pick user Avatar
						</a>
					<?php }?>
				</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_gender']=='y'){?>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" name="gender" value="Male" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']=='Male'){?>checked="checked"<?php }?>> Male
						<input type="radio" name="gender" value="Female" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']=='Female'){?>checked="checked"<?php }?>> Female
						<input type="radio" name="gender" value="Hidden" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['gender']!='Male'&&$_smarty_tpl->tpl_vars['user_prefs']->value['gender']!='Female'){?>checked="checked"<?php }?>> Hidden
					</td>
				</tr>
			<?php }?>

			<tr>
				<td>Country:</td>
				<td>
					<?php if (isset($_smarty_tpl->tpl_vars['user_prefs']->value['country'])&&$_smarty_tpl->tpl_vars['user_prefs']->value['country']!="None"&&$_smarty_tpl->tpl_vars['user_prefs']->value['country']!="Other"){?>
						<?php echo smarty_modifier_countryflag($_smarty_tpl->tpl_vars['userinfo']->value['login']);?>

					<?php }?>
					<select name="country">
						<option value="Other" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country']=="Other"){?>selected="selected"<?php }?>>
							Other
						</option>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('sortlinks', array()); $_block_repeat=true; echo smarty_block_sortlinks(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['flags']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<?php if ($_smarty_tpl->tpl_vars['flags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]!="Other"){?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['country']==$_smarty_tpl->tpl_vars['flags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_stringfix($_smarty_tpl->tpl_vars['flags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								</option>
							<?php }?>
						<?php endfor; endif; ?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_sortlinks(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</select>
				</td>
			</tr>

			<tr>
				<td>Location:</td>
				<td>
					<div class="map-container" style="height: 250px;" data-target-field="location">
					</div>
					<input type="hidden" name="location" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				</td>
			</tr>

			<tr>
				<td>Homepage URL:</td>
				<td>
					<input type="text" size="40" name="homePage" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_prefs']->value['homePage'], ENT_QUOTES, 'UTF-8', true);?>
">
				</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage']=='y'){?>
				<tr>
					<td>Your personal Wiki Page:</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['userPageExists']->value=='y'){?>
							<a class="link" href="tiki-index.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];?>
<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
" title="View">
								<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>

							</a>
							(<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];?>
<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
								Edit
							</a>)
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['login'], ENT_QUOTES, 'UTF-8', true);?>

							(<a class="link" href="tiki-editpage.php?page=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_userpage_prefix'];?>
<?php echo $_smarty_tpl->tpl_vars['userinfo']->value['login'];?>
">
								Create
							</a>)
						<?php }?>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'&&$_smarty_tpl->tpl_vars['usertrackerId']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'&&!empty($_smarty_tpl->tpl_vars['userwatch']->value)&&$_smarty_tpl->tpl_vars['userwatch']->value!=$_smarty_tpl->tpl_vars['user']->value){?>
					<tr>
						<td>User's personal tracker information:</td>
						<td>
							<a class="link" href="tiki-view_tracker_item.php?trackerId=<?php echo $_smarty_tpl->tpl_vars['usertrackerId']->value;?>
&user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['userwatch']->value);?>
&view=+user">
								View extra information
							</a>
						</td>
					</tr>
				<?php }else{ ?>
					<tr>
						<td>Your personal tracker information:</td>
						<td>
							<a class="link" href="tiki-view_tracker_item.php?view=+user">
								View extra information
							</a>
						</td>
					</tr>
				<?php }?>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['name'] = 'ir';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['customfields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ir']['total']);
?>
				<?php if ($_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['show']){?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['label'];?>
:</td>
						<td>
							<input type="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['type'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['prefName'];?>
"
									value="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['value'];?>
" size="<?php echo $_smarty_tpl->tpl_vars['customfields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ir']['index']]['size'];?>
">
						</td>
					</tr>
				<?php }?>
			<?php endfor; endif; ?>
			<tr>
				<td>User information:</td>
				<td>
					<select name="user_information">
						<option value='private' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information']=='private'){?>selected="selected"<?php }?>>
							Private
						</option>
						<option value='public' <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_information']=='public'){?>selected="selected"<?php }?>>
							Public
						</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Last login:</td>
				<td><span class="description"><?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['userinfo']->value['lastLogin']);?>
</span></td>
			</tr>
			<td colspan="2" class="input_submit_container">
				<input type="submit" name="new_prefs"  value="Save changes">
			</td>
		</table>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Personal Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<table class="formcolor">
		<tr>
			<th colspan="2">General settings</th>
		</tr>
		<tr>
			<td>Is email public? (uses scrambling to prevent spam)</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['userinfo']->value['email']){?>
					<select name="email_isPublic">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['scramblingMethods']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['scramblingMethods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['email_isPublic']==$_smarty_tpl->tpl_vars['scramblingMethods']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>>
								<?php echo $_smarty_tpl->tpl_vars['scramblingEmails']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>

							</option>
						<?php endfor; endif; ?>
					</select>
				<?php }else{ ?>
					Unavailable - please set your email below
				<?php }?>
			</td>
		</tr>

		<tr>
			<td>Does your mail reader need a special charset</td>
			<td>
				<select name="mailCharset">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mailCharsets']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mailCharset']==$_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>>
							<?php echo $_smarty_tpl->tpl_vars['mailCharsets']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>

						</option>
					<?php endfor; endif; ?>
				</select>
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_theme']=='y'&&empty($_smarty_tpl->tpl_vars['group_style']->value)){?>
			<tr>
				<td>Theme:</td>
				<td>
					<select name="mystyle">
						<option value="" style="font-style:italic;border-bottom:1px dashed #666;">
							Site default
						</option>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['styles']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<?php if (count($_smarty_tpl->tpl_vars['prefs']->value['available_styles'])==0||empty($_smarty_tpl->tpl_vars['prefs']->value['available_styles'][0])||in_array($_smarty_tpl->tpl_vars['styles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']],$_smarty_tpl->tpl_vars['prefs']->value['available_styles'])){?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['styles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['theme']==$_smarty_tpl->tpl_vars['styles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['styles']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>

								</option>
							<?php }?>
						<?php endfor; endif; ?>
					</select>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_editcss']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_create_css']->value=='y'){?>
						<a href="tiki-edit_css.php" class="link" title="Edit CSS">Edit CSS</a>
					<?php }?>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_language']=='y'){?>
			<tr>
				<td>Preferred language:</td>
				<td>
					<select name="language">
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
							<?php if (count($_smarty_tpl->tpl_vars['prefs']->value['available_languages'])==0||in_array($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'],$_smarty_tpl->tpl_vars['prefs']->value['available_languages'])){?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['language']==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']){?>selected="selected"<?php }?>>
									<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

								</option>
							<?php }?>
						<?php endfor; endif; ?>
						<option value='' <?php if (!$_smarty_tpl->tpl_vars['user_prefs']->value['language']){?>selected="selected"<?php }?>>
							Site default
						</option>
					</select>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'){?>
					<?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['read_language']){?>
					<div id="read-lang-div">
						<?php }else{ ?>
						<a href="javascript:void(0)" onclick="document.getElementById('read-lang-div').style.display='block';this.style.display='none';">
							<br/>
							Can you read more languages?
						</a>
						<br/>&nbsp;
						<div id="read-lang-div" style="display: none">
							<?php }?>
							Other languages you can read (select on the left to add to the list on the right):
							<br/>
							<select name="_blank" onchange="document.getElementById('read-language-input').value+=' '+this.options[this.selectedIndex].value+' '">
								<option value="">Select language...</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
									<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'], ENT_QUOTES, 'UTF-8', true);?>
">
										<?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>

									</option>
								<?php endfor; endif; ?>
							</select>
							&nbsp;=&gt;&nbsp;
							<input id="read-language-input" type="text" name="read_language" value="<?php echo $_smarty_tpl->tpl_vars['user_prefs']->value['read_language'];?>
">
							<br/>&nbsp;
						</div>
						<?php }?>
				</td>
			</tr>
		<?php }?>

		<tr>
			<td>Number of visited pages to remember:</td>
			<td>
				<select name="userbreadCrumb">
					<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==1){?>selected="selected"<?php }?>>1</option>
					<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==2){?>selected="selected"<?php }?>>2</option>
					<option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==3){?>selected="selected"<?php }?>>3</option>
					<option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==4){?>selected="selected"<?php }?>>4</option>
					<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==5){?>selected="selected"<?php }?>>5</option>
					<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['userbreadCrumb']==10){?>selected="selected"<?php }?>>10</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Displayed time zone:</td>
			<td>
				<select name="display_timezone" id="display_timezone">
					<option value="" style="font-style:italic;">
						Detect user time zone if browser allows, otherwise site default
					</option>
					<option value="Site" style="font-style:italic;border-bottom:1px dashed #666;"
							<?php if (isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])&&$_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone']=='Site'){?> selected="selected"<?php }?>>
						Site default
					</option>
					<?php  $_smarty_tpl->tpl_vars['tzinfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tzinfo']->_loop = false;
 $_smarty_tpl->tpl_vars['tz'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timezones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tzinfo']->key => $_smarty_tpl->tpl_vars['tzinfo']->value){
$_smarty_tpl->tpl_vars['tzinfo']->_loop = true;
 $_smarty_tpl->tpl_vars['tz']->value = $_smarty_tpl->tpl_vars['tzinfo']->key;
?>
						<?php echo smarty_function_math(array('equation'=>"floor(x / (3600000))",'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset'),$_smarty_tpl);?>

						<?php echo smarty_function_math(array('equation'=>"(x - (y*3600000)) / 60000",'y'=>$_smarty_tpl->tpl_vars['offset']->value,'x'=>$_smarty_tpl->tpl_vars['tzinfo']->value['offset'],'assign'=>'offset_min','format'=>"%02d"),$_smarty_tpl);?>

						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tz']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone'])&&$_smarty_tpl->tpl_vars['user_prefs']->value['display_timezone']==$_smarty_tpl->tpl_vars['tz']->value){?> selected="selected"<?php }?>>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tz']->value, ENT_QUOTES, 'UTF-8', true);?>
 (UTC<?php if ($_smarty_tpl->tpl_vars['offset']->value>=0){?>+<?php }?><?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
h<?php if ($_smarty_tpl->tpl_vars['offset_min']->value>0){?><?php echo $_smarty_tpl->tpl_vars['offset_min']->value;?>
<?php }?>)
						</option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Use 12-hour clock in time selectors:</td>
			<td>
				<input type="checkbox" name="display_12hr_clock" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['display_12hr_clock']=='y'){?>checked="checked"<?php }?>>
			</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_community_mouseover']=='y'){?>
			<tr>
				<td>Display info tooltip on mouseover for every user who allows his/her information to be public</td>
				<td>
					<input type="checkbox" name="show_mouseover_user_info" <?php if ($_smarty_tpl->tpl_vars['show_mouseover_user_info']->value=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'){?>
			<tr>
				<td>Use double-click to edit pages:</td>
				<td>
					<input type="checkbox" name="user_dbl" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['user_dbl']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y'){?>
			<tr>
				<th colspan="2">User Messages</th>
			</tr>
			<tr>
				<td>Messages per page</td>
				<td>
					<select name="mess_maxRecords">
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==2){?>selected="selected"<?php }?>>2</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==5){?>selected="selected"<?php }?>>5</option>
						<option value="10" <?php if (empty($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords'])||$_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==10){?>selected="selected"<?php }?>>10</option>
						<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==20){?>selected="selected"<?php }?>>20</option>
						<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==30){?>selected="selected"<?php }?>>30</option>
						<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==40){?>selected="selected"<?php }?>>40</option>
						<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_maxRecords']==50){?>selected="selected"<?php }?>>50</option>
					</select>
				</td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['allowmsg_is_optional']=='y'){?>
				<tr>
					<td>Allow messages from other users</td>
					<td>
						<input type="checkbox" name="allowMsgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['allowMsgs']=='y'){?>checked="checked"<?php }?>>
					</td>
				</tr>
			<?php }?>
			<tr>
				<td>Notify sender when reading his mail</td>
				<td>
					<input type="checkbox" name="mess_sendReadStatus" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_sendReadStatus']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
			<tr>
				<td>Send me an email for messages with priority equal or greater than:</td>
				<td>
					<select name="minPrio">
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==1){?>selected="selected"<?php }?>>1 -Lowest-</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==2){?>selected="selected"<?php }?>>2 -Low-</option>
						<option value="3" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==3){?>selected="selected"<?php }?>>3 -Normal-</option>
						<option value="4" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==4){?>selected="selected"<?php }?>>4 -High-</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==5){?>selected="selected"<?php }?>>5 -Very High-</option>
						<option value="6" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['minPrio']==6){?>selected="selected"<?php }?>>none</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Auto-archive read messages after x days</td>
				<td>
					<select name="mess_archiveAfter">
						<option value="0" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==0){?>selected="selected"<?php }?>>never</option>
						<option value="1" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==1){?>selected="selected"<?php }?>>1</option>
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==2){?>selected="selected"<?php }?>>2</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==5){?>selected="selected"<?php }?>>5</option>
						<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==10){?>selected="selected"<?php }?>>10</option>
						<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==20){?>selected="selected"<?php }?>>20</option>
						<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==30){?>selected="selected"<?php }?>>30</option>
						<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==40){?>selected="selected"<?php }?>>40</option>
						<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==50){?>selected="selected"<?php }?>>50</option>
						<option value="60" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mess_archiveAfter']==60){?>selected="selected"<?php }?>>60</option>
					</select>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tasks']->value=='y'){?>
			<tr>
				<th colspan="2">User Tasks</th>
			</tr>
			<tr>
				<td>Tasks per page</td>
				<td>
					<select name="tasks_maxRecords">
						<option value="2" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==2){?>selected="selected"<?php }?>>2</option>
						<option value="5" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==5){?>selected="selected"<?php }?>>5</option>
						<option value="10" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==10){?>selected="selected"<?php }?>>10</option>
						<option value="20" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==20){?>selected="selected"<?php }?>>20</option>
						<option value="30" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==30){?>selected="selected"<?php }?>>30</option>
						<option value="40" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==40){?>selected="selected"<?php }?>>40</option>
						<option value="50" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['tasks_maxRecords']==50){?>selected="selected"<?php }?>>50</option>
					</select>
				</td>
			</tr>
		<?php }?>

		<tr>
			<th colspan="2">My Tiki</th>
		</tr>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'){?>
			<tr>
				<td>My pages</td>
				<td>
					<input type="checkbox" name="mytiki_pages" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_pages']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'){?>
			<tr>
				<td>My blogs</td>
				<td>
					<input type="checkbox" name="mytiki_blogs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_blogs']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'){?>
			<tr>
				<td>My galleries</td>
				<td>
					<input type="checkbox" name="mytiki_gals" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_gals']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_messages']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_messages']->value=='y'){?>
			<tr>
				<td>My messages</td>
				<td>
					<input type="checkbox" name="mytiki_msgs" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_msgs']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tasks']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_tasks']->value=='y'){?>
			<tr>
				<td>My tasks</td>
				<td>
         			<input type="checkbox" name="mytiki_tasks" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_tasks']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_forum_read']->value=='y'){?>
			<tr>
				<td>My forum topics</td>
				<td>
          			<input type="checkbox" name="mytiki_forum_topics" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_topics']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
			<tr>
				<td>My forum replies</td>
				<td>
          			<input type="checkbox" name="mytiki_forum_replies" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_forum_replies']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'){?>
			<tr>
				<td>My user items</td>
				<td>
					<input type="checkbox" name="mytiki_items" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_items']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'){?>
			<tr>
				<td>My Articles</td>
				<td>
					<input type="checkbox" name="mytiki_articles" <?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mytiki_articles']=='y'){?>checked="checked"<?php }?>>
				</td>
			</tr>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_userlevels']=='y'){?>
			<tr>
				<td>My level</td>
				<td>
					<select name="mylevel">
						<?php  $_smarty_tpl->tpl_vars['lev'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lev']->_loop = false;
 $_smarty_tpl->tpl_vars['levn'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['prefs']->value['userlevels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lev']->key => $_smarty_tpl->tpl_vars['lev']->value){
$_smarty_tpl->tpl_vars['lev']->_loop = true;
 $_smarty_tpl->tpl_vars['levn']->value = $_smarty_tpl->tpl_vars['lev']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['levn']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['user_prefs']->value['mylevel']==$_smarty_tpl->tpl_vars['levn']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lev']->value;?>
</option>
						<?php } ?>
					</select>
				</td>
			</tr>
		<?php }?>

		<tr>
			<td colspan="2" class="input_submit_container">
				<input type="submit" name="new_prefs" value="Save changes">
			</td>
		</tr>
		</table>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'||!($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin')){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Account Information")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Account Information"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form action="tiki-user_preferences.php" method="post">
			<input type="hidden" name="view_user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<table class="formcolor">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas'||($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='admin')){?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'&&($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'||$_smarty_tpl->tpl_vars['userinfo']->value['login']=='admin')){?>
						<tr>
							<td colspan="2">Leave "New password" and "Confirm new password" fields blank to keep current password</td>
						</tr>
					<?php }?>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'){?>
					<input type="hidden" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
">
				<?php }else{ ?>
					<tr>
						<td>Email address:</td>
						<td><input type="text" name="email" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userinfo']->value['email'], ENT_QUOTES, 'UTF-8', true);?>
"></td>
					</tr>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['auth_method']!='cas'||($_smarty_tpl->tpl_vars['prefs']->value['cas_skip_admin']=='y'&&$_smarty_tpl->tpl_vars['user']->value=='admin')){?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['change_password']!='n'){?>
						<tr>
							<td>New password:</td>
							<td><input type="password" name="pass1"></td>
						</tr>
						<tr>
							<td>Confirm new password:</td>
							<td><input type="password" name="pass2"></td>
						</tr>
					<?php }?>

					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value!='y'||$_smarty_tpl->tpl_vars['userwatch']->value==$_smarty_tpl->tpl_vars['user']->value){?>
						<tr>
							<td>Current password (required):</td>
							<td><input type="password" name="pass"></td>
						</tr>
					<?php }?>
				<?php }?>

				<tr>
					<td colspan="2" class="input_submit_container">
						<input type="submit" name="chgadmin" value="Save changes">
					</td>
				</tr>
			</table>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Account Information"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_delete_account']->value=='y'&&$_smarty_tpl->tpl_vars['userinfo']->value['login']!='admin'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Account Deletion")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Account Deletion"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form action="tiki-user_preferences.php" method="post"
			  onsubmit='return confirm("<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Are you really sure you want to delete the account %0?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
");'>
			<?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)){?><input type="hidden" name="view_user" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php }?>
			<table class="formcolor">
				<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
					<td></td>
					<td>
						<input type='checkbox' name='deleteaccountconfirm' value='1'>
						Check this box if you really want to delete the account
					</td>
				</tr>
				<tr>
					<td colspan="2" class="input_submit_container">
						<input type="submit" name="deleteaccount" value="<?php if (!empty($_smarty_tpl->tpl_vars['userwatch']->value)){?>Delete the account: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['userwatch']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Delete my account<?php }?>">
					</td>
				</tr>
			</table>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Account Deletion"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"mytiki_user_preference"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>