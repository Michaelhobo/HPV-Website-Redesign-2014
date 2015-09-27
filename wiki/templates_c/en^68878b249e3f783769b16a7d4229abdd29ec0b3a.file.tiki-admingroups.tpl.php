<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:48:13
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-admingroups.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1842515766525596ddca22e2-50470307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68878b249e3f783769b16a7d4229abdd29ec0b3a' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-admingroups.tpl',
      1 => 1370447373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1842515766525596ddca22e2-50470307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupname' => 0,
    'prefs' => 0,
    'tiki_p_invite' => 0,
    'cant_pages' => 0,
    'maxRecords' => 0,
    'initial' => 0,
    'find' => 0,
    'users' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'tabaddeditgroup_admgrp' => 0,
    'user' => 0,
    'group_info' => 0,
    'groupdesc' => 0,
    'inc' => 0,
    'hasOneIncludedGroup' => 0,
    'yn' => 0,
    'gr' => 0,
    'indirectly_inherited_groups' => 0,
    'grouphome' => 0,
    'groupdefcat' => 0,
    'categories' => 0,
    'id' => 0,
    'category' => 0,
    'grouptheme' => 0,
    'av_themes' => 0,
    'trackers' => 0,
    'tid' => 0,
    'grouptrackerid' => 0,
    'tit' => 0,
    'groupFields' => 0,
    'groupfieldid' => 0,
    'userstrackerid' => 0,
    'usersFields' => 0,
    'usersfieldid' => 0,
    'registrationUsersFieldIds' => 0,
    'userChoice' => 0,
    'group' => 0,
    'groupitemid' => 0,
    'memberslist' => 0,
    'member' => 0,
    'membersCount' => 0,
    'membersOffset' => 0,
    'bannedlist' => 0,
    'userslist' => 0,
    'iuser' => 0,
    'errors' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525596de607529_74832632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525596de607529_74832632')) {function content_525596de607529_74832632($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_initials_filter_links')) include 'lib/smarty_tiki/function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_autocomplete')) include 'lib/smarty_tiki/function.autocomplete.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_function_popup')) include 'lib/smarty_tiki/function.popup.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"Groups+Management",'admpage'=>"login")); $_block_repeat=true; echo smarty_block_title(array('help'=>"Groups+Management",'admpage'=>"login"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Admin groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"Groups+Management",'admpage'=>"login"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php echo smarty_function_button(array('_text'=>"Admin groups"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_text'=>"Admin users"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?clean=y",'_text'=>"Clear cache"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['groupname']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>
			<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2#tab2",'_text'=>"Add new group"),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php?add=1&amp;cookietab=2",'_text'=>"Add new group"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
	<?php echo smarty_function_button(array('href'=>"tiki-objectpermissions.php",'_text'=>"Manage permissions"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_invite']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_invite']->value=='y'){?>
		<?php echo smarty_function_button(array('href'=>"tiki-list_invite.php",'_text'=>"Invitation List"),$_smarty_tpl);?>

	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admingroups')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"List")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"List"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
	<h2>List of existing groups</h2>

	<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('find_show_num_rows'=>'y'), 0);?>


	<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>$_smarty_tpl->tpl_vars['maxRecords']->value||!empty($_smarty_tpl->tpl_vars['initial']->value)||!empty($_smarty_tpl->tpl_vars['find']->value)){?>
		<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

	<?php }?>

	<form name="checkform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
	<table class="normal">
		<tr>
			<th style="width: 20px;"><?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'id')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ID<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'id'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupDesc')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupDesc'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Description<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupDesc'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th>Inherits Permissions from</th>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y'){?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Homepage<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'groupHome'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<?php }?>			

			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User Choice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'userChoice'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			<th>Permissions</th>
			<th style="width: 20px;">&nbsp;</th>
		</tr>
		<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
			<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
				<td class="checkbox">
					<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered'){?>
						<input type="checkbox" name="checked[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php }?>
				</td>
				<td class="id"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
				<td class="text">
					<a class="link" href="tiki-admingroups.php?group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>#tab2<?php }?>" title="Edit"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>
