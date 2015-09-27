<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:50:20
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-information.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12103115295255894cb175a4-47522734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3247720a42626b8ecc158f1183c51daa40e5ca9d' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-information.tpl',
      1 => 1362063598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12103115295255894cb175a4-47522734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'msg' => 0,
    'line' => 0,
    'show_history_back_link' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5255894cba8c67_03043679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255894cba8c67_03043679')) {function content_5255894cba8c67_03043679($_smarty_tpl) {?>
<div id="tiki-center">
<br>
<div class="cbox">
	 <div class="cbox-title">
	 Information
	 </div>

	<div class="simplebox highlight">
	<?php if (is_array($_smarty_tpl->tpl_vars['msg']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['line'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['line']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['line']->key => $_smarty_tpl->tpl_vars['line']->value){
$_smarty_tpl->tpl_vars['line']->_loop = true;
?>
	 		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['line']->value, ENT_QUOTES, 'UTF-8', true);?>
<br>
	 	<?php } ?>
	<?php }else{ ?>
		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true);?>

	<?php }?>
	</div>

	<p>

	<?php if ($_smarty_tpl->tpl_vars['show_history_back_link']->value=='y'){?>
		<a href="javascript:history.back()" class="linkmenu">Go back</a><br><br>
	<?php }?>
	 &nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'];?>
" class="linkmenu">Return to home page</a>
	</p>
</div>
</div>
<?php }} ?>