<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 19:57:16
         compiled from "/var/www/html/Website/wiki/templates/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123575887553057d1ce54cf1-31567411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4c721ab102e0457687092c2ddec8b232917e736' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/confirm.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123575887553057d1ce54cf1-31567411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmation_text' => 0,
    'confirm_detail' => 0,
    'confirmaction' => 0,
    'ticket' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53057d1d0292b1_46021261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53057d1d0292b1_46021261')) {function content_53057d1d0292b1_46021261($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_query')) include 'lib/smarty_tiki/function.query.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
?>
<div class="cbox">
	<?php if (!empty($_smarty_tpl->tpl_vars['confirmation_text']->value)){?>
		<div class="cbox-title"><?php echo smarty_function_icon(array('_id'=>'information','style'=>"vertical-align:middle"),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['confirmation_text']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['confirm_detail']->value)){?>
		<?php echo $_smarty_tpl->tpl_vars['confirm_detail']->value;?>

	<?php }?>
	<br>
	<div class="cbox-data">
		<form id='confirm' action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['confirmaction']->value, ENT_QUOTES, 'UTF-8', true);?>
" method="post">
			<div>
				<?php echo smarty_function_query(array('_type'=>'form_input','_keepall'=>'y','ticket'=>$_smarty_tpl->tpl_vars['ticket']->value,'daconfirm'=>'y'),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:document.forms['confirm'].submit();return false;",'_text'=>"Click here to confirm your action",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>"#",'_onclick'=>"javascript:history.back(); return false;",'_text'=>"Go back",'_ajax'=>"n"),$_smarty_tpl);?>

				<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_text'=>"Return to home page"),$_smarty_tpl);?>

			</div>
		</form>
	</div>
</div>
<?php }} ?>