</a>
				</td>
				<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupDesc'], ENT_QUOTES, 'UTF-8', true));?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td class="text">
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<?php if (!in_array($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']],$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included_direct'])){?><i><?php }?>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>

						<?php if (!in_array($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']],$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['included_direct'])){?></i><?php }?>
						<br>
					<?php endfor; endif; ?>
				</td>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y'){?>
				<td class="text">
					<a class="link" href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome']);?>
" title="Group Homepage"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupHome'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
				</td>
				<?php }?>

				<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['userChoice'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td class="text">
					<a class="link" href="tiki-objectpermissions.php?group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
" title="Permissions"><?php echo smarty_function_icon(array('_id'=>'key','alt'=>"Permissions"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['permcant'];?>
</a>
				</td>
				<td class="action">
					<a class="link" href="tiki-admingroups.php?group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>#tab2<?php }?>" title="Edit"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a>
					<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Registered'&&$_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Admins'){?>
						<a class="link" href="tiki-admingroups.php?offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;action=delete&amp;group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
" title="Delete"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Remove"),$_smarty_tpl);?>
</a>
					<?php }?>
				</td>
			</tr>
		<?php endfor; endif; ?>
	</table>
	<p align="left"> 
		<label>Perform action with checked:
			<select name="submit_mult">
				<option value="" selected="selected">-</option>
				<option value="remove_groups" >Remove</option>
			</select>
		</label>
		<input type="submit" value="OK">
	</p>
	</form>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"List"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['groupname']->value){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'tabaddeditgroup_admgrp', null); ob_start(); ?>Edit group <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
</i><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp'] = new Smarty_variable("Add a New Group", null, 0);?>
<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value)); $_block_repeat=true; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>



	<?php if (!empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['feature_user_watches']=='y'){?>
		<div class="floatright">
			<?php if (!$_smarty_tpl->tpl_vars['group_info']->value['isWatching']){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value)); $_block_repeat=true; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'eye','alt'=>"Group is NOT being monitored. Click icon to START monitoring."),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('watch'=>$_smarty_tpl->tpl_vars['groupname']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value)); $_block_repeat=true; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php echo smarty_function_icon(array('_id'=>'no_eye','alt'=>"Group IS being monitored. Click icon to STOP monitoring."),$_smarty_tpl);?>

				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('unwatch'=>$_smarty_tpl->tpl_vars['groupname']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</div>
	<?php }?>
	<h2><?php echo $_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value;?>
