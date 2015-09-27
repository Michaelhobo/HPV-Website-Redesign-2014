<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:59:04
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_semantic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10163594752558b586a5e76-11456903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16704b2ed33f0087199bb6baee868070814bbcec' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_semantic.tpl',
      1 => 1371387327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10163594752558b586a5e76-11456903',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tokens' => 0,
    'token' => 0,
    'selected_token' => 0,
    'save_message' => 0,
    'selected_detail' => 0,
    'element' => 0,
    'new_tokens' => 0,
    'rename' => 0,
    'link_lists' => 0,
    'links' => 0,
    't' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558b58862d02_21602346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558b58862d02_21602346')) {function content_52558b58862d02_21602346($_smarty_tpl) {?><?php if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
?><h2>Settings</h2>
<form action="tiki-admin.php?page=semantic" method="post">
	<fieldset class="admin">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_semantic','visible'=>"always"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_backlinks'),$_smarty_tpl);?>

		<div class="input_submit_container center"><input type="submit" name="semantic" value="Change preferences" /></div>
	</fieldset>
</form>
<table width="100%">
	<col width="50%">
	<col width="50%">
	<tr>
		<td>
			<h2>Known Types</h2>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">

			<table width="100%">
				<tr>
					<th></th>
					<th>Token</th>
					<th>Label</th>
					<th>Invert</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['token']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['token']->key => $_smarty_tpl->tpl_vars['token']->value){
$_smarty_tpl->tpl_vars['token']->_loop = true;
?>
				<tr>
					<td><input type="checkbox" name="select[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['token'], ENT_QUOTES, 'UTF-8', true);?>
"/></td>
					<td><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=semantic&token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['token'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['token'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</td>
					<td><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=semantic&token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value['invert_token'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value['invert_token']]['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
				</tr>
				<?php } ?>
			</table>
			<p>
				<input type="submit" name="list" value="Show Usage"/>
				<input type="submit" name="remove" value="Delete"/>
				<input type="submit" name="removeclean" value="Delete &amp; Unreference"/>
			</p>
			</form>

			<?php if ($_smarty_tpl->tpl_vars['selected_token']->value){?>
			<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
				<div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['save_message']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
				<div>
					<label for="token">Token :</label>
					<input id="token" type="text" name="newName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_token']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
				</div>
				<div>
					<label for="label">Label :</label>
					<input id="label" type="text" name="label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_detail']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
"/>
				</div>
				<div>
					<label for="invert">Invert Relation :</label>
					<select id="invert" name="invert">
						<option value="">--Self--</option>
						<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['token'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['selected_detail']->value['invert_token']==$_smarty_tpl->tpl_vars['element']->value['token']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</option>
						<?php } ?>
					</select>
				</div>
				<div>
					<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['selected_token']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
					<input type="submit" name="save" value="Save"/>
				</div>
			</form>
			<?php }?>
		</td>
		<td>
			<h2>New Types</h2>
			<table width="100%">
				<tr>
					<th>Token</th>
					<th>Actions</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['token']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_tokens']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['token']->key => $_smarty_tpl->tpl_vars['token']->value){
$_smarty_tpl->tpl_vars['token']->_loop = true;
?>
				<tr>
					<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
					<td>
						<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
							<div>
								<input type="hidden" name="select[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
								<input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
								<input type="submit" name="list" value="Show Usage"/>
								<input type="submit" name="create" value="Create"/>
								<input type="submit" name="rename" value="Fix"/>
								<input type="submit" name="clean" value="Remove"/>
							</div>
						</form>
					</td>
				</tr>
				<?php } ?>
			</table>
			<?php if ($_smarty_tpl->tpl_vars['rename']->value){?>
			<form method="post" action="<?php echo $_SERVER['REQUEST_URI'];?>
">
				<div>
					<label for="token">Token :</label>
					<input id="token" type="text" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rename']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
				</div>
				<div>
					<input type="hidden" name="oldName" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rename']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
					<input type="submit" name="save" value="Fix"/>
				</div>
			</form>
			<?php }?>
		</td>
	</tr>
</table>
<?php  $_smarty_tpl->tpl_vars['links'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['links']->_loop = false;
 $_smarty_tpl->tpl_vars['token'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['link_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['links']->key => $_smarty_tpl->tpl_vars['links']->value){
$_smarty_tpl->tpl_vars['links']->_loop = true;
 $_smarty_tpl->tpl_vars['token']->value = $_smarty_tpl->tpl_vars['links']->key;
?>
<h2><?php if ($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value]){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tokens']->value[$_smarty_tpl->tpl_vars['token']->value]['label'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></h2>
	<?php if (count($_smarty_tpl->tpl_vars['links']->value)>0){?>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
			<li><a href="tiki-index.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['fromPage'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['fromPage'], ENT_QUOTES, 'UTF-8', true);?>
</a> (link to <a href="tiki-index.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['toPage'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['toPage'], ENT_QUOTES, 'UTF-8', true);?>
</a>)</li>
		<?php } ?>
		</ul>
	<?php }else{ ?>
		<p>No occurences found.</p>
	<?php }?>
<?php } ?>
<?php }} ?>