<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:01:03
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_webservices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197471386752558bcfeda896-78394485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '991eae034f7e6aa863c04f33e18460e11bba18f9' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_webservices.tpl',
      1 => 1313438232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197471386752558bcfeda896-78394485',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'webservices' => 0,
    'name' => 0,
    'storedName' => 0,
    'url' => 0,
    'webservicesTypes' => 0,
    '_type' => 0,
    'wstype' => 0,
    'postbody' => 0,
    'operation' => 0,
    'params' => 0,
    'value' => 0,
    'data' => 0,
    'response' => 0,
    'templates' => 0,
    'template' => 0,
    'number' => 0,
    'storedTemplates' => 0,
    'preview' => 0,
    'preview_output' => 0,
    'nt_name' => 0,
    'nt_engine' => 0,
    'nt_output' => 0,
    'nt_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558bd01ecd53_37432590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558bd01ecd53_37432590')) {function content_52558bd01ecd53_37432590($_smarty_tpl) {?><?php if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?><form method="post" action="tiki-admin.php?page=webservices">

	<fieldset class="admin">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_webservices','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>		

	<div class="navbar">
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['webservices']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=webservices&amp;name=".((string)$_smarty_tpl->tpl_vars['name']->value),'_text'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>

		<?php } ?>
		<?php if ($_smarty_tpl->tpl_vars['storedName']->value){?>
			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=webservices",'_text'=>"Create New"),$_smarty_tpl);?>

		<?php }?>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['storedName']->value){?>
		<p><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storedName']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
<input type="hidden" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storedName']->value, ENT_QUOTES, 'UTF-8', true);?>
"/> <a href="tiki-admin.php?page=webservices&amp;name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storedName']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;delete"><?php echo smarty_function_icon(array('_id'=>'cross'),$_smarty_tpl);?>
</a></p>
	<?php }else{ ?>
		<p>
			Enter the URL of a web services returning either JSON or YAML. Parameters can be specified by enclosing a name between percentage signs. For example: %name%. %service% and %template% are reserved keywords and cannot be used.
		</p>
		<p>URL:<input type="text" name="url" size="75" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></p>
		<p>Type:<select name="wstype">
		<?php  $_smarty_tpl->tpl_vars['_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['webservicesTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_type']->key => $_smarty_tpl->tpl_vars['_type']->value){
$_smarty_tpl->tpl_vars['_type']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['_type']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['wstype']->value==$_smarty_tpl->tpl_vars['_type']->value){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['_type']->value;?>
</option>
		<?php } ?>
		</select></p>
		<p id="ws_postbody">Parameters (%name%):<textarea name="postbody"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postbody']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></p>
		<p id="ws_operation" style="display: none;">Operation:<input type="text" name="operation" size="30" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['operation']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></p>
 		<p><input type="submit" name="parse" value="Lookup"/></p>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['url']->value){?>
		<h3>Parameters</h3>
		<table class="formcolor">
			<?php if (count($_smarty_tpl->tpl_vars['params']->value)){?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<tr>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td><input type="text" name="params[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
					</tr>
				<?php } ?>
			<?php }else{ ?>
				<tr>
					<td colspan="2"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 requires no parameter.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
				</tr>
			<?php }?>
			<tr>
				<td colspan="2">
					<input type="submit" name="test" value="Test Input" />
				</td>
			</tr>
		</table>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value){?>
		<h3>Response Information</h3>
		<table class="normal">
			<tr>
				<th>OIntegrate Version</th>
				<td><?php if ($_smarty_tpl->tpl_vars['response']->value->version){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['response']->value->version, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><em>Not supported</em><?php }?>
			</tr>
			<tr>
				<th>Schema Version</th>
				<td><?php if ($_smarty_tpl->tpl_vars['response']->value->schemaVersion){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['response']->value->schemaVersion, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><em>Not supported</em><?php }?>
			</tr>
			<tr>
				<th>Schema Documentation</th>
				<td><?php if ($_smarty_tpl->tpl_vars['response']->value->schemaDocumentation){?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['response']->value->schemaDocumentation, ENT_QUOTES, 'UTF-8', true);?>
">Available</a><?php }else{ ?><em>Not supported</em><?php }?>
			</tr>
			<tr>
				<th>Cache</th>
				<td><?php if ($_smarty_tpl->tpl_vars['response']->value->cacheControl){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['response']->value->cacheControl, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><em>Not specified, default used</em><?php }?>
			</tr>
			<tr>
				<th>Content Type</th>
				<td><?php if ($_smarty_tpl->tpl_vars['response']->value->contentType){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['response']->value->contentType, ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><strong>Not specified</strong><?php }?>
			</tr>
			<tr>
				<th colspan="2">Returned Data</th>
			</tr>
			<tr>
				<td colspan="2"><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value, ENT_QUOTES, 'UTF-8', true);?>
</pre></td>
			</tr>
			<tr>
				<th colspan="2">Proposed Templates</th>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_smarty_tpl->tpl_vars['number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
 $_smarty_tpl->tpl_vars['number']->value = $_smarty_tpl->tpl_vars['template']->key;
?>
				<tr>
					<th>
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['engine'], ENT_QUOTES, 'UTF-8', true);?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['output'], ENT_QUOTES, 'UTF-8', true);?>

						<input type="submit" name="add[<?php echo $_smarty_tpl->tpl_vars['number']->value;?>
]" value="Add"/>
					</th>
					<td><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
</pre></td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['template']->_loop) {
?>
				<tr>
					<th>None</th>
				</tr>
			<?php } ?>
		</table>
		<?php if (!$_smarty_tpl->tpl_vars['storedName']->value){?>
			<p>Register this web service. It will be possible to register the templates afterwards. Service name must only contain letters.</p>
			<p>
				<input type="text" name="new_name" />
				<input type="submit" name="register" value="Register Service" />
			</p>
		<?php }else{ ?>
			<h3>Registered Templates</h3>
			<table class="formcolor">
				<tr>
					<th>Name</th>
					<th>Engine</th>
					<th>Output</th>
					<th>Preview</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['storedTemplates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
					<tr>
						<td>
							<input type="submit" name="loadtemplate" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
							<a href="tiki-admin.php?page=webservices&amp;name=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['storedName']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;delete=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_function_icon(array('_id'=>'cross'),$_smarty_tpl);?>
</a>
						</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->engine, ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->output, ENT_QUOTES, 'UTF-8', true);?>
</td>
						<td><input type="submit" name="preview" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/></td>
					</tr>
					<tr><td colspan="4"><pre><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value->content, ENT_QUOTES, 'UTF-8', true);?>
</pre></td></tr>
					<?php if ($_smarty_tpl->tpl_vars['preview']->value==$_smarty_tpl->tpl_vars['template']->value->name){?>
						<tr><td colspan="4"><?php echo $_smarty_tpl->tpl_vars['preview_output']->value;?>
</td></tr>
					<?php }?>
				<?php } ?>
				<tr>
					<td><input type="text" name="nt_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nt_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"/></td>
					<td><input type="text" name="nt_engine" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nt_engine']->value, ENT_QUOTES, 'UTF-8', true);?>
"/></td>
					<td><input type="text" name="nt_output" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nt_output']->value, ENT_QUOTES, 'UTF-8', true);?>
"/></td>
				</tr>
				<tr><td colspan="4"><textarea name="nt_content" rows="10"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nt_content']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></td></tr>
				<tr><td colspan="4"><input type="submit" name="create_template" value="Register Template"/></td></tr>
			</table>
		<?php }?>
	<?php }?>
</form>
<?php }} ?>