</h2>

	<form action="tiki-admingroups.php" method="post">
		<table class="formcolor">
			<tr>
				<td><label for="groups_group">Group:</label></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins'){?>
						<input type="text" name="name" id="groups_group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="width:95%">
					<?php }else{ ?>
						<input type="hidden" name="name" id="groups_group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>

					<?php }?>
				</td>
			</tr>
			<tr>
				<td><label for="groups_desc">Description:</label></td>
				<td>
					<textarea rows="5" name="desc" id="groups_desc" style="width:95%"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupdesc']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
				</td>
			</tr>
			<tr>
				<td>
					<label for="groups_inc">Inherit permissions directly from following groups.</label>
				</td>
				<td>
					<?php if (count($_smarty_tpl->tpl_vars['inc']->value)>20&&$_smarty_tpl->tpl_vars['hasOneIncludedGroup']->value=="y"){?>
						<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value){
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['yn']->value=='y'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gr']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php }?>
						<?php } ?>
						<br>
					<?php }?>
					<select name="include_groups[]" id="groups_inc" multiple="multiple" size="8">
						<?php if (!empty($_smarty_tpl->tpl_vars['groupname']->value)){?><option value="">None</option><?php }?>
						<?php  $_smarty_tpl->tpl_vars['yn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['yn']->_loop = false;
 $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['inc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['yn']->key => $_smarty_tpl->tpl_vars['yn']->value){
$_smarty_tpl->tpl_vars['yn']->_loop = true;
 $_smarty_tpl->tpl_vars['gr']->value = $_smarty_tpl->tpl_vars['yn']->key;
?>
							<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gr']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['yn']->value=='y'){?> selected="selected"<?php }?>><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['gr']->value,"52"), ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select>
					<br>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['jquery_ui_chosen']!='y'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Use Ctrl+Click to select multiple options<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
				</td>
			</tr>

			<tr>
				<td>
					Also inheriting permissions from the following groups (indirect inheritance through the groups selected above).
				</td>
				<td>
					<?php if (count($_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value)>0){?>
						
						<?php  $_smarty_tpl->tpl_vars['gr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gr']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['indirectly_inherited_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gr']->key => $_smarty_tpl->tpl_vars['gr']->value){
$_smarty_tpl->tpl_vars['gr']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['gr']->key;
?>
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gr']->value, ENT_QUOTES, 'UTF-8', true);?>
;
						<?php } ?>
					<?php }else{ ?>
						None						
					<?php }?>
				</td>
			</tr>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']=='y'){?>
				<tr>
					<td>
						<label for="groups_home">Group Homepage or Url:</label>
					</td>
					<td>
						<input type="text" style="width:95%" name="home" id="groups_home" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grouphome']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupHome']!='y'){?>disabled="disabled" <?php }?>>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							Use wiki page name or full URL. For other Tiki features, use links relative to the Tiki root (such as <em>/tiki-forums.php</em>).
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php echo smarty_function_autocomplete(array('element'=>'#groups_home','type'=>'pagename'),$_smarty_tpl);?>

					</td>
				</tr>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'){?>
				<tr>
					<td>
						<label for="groups_defcat">Default category assigned to uncategorized objects edited by a user with this default group:</label>
					</td>
					<td>
						<select name="defcat" id="groups_defcat">
							<option value="" <?php if (($_smarty_tpl->tpl_vars['groupdefcat']->value=='')||($_smarty_tpl->tpl_vars['groupdefcat']->value==0)){?> selected="selected"<?php }?>>none</option>
							<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['category']->key;
