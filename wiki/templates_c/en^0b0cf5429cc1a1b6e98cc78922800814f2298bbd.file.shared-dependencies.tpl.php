<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:30
         compiled from "/var/www/html/wordpress/tiki/templates/prefs/shared-dependencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1245664479525586fef2f728-90504459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b0cf5429cc1a1b6e98cc78922800814f2298bbd' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/prefs/shared-dependencies.tpl',
      1 => 1362131000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1245664479525586fef2f728-90504459',
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
  'unifunc' => 'content_525586ff06fff0_34190220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586ff06fff0_34190220')) {function content_525586ff06fff0_34190220($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
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