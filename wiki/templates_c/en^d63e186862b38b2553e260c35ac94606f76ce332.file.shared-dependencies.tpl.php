<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:41:08
         compiled from "/var/www/html/Website/wiki/templates/prefs/shared-dependencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193261911552e61ba485d140-59641431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd63e186862b38b2553e260c35ac94606f76ce332' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/prefs/shared-dependencies.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193261911552e61ba485d140-59641431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
    'dep' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e61ba48e2ea0_48810612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e61ba48e2ea0_48810612')) {function content_52e61ba48e2ea0_48810612($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?><input class="system" type="hidden" name="lm_preference[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ($_smarty_tpl->tpl_vars['p']->value['dependencies']){?>
	<?php  $_smarty_tpl->tpl_vars['dep'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dep']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['dependencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dep']->key => $_smarty_tpl->tpl_vars['dep']->value){
$_smarty_tpl->tpl_vars['dep']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['dep']->value['met']){?>
			<?php echo smarty_function_icon(array('_id'=>"accept",'class'=>"pref_dependency tips",'title'=>(htmlspecialchars(("Requires: ").($_smarty_tpl->tpl_vars['dep']->value['label']), ENT_QUOTES, 'UTF-8', true)).(" (OK)")),$_smarty_tpl);?>

		<?php }elseif($_smarty_tpl->tpl_vars['dep']->value['type']=='profile'){?>
			<div class="pref_dependency highlight">You need apply profile <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dep']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dep']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
		<?php }else{ ?>
			<div class="pref_dependency highlight">You need to set <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dep']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dep']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
		<?php }?>
	<?php } ?>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['p']->value['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value){
$_smarty_tpl->tpl_vars['note']->_loop = true;
?>
	<div class="pref_note"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['note']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
<?php } ?>
<?php }} ?>