<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:56:37
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_workspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77898099752558ac554fe43-24891685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3204e246971071ba6cec35e270f226d5057d03a' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_workspace.tpl',
      1 => 1349201843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77898099752558ac554fe43-24891685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'no_area' => 0,
    'areas' => 0,
    'area' => 0,
    'persp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558ac56c55a4_55403505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558ac56c55a4_55403505')) {function content_52558ac56c55a4_55403505($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_service')) include 'lib/smarty_tiki/function.service.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
?>
<form action="tiki-admin.php?page=workspace" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="workspacesetprefs" value="Change preferences" />
	</div>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Workspaces")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Workspaces"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<fieldset class="admin">
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'workspace_ui','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="admin">
				<legend>Administration</legend>
				<a class="button service-dialog" href="<?php echo smarty_function_service(array('controller'=>'workspace','action'=>'create'),$_smarty_tpl);?>
">Create a workspace</a>

				<div id="template-list">
				</div>
				<a class="button service-dialog reload" href="<?php echo smarty_function_service(array('controller'=>'workspace','action'=>'add_template'),$_smarty_tpl);?>
">Add a workspace template</a>
			</fieldset>

			<fieldset class="admin">
				<legend>Dependencies</legend>
				<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_perspective'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_categories'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki'),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="admin">
				<legend>Advanced</legend>
				<?php echo smarty_function_preference(array('name'=>'workspace_root_category'),$_smarty_tpl);?>

			</fieldset>

			<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#tiki-center').on('click', '.service-dialog', function () {
	$(this).serviceDialog({
		title: $(this).text(),
		success: function () {
			if ($(this).is('.reload')) {
				$('#template-list').load($.service('workspace', 'list_templates'));
			}
		}
	});

	return false;
});
$('#template-list').load($.service('workspace', 'list_templates'));
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Workspaces"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Areas")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Areas"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<fieldset class="admin">
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_areas'),$_smarty_tpl);?>

			</fieldset>
			<?php if (isset($_smarty_tpl->tpl_vars['error']->value)){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 Nothing was updated.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<fieldset class="admin">
				<legend>Areas</legend>
				<table class="normal">
					<tr>
						<th>On</th>
						<th colspan="2">Category</th>
						<th>Perspectives</th>
						<th>Exclusive</th>
						<th>Share Common</th>
						<th>Description</th>
					</tr>
					<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

					<?php if ($_smarty_tpl->tpl_vars['no_area']->value=='0'){?>
						<?php  $_smarty_tpl->tpl_vars['area'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['area']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['areas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['area']->key => $_smarty_tpl->tpl_vars['area']->value){
$_smarty_tpl->tpl_vars['area']->_loop = true;
?>
							<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y'){?> disabled<?php }?>">
								<td><input type="checkbox" name="enabled[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['enabled']=='y'){?> checked="checked"<?php }?> class="enabledChecks"></td>
								<td><?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['area']->value['categName'];?>
</td>
								<td>
									<?php  $_smarty_tpl->tpl_vars['persp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['area']->value['perspectives']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persp']->key => $_smarty_tpl->tpl_vars['persp']->value){
$_smarty_tpl->tpl_vars['persp']->_loop = true;
?>
										<a href="tiki-edit_perspective.php?action=edit&id=<?php echo $_smarty_tpl->tpl_vars['persp']->value['perspectiveId'];?>
" title="Edit perspective <?php echo $_smarty_tpl->tpl_vars['persp']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['persp']->value['name'];?>
</a>,
									<?php } ?>
								</td>
								<td><input type="checkbox" name="exclusive[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['exclusive']=='y'){?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y'){?> disabled="disabled"<?php }?> class="otherChecks"></td>
								<td><input type="checkbox" name="share_common[<?php echo $_smarty_tpl->tpl_vars['area']->value['categId'];?>
]"<?php if ($_smarty_tpl->tpl_vars['area']->value['share_common']=='y'){?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['area']->value['enabled']!='y'){?> disabled="disabled"<?php }?> class="otherChecks"></td>
								<td><?php echo $_smarty_tpl->tpl_vars['area']->value['description'];?>
</td>
							</tr>
						<?php } ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(".enabledChecks").click(function() {
	var checked = ! $(this).prop("checked");
	$(".otherChecks", $(this).parents("tr:first")).each(function() {
		$(this).prop("disabled", checked);
	});
});
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<th class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
" colspan="4">No category found in area</th>
					<?php }?>
				</table>
			</fieldset>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"Hint")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Hint"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This tab shows you an overview of categories affected by the areas feature. <br> More help here: <a href="http://doc.tiki.org/Areas" target="tikihelp">doc.tiki.org/Areas</a> <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"Hint"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<div class="heading input_submit_container" style="text-align: center">
				<input type="submit" name="update_areas" value="Update areas" />
			</div>
			<div class="adminoptionboxchild" id="feature_areas_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'areas_root'),$_smarty_tpl);?>

			</div>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Areas"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="heading input_submit_container" style="text-align: center">
		<input type="submit" name="workspacesetprefs" value="Change preferences" />
	</div>
</form>
<?php }} ?>