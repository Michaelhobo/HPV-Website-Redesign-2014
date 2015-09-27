<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 16:20:20
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-assignuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17893101865256d3c4ad4479-18793667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26eeb434e2909d74a6d1b2f502e66ae3a6ddb7cb' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-assignuser.tpl',
      1 => 1362118800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17893101865256d3c4ad4479-18793667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assign_user' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_users' => 0,
    'prefs' => 0,
    'user_info' => 0,
    'what' => 0,
    'grp' => 0,
    'offset' => 0,
    'sort_mode' => 0,
    'name' => 0,
    'users' => 0,
    'cant_pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5256d3c4dd15c4_38986425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256d3c4dd15c4_38986425')) {function content_5256d3c4dd15c4_38986425($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
?>

<?php $_smarty_tpl->tpl_vars['escuser'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value), null, 0);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign User %0 to Groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['assign_user']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?> 
		<?php echo smarty_function_button(array('href'=>"tiki-admingroups.php",'_text'=>"Admin groups"),$_smarty_tpl);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_users']->value=='y'){?>
		<?php echo smarty_function_button(array('href'=>"tiki-adminusers.php",'_text'=>"Admin users"),$_smarty_tpl);?>

	<?php }?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_preferences.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'_text'=>"User Preferences"),$_smarty_tpl);?>

	<?php echo smarty_function_button(array('href'=>"tiki-user_information.php?view_user=".((string)$_smarty_tpl->tpl_vars['assign_user']->value),'_text'=>"User Information"),$_smarty_tpl);?>


</div>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_intertiki_import_groups']=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Since this Tiki site is in slave mode and imports groups, the master groups will be automatically reimported at each login
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
  
<h2>User Information</h2>
<table class="formcolor">
	<tr><td>Login:</td><td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
</td></tr>
	<tr><td>Email:</td><td><?php echo $_smarty_tpl->tpl_vars['user_info']->value['email'];?>
</td></tr>
	<tr>
		<td>Groups:</td><td>
			<?php  $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['what']->_loop = false;
 $_smarty_tpl->tpl_vars['grp'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['what']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['what']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['what']->key => $_smarty_tpl->tpl_vars['what']->value){
$_smarty_tpl->tpl_vars['what']->_loop = true;
 $_smarty_tpl->tpl_vars['grp']->value = $_smarty_tpl->tpl_vars['what']->key;
 $_smarty_tpl->tpl_vars['what']->iteration++;
 $_smarty_tpl->tpl_vars['what']->last = $_smarty_tpl->tpl_vars['what']->iteration === $_smarty_tpl->tpl_vars['what']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['groups']['last'] = $_smarty_tpl->tpl_vars['what']->last;
?>
				<?php if ($_smarty_tpl->tpl_vars['what']->value=='included'){?><i><?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grp']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if ($_smarty_tpl->tpl_vars['what']->value=='included'){?></i><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['grp']->value!="Anonymous"&&$_smarty_tpl->tpl_vars['grp']->value!="Registered"&&$_smarty_tpl->tpl_vars['what']->value!='included'){?>
					<a class="link" href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value){?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>&amp;assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
<?php }?>&amp;action=removegroup&amp;group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['grp']->value);?>
" title="Remove"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Remove",'style'=>"vertical-align:middle"),$_smarty_tpl);?>
</a>
				<?php }?><?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['groups']['last']){?>,<?php }?>&nbsp;&nbsp;
			<?php } ?>
		</td>
	</tr>
	<form method="post" action="tiki-assignuser.php<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>?assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
<?php }?>">
		<tr>
			<td>Default Group:</td>
			<td>
				<select name="defaultgroup">
					<option value=""></option>
					<?php  $_smarty_tpl->tpl_vars['included'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['included']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['user_info']->value['groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['included']->key => $_smarty_tpl->tpl_vars['included']->value){
$_smarty_tpl->tpl_vars['included']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['included']->key;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['name']->value==$_smarty_tpl->tpl_vars['user_info']->value['default_group']){?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
					<?php } ?>
				</select>
				<input type="hidden" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_info']->value['login'], ENT_QUOTES, 'UTF-8', true);?>
" name="login">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
" name="maxRecords">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
" name="offset">
				<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
" name="sort_mode">
				<input type="submit" value="Set" name="set_default">
			</td>
		</tr>
	</form>
</table>
<br>
<div align="left"><h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['assign_user']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['assign_user']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Assign User %0 to Groups<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['assign_user']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2></div>

<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('find_show_num_rows'=>'y'), 0);?>


<table class="normal">
	<tr>
		<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='groupName_desc'){?>groupName_asc<?php }else{ ?>groupName_desc<?php }?>">Name</a></th>
		<th><a href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
&amp;<?php }?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php if ($_smarty_tpl->tpl_vars['sort_mode']->value=='groupDesc_desc'){?>groupDesc_asc<?php }else{ ?>groupDesc_desc<?php }?>">Description</a></th>
		<th>Action</th>
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
		<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!='Anonymous'){?>
			<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
				<td class="text">
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?> 
						<a class="link" href="tiki-admingroups.php?group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_tabs']!='y'){?>#2<?php }?>" title="Edit">
					<?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName'], ENT_QUOTES, 'UTF-8', true);?>

					<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
						</a>
					<?php }?>
				</td>
				<td class="text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupDesc'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				<td class="action">
					<?php if ($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['what']!='real'){?>
						<a class="link" href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value){?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
&amp;action=assign&amp;group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>&amp;assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
<?php }?>" title="Assign User to Group"><?php echo smarty_function_icon(array('_id'=>'add','alt'=>"Assign"),$_smarty_tpl);?>
</a>
					<?php }elseif($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']!="Registered"){?>
						<a class="link" href="tiki-assignuser.php?<?php if ($_smarty_tpl->tpl_vars['offset']->value){?>offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&amp;<?php }?>maxRecords=<?php echo $_smarty_tpl->tpl_vars['prefs']->value['maxRecords'];?>
&amp;sort_mode=<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
<?php if ($_smarty_tpl->tpl_vars['assign_user']->value){?>&amp;assign_user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['assign_user']->value);?>
<?php }?>&amp;action=removegroup&amp;group=<?php echo rawurlencode($_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['groupName']);?>
" title="unassign"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Unassign"),$_smarty_tpl);?>
</a>
					<?php }?>
				</td>
			</tr>
		<?php }?>
	<?php endfor; endif; ?>
</table>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['prefs']->value['maxRecords'],'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>