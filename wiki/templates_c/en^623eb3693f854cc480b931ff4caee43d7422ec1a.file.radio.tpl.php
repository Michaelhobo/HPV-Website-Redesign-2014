<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:53:26
         compiled from "/var/www/html/wordpress/tiki/templates/prefs/radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68118021552558a06367329-20018283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '623eb3693f854cc480b931ff4caee43d7422ec1a' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/prefs/radio.tpl',
      1 => 1366223016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68118021552558a06367329-20018283',
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
  'unifunc' => 'content_52558a06443a86_13640564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558a06443a86_13640564')) {function content_52558a06443a86_13640564($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
?><div class="adminoptionbox preference clearfix <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['tagstring'], ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_REQUEST['highlight'])&&$_REQUEST['highlight']==$_smarty_tpl->tpl_vars['p']->value['preference']){?> highlight<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['p']->value['name']){?>
		<label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
:</label>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['index']++;
?>
		<div class="adminoptionlabel">
			 <input id="<?php echo htmlspecialchars((($_smarty_tpl->tpl_vars['p']->value['id']).('_')).($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']), ENT_QUOTES, 'UTF-8', true);?>
" type="radio" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" 
			 	value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['p']->value['value']==$_smarty_tpl->tpl_vars['value']->value){?> checked="checked"<?php }?> <?php echo $_smarty_tpl->tpl_vars['p']->value['params'];?>

				data-tiki-admin-child-block="#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
_childcontainer_<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index'], ENT_QUOTES, 'UTF-8', true);?>
"
				>
			 <label for="<?php echo htmlspecialchars((($_smarty_tpl->tpl_vars['p']->value['id']).('_')).($_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['index']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['label']->value, ENT_QUOTES, 'UTF-8', true);?>
</label>
		</div>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['p']->value['detail']){?>
		<?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['detail']);?>

	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-flags.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php if ($_smarty_tpl->tpl_vars['p']->value['hint']){?>
		<br/><em><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['hint']);?>
</em>
	<?php }?>
	<?php echo $_smarty_tpl->getSubTemplate ("prefs/shared-dependencies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php }} ?>