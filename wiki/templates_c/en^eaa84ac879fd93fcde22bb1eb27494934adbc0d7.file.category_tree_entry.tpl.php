<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 10:50:13
         compiled from "/var/www/html/Website/wiki/templates/category_tree_entry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2937079755304fce5518d46-23531424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa84ac879fd93fcde22bb1eb27494934adbc0d7' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/category_tree_entry.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2937079755304fce5518d46-23531424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5304fce5856755_46269058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5304fce5856755_46269058')) {function content_5304fce5856755_46269058($_smarty_tpl) {?><span<?php if (!empty($_smarty_tpl->tpl_vars['category_data']->value['description'])){?> class="tips" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category_data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
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