?> 
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value==$_smarty_tpl->tpl_vars['groupdefcat']->value){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['categpath'], ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select>
					</td>
				</tr>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['useGroupTheme']=='y'){?>
				<tr>
					<td><label for="groups_theme">Group Theme:</label></td>
					<td>
						<select name="theme" id="groups_theme" multiple="multiple" size="4">
							<option value="" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value==''){?> selected="selected"<?php }?>>none (Use site default)</option>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['av_themes']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['av_themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['grouptheme']->value==$_smarty_tpl->tpl_vars['av_themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['av_themes']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']];?>
</option>
							<?php endfor; endif; ?>
						</select>
					</td>
				</tr>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y'){?>
				<tr>
					<td><label for="groupstracker">Group Information Tracker</label></td>
					<td>
						<select name="groupstracker" id="groupstracker">
							<option value="0">choose a group tracker ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['grouptrackerid']->value){?> <?php $_smarty_tpl->tpl_vars["ggr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tit']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value){?>
							<br>
							<select name="groupfield">
								<option value="0">choose a field ...</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['groupFields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['groupfieldid']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php endfor; endif; ?>
							</select>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value){?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ggr']->value)),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['userTracker']=='y'){?>
				<tr>
					<td><label for="userstracker">Users Information Tracker</label></td>
					<td>
						<select name="userstracker" id="userstracker">
							<option value="0">choose a users tracker ...</option>
							<?php  $_smarty_tpl->tpl_vars['tit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tit']->_loop = false;
 $_smarty_tpl->tpl_vars['tid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['trackers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tit']->key => $_smarty_tpl->tpl_vars['tit']->value){
$_smarty_tpl->tpl_vars['tit']->_loop = true;
 $_smarty_tpl->tpl_vars['tid']->value = $_smarty_tpl->tpl_vars['tit']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['tid']->value==$_smarty_tpl->tpl_vars['userstrackerid']->value){?> <?php $_smarty_tpl->tpl_vars["ugr"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['tit']->value), null, 0);?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tit']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
						</select>
						<?php if ($_smarty_tpl->tpl_vars['userstrackerid']->value||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>
							<br>
							<select name="usersfield"<?php if (empty($_smarty_tpl->tpl_vars['userstrackerid']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?> style="display: none;"<?php }?>>
								<option value="0">choose a field ...</option>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['usersFields']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
									<option value="<?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
"<?php if ($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId']==$_smarty_tpl->tpl_vars['usersfieldid']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['fieldId'];?>
 - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['usersFields']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php endfor; endif; ?>
							</select>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#userstracker").change(function () {
	$.getJSON($.service('tracker', 'list_fields'), {trackerId: $(this).val()}, function (data) {
		if (data && data.fields) {
			var $usersfield = $('select[name=usersfield]');
			$usersfield.empty().append('<option value="0">choose a field ...</option>');
			var sel = '';
			$(data.fields).each(function () {
				if (this.type === 'u' && this.options_array[0] == 1) {
					sel = ' selected="selected"';
				} else {
					sel = '';
				}
				$usersfield.append('<option value="' + this.fieldId + '"' + sel + '>' + this.fieldId + ' - ' + this.name + '</option>');
			});
			$usersfield.show();
		}
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['userstrackerid']->value){?>
							<?php echo smarty_function_button(array('href'=>"tiki-admin_tracker_fields.php?trackerId=".((string)$_smarty_tpl->tpl_vars['userstrackerid']->value),'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo smarty_function_button(array('href'=>"tiki-list_trackers.php",'_text'=>"Admin ".((string)$_smarty_tpl->tpl_vars['ugr']->value)),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>
				<tr>
					<td>Users Information Tracker Fields Asked at Registration Time<br>(fieldIds separated with :)</td>
					<td><input type="text" style="width:95%" name="registrationUsersFieldIds" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['registrationUsersFieldIds']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
				</tr>
			<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'&&$_smarty_tpl->tpl_vars['groupname']->value!='Registered'&&$_smarty_tpl->tpl_vars['groupname']->value!='Admins'){?>
			<tr>
				<td>User can assign to the group himself</td>
				<td><input type="checkbox" name="userChoice"<?php if ($_smarty_tpl->tpl_vars['userChoice']->value=='y'){?> checked="checked"<?php }?>></td>
			</tr>

			<tr>
				<td>Users are automatically unassigned from the group after</td>
				<td><input type="text" name="expireAfter" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_info']->value['expireAfter'], ENT_QUOTES, 'UTF-8', true);?>
">Days<br><i>0 or empty for never</i></td>
			</tr>
			<tr>
				<td>Or, users are automatically unassigned from the group at an anniversary date</td>
				<td><input type="text" name="anniversary" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_info']->value['anniversary'], ENT_QUOTES, 'UTF-8', true);?>
"><br><i>MMDD for annual or DD for monthly</i></td>
			</tr>
			<tr>
				<td>Payment for membership extension is prorated at a minimum interval of a</td>
				<td><select name="prorateInterval">
				<option value="day" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='day'){?>selected="selected"<?php }?>>Day</option>
				<option value="month" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='month'){?>selected="selected"<?php }?>>Month</option>
				<option value="year" <?php if ($_smarty_tpl->tpl_vars['group_info']->value['prorateInterval']=='year'){?>selected="selected"<?php }?>>Year</option>
				</select></td>
			</tr>
			<tr>
				<td>Users are automatically assigned at registration in the group if their emails match the pattern</td>
				<td><input type="text" size="40" name="emailPattern" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_info']->value['emailPattern'], ENT_QUOTES, 'UTF-8', true);?>
"><br>Example: /@tw\.org$/ <br>Example: /@(tw.org$)|(tw\.com$)/</td>
			</tr>
		<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['group']->value!=''){?>
				<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Anonymous'){?>
				<tr>
					<td>
						Assign group <em>management</em> permissions:
					</td>
					<td>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('_text'=>"Assign Permissions",'_id'=>"key"),$_smarty_tpl);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-objectpermissions.php",'objectType'=>"group",'objectId'=>$_smarty_tpl->tpl_vars['groupname']->value,'objectName'=>$_smarty_tpl->tpl_vars['groupname']->value,'permType'=>"group"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</td>
				</tr>
				<?php }?>

				<tr>
					<td>
						&nbsp;
						<input type="hidden" name="olgroup" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					</td>
					<td><input type="submit" name="save" value="Save"></td>
				</tr>
			<?php }else{ ?>
				<tr>
					<td >&nbsp;</td>
					<td><input type="submit" name="newgroup" value="Add"></td>
				</tr>
			<?php }?>
		</table>
	</form>
	<br><br>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['groupTracker']=='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['grouptrackerid']->value&&$_smarty_tpl->tpl_vars['groupitemid']->value){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Group tracker item : <?php echo $_smarty_tpl->tpl_vars['groupitemid']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_button(array('href'=>"tiki-view_tracker_item.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value)."&amp;itemId=".((string)$_smarty_tpl->tpl_vars['groupitemid']->value)."&amp;show=mod",'_text'=>"Edit Item"),$_smarty_tpl);?>

		<?php }elseif($_smarty_tpl->tpl_vars['grouptrackerid']->value){?>
			<?php if ($_smarty_tpl->tpl_vars['groupfieldid']->value){?>
				Group tracker item not found
				<?php echo smarty_function_button(array('href'=>"tiki-view_tracker.php?trackerId=".((string)$_smarty_tpl->tpl_vars['grouptrackerid']->value),'_text'=>"Create Item"),$_smarty_tpl);?>

			<?php }else{ ?>
				Choose a field ...
			<?php }?>
		<?php }?>
		<br><br>
	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>$_smarty_tpl->tpl_vars['tabaddeditgroup_admgrp']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<?php if ($_smarty_tpl->tpl_vars['groupname']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Members")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Members"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		<h2>Members List: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
		<form name="checkform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
		<input type="hidden" name="group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<table class="normal">
			<tr>
				<th class="auto"><?php if ($_smarty_tpl->tpl_vars['memberslist']->value){?><?php echo smarty_function_select_all(array('checkbox_names'=>'members[]'),$_smarty_tpl);?>
<?php }?></th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
User<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'created'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Expire<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode_member','_sort_field'=>'expire'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th>Action</th>
			</tr>
			<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

			<tr>
				<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['memberslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
					<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
					<td class="checkbox"><input type="checkbox" name="members[]" value="<?php echo $_smarty_tpl->tpl_vars['member']->value['userId'];?>
"></td>
					<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value['login']);?>
</td>
					<td class="date"><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['created']);?>
</td>
					<td class="date"><?php if (!empty($_smarty_tpl->tpl_vars['member']->value['expire'])){?><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['member']->value['expire']);?>
<?php }?></td>
					<td class="action">
						<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered'){?>
						<a href="tiki-adminusers.php?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['member']->value['login']);?>
&amp;action=removegroup&amp;group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['groupname']->value);?>
" class="link" title="Remove from Group"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Remove"),$_smarty_tpl);?>
</a>
						<?php }?>
						<a href="tiki-adminusers.php?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['member']->value['userId']);?>
