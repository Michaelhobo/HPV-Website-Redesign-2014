<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:41:08
         compiled from "/var/www/html/Website/wiki/templates/prefs/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167816160152e61ba468ae72-81659568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c18590bb1f0c8a95f55a70288de1604de8360bb' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/prefs/list.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167816160152e61ba468ae72-81659568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'value' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e61ba4753f25_56894227',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e61ba4753f25_56894227')) {function content_52e61ba4753f25_56894227($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_breakline')) include 'lib/smarty_tiki/modifier.breakline.php';
if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
?>
<div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>" style="text-align: left;">
  <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smarty_modifier_breakline(htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
:</label>
	<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" data-tiki-admin-child-block=".<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer">
		<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
			<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['p']->value['value']){?> selected="selected"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
		<?php } ?>
	</select>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['p']->value['shorthint']){?>
		<em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['shorthint']);?>
</em>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']){?>
		<br/><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

	<?php }?>		
	<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?>
		<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>