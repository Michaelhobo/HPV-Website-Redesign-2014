<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:02:41
         compiled from "/var/www/html/Website/tiki/templates/category_tree_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67998056352d6db51089ea2-31273171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c60c28f74730de2b286619f5e23858ad01165ba' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/category_tree_entry.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67998056352d6db51089ea2-31273171',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6db511b1b89_25054278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6db511b1b89_25054278')) {function content_52d6db511b1b89_25054278($_smarty_tpl) {?><span<?php if (!empty($_smarty_tpl->tpl_vars['category_data']->value['description'])){?> class="tips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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