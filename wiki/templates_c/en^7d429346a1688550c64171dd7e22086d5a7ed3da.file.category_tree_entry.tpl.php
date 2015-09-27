<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:43:08
         compiled from "/var/www/html/wordpress/tiki/templates/category_tree_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4356537445255879c368a05-28652108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d429346a1688550c64171dd7e22086d5a7ed3da' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/category_tree_entry.tpl',
      1 => 1362118800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4356537445255879c368a05-28652108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5255879c42f850_58286513',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255879c42f850_58286513')) {function content_5255879c42f850_58286513($_smarty_tpl) {?><span<?php if (!empty($_smarty_tpl->tpl_vars['category_data']->value['description'])){?> class="tips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 | <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
	<?php if ($_smarty_tpl->tpl_vars['category_data']->value['canchange']){?>
		<input id="categ-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" name="cat_categories[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
" 
			<?php if ($_smarty_tpl->tpl_vars['category_data']->value['incat']=='y'){?>checked="checked"<?php }?>>
		<input id="categ-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
_hidden" type="hidden" name="cat_managed[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
">
	<?php }else{ ?>
		<input id="categ-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
" type="checkbox" disabled="disabled"
			<?php if ($_smarty_tpl->tpl_vars['category_data']->value['incat']=='y'){?>checked="checked"<?php }?>>
	<?php }?>
	<label for="categ-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['categId'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
</span>
<?php }} ?>