&amp;cookietab=2<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>#tab2<?php }?>" class="link" title="Edit"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a>
					</td>
					</tr>
				<?php } ?>
		</table>

		<?php if ($_smarty_tpl->tpl_vars['groupname']->value!='Registered'){?>
		<label>Perform action with checked:
			<select name="submit_mult_members">
				<option value="" />
				<option value="unassign">Unassign</option>
			</select>
		</label>
		<input type="submit" name="unassign_members" value="OK">
		</form>
		<?php }?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset')); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['membersCount']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['membersOffset']->value,'offset_arg'=>'membersOffset'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<div class="box"><?php echo $_smarty_tpl->tpl_vars['membersCount']->value;?>
 users in group <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>

		<h2>Banned members List: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
		<table class="normal">
			<tr>
				<th>User</th>
				<th>Action</th>
			</tr>
			<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

			<tr>
				<?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bannedlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value){
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
					<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
					<td class="username"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['member']->value);?>
</td>
					<td class="action">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('user'=>rawurlencode($_smarty_tpl->tpl_vars['member']->value),'action'=>'unbanuser','group'=>rawurlencode($_smarty_tpl->tpl_vars['groupname']->value),'_title'=>"Unban user")); $_block_repeat=true; echo smarty_block_self_link(array('user'=>rawurlencode($_smarty_tpl->tpl_vars['member']->value),'action'=>'unbanuser','group'=>rawurlencode($_smarty_tpl->tpl_vars['groupname']->value),'_title'=>"Unban user"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php echo smarty_function_icon(array('_id'=>'cross_admin','alt'=>"Unban user"),$_smarty_tpl);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('user'=>rawurlencode($_smarty_tpl->tpl_vars['member']->value),'action'=>'unbanuser','group'=>rawurlencode($_smarty_tpl->tpl_vars['groupname']->value),'_title'=>"Unban user"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</td>
					</tr>
				<?php } ?>
		</table>
		<?php if (!empty($_smarty_tpl->tpl_vars['userslist']->value)){?>
			<h2>Add or Ban members to: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
			<form method="post" action="tiki-admingroups.php">
				<p>
					<input type="hidden" name="group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
">
					<select name="user">
						<?php  $_smarty_tpl->tpl_vars['iuser'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iuser']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['iuser']->key => $_smarty_tpl->tpl_vars['iuser']->value){
$_smarty_tpl->tpl_vars['iuser']->_loop = true;
?>
							<option><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iuser']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select>
					<input type="submit" name="adduser" value="Add to group">
					<input type="submit" name="banuser" value="Ban user from group">
				</p>
			</form>
		<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Members"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['groupname']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Import/Export")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Import/Export"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
		<form method="post" action="tiki-admingroups.php" enctype="multipart/form-data">
			<input type="hidden" name="group" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<?php if ($_smarty_tpl->tpl_vars['errors']->value){?>
				<div class="simple highlight">
					<?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value){
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
						<?php echo $_smarty_tpl->tpl_vars['e']->value;?>
<br>
					<?php } ?>
				</div>
			<?php }?>

			<h2>Download CSV export</h2>
			<table class="formcolor">
				<tr>
					<td class="auto">Charset encoding:</td>
					<td class="auto">
						<select name="encoding">
							<option value="UTF-8" selected="selected">UTF-8</option>
							<option value="ISO-8859-1">ISO-8859-1</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="auto">Fields:</td>
					<td class="auto">
						<input type="checkbox" name="username" checked="checked">
						Username
						<br>
						<input type="checkbox" name="email">Email
						<br>
						<input type="checkbox" name="lastLogin">Last login
					</td>
				</tr>
				<tr>
					<td class="auto"></td>
					<td class="auto"><input type="submit" name="export" value="Export"></td>
				</tr>
			</table>

			<h2>Batch upload (CSV file)</h2>
			<h3>Assign users to group: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['groupname']->value, ENT_QUOTES, 'UTF-8', true);?>
 </h3>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				Each user in the file must already exist.<br>To create users or/and assign them to groups, got to <a href="tiki-adminusers.php">admin->users</a>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<table class="formcolor">
				<tr>
					<td class="auto">
						CSV File<a <?php echo smarty_function_popup(array('text'=>'user<br>user1<br>user2'),$_smarty_tpl);?>
><?php echo smarty_function_icon(array('_id'=>'help'),$_smarty_tpl);?>
</a>
					</td>
					<td class="auto"><input name="csvlist" type="file"></td>
				</tr>
				<tr>
					<td class="auto"></td>
					<td class="auto"><input type="submit" name="import" value="Import"></td>
				</tr>
			</table>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Import/Export"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admingroups'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>