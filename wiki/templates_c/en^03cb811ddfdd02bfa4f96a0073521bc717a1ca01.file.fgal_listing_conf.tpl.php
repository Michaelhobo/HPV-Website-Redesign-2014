<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:55:59
         compiled from "/var/www/html/wordpress/tiki/templates/fgal_listing_conf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117820909952558a9fcf8a67-82898544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03cb811ddfdd02bfa4f96a0073521bc717a1ca01' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/fgal_listing_conf.tpl',
      1 => 1362485416,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117820909952558a9fcf8a67-82898544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fgal_options' => 0,
    'key' => 0,
    'item' => 0,
    'prefs' => 0,
    'fgal_ext' => 0,
    'edit_mode' => 0,
    'pref_name' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_file_galleries' => 0,
    'fgal_listing_conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558a9febbc81_48520213',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558a9febbc81_48520213')) {function content_52558a9febbc81_48520213($_smarty_tpl) {?>

<?php if (is_array($_smarty_tpl->tpl_vars['fgal_options']->value)&&count($_smarty_tpl->tpl_vars['fgal_options']->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='default_view'){?>
<tr>
	<td><label for="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
:<label></td>
	<td>
		<select id="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
			<option value="list"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='list'){?> selected="selected"<?php }?>>List</option>
			<option value="browse"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='browse'){?> selected="selected"<?php }?>>Browse</option>
			<option value="page"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='page'){?> selected="selected"<?php }?>>Page</option>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['fgal_elfinder_feature']=='y'){?>
				<option value="finder"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='finder'){?> selected="selected"<?php }?>>Finder View</option>
			<?php }?>
		</select>
	</td>
</tr>
		<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='icon_fileId'){?>
			<tr>
				<td><label for="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
:<label></td>
				<td>
					<input type="text" id="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"><br>
					<em>Enter the ID of any file in any gallery to be used as the icon for this gallery in browse view</em>
				</td>
			</tr>
		<?php }else{ ?>
<tr>
	<td><label for="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['fgal_ext']->value)){?><?php echo $_smarty_tpl->tpl_vars['fgal_ext']->value;?>
<?php }?>"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
:</label></td>
	<?php $_smarty_tpl->tpl_vars['pref_name'] = new Smarty_variable("fgal_".((string)$_smarty_tpl->tpl_vars['key']->value), null, 0);?>
	<td><input type="checkbox" id="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="fgal_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='y'){?>checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['pref_name']->value]!='y'){?> disabled="disabled"<?php }?>>
		<?php if ($_smarty_tpl->tpl_vars['edit_mode']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value[$_smarty_tpl->tpl_vars['pref_name']->value]!='y'){?>
			<em>The checkbox is disabled because this preference is disabled globally.</em>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_file_galleries']->value=='y'){?>
			<a href="tiki-admin.php?page=fgal">Please, enable the preference globally first.</a>
			<?php }else{ ?>
				You can ask your site Admin to enable the preference.
			<?php }?>
		<?php }?>
	</td>
</tr>
		<?php }?>
	<?php } ?>
<?php }?>

<?php if (is_array($_smarty_tpl->tpl_vars['fgal_listing_conf']->value)&&count($_smarty_tpl->tpl_vars['fgal_listing_conf']->value)>0){?>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fgal_listing_conf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
<tr>
	<td><label for="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
:</label></td>
	<td>
		<select id="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="fgal_list_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='name'||$_smarty_tpl->tpl_vars['key']->value=='name_admin'){?>
			<option value="a"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='a'){?> selected="selected"<?php }?>>Name-filename</option>
			<option value="n"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='n'){?> selected="selected"<?php }?>>Name</option>
			<option value="f"<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='f'){?> selected="selected"<?php }?>>Filename only</option>
		<?php }elseif($_smarty_tpl->tpl_vars['key']->value!='deleteAfter'){?>
			<option value='n'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='n'){?> selected="selected"<?php }?>>Hide</option>
			<option value='y'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='y'){?> selected="selected"<?php }?>>Show as a column</option>
			<option value='o'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='o'){?> selected="selected"<?php }?>>Show in popup box</option>
			<option value='a'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='a'){?> selected="selected"<?php }?>>Both</option>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='lockedby'||$_smarty_tpl->tpl_vars['key']->value=='lockedby_admin'){?>
			<option value='i'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='i'){?> selected="selected"<?php }?>>Show an icon in a column</option>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['key']->value=='deleteAfter'){?>
			<option value='n'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='n'){?> selected="selected"<?php }?>>Hide</option>
			<option value='y'<?php if ($_smarty_tpl->tpl_vars['item']->value['value']=='y'){?> selected="selected"<?php }?>>Show as a column</option>
		<?php }?>
		</select>
	</td>
</tr>
	<?php } ?>
<?php }?>
<?php }} ?>