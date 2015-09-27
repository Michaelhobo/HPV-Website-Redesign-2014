<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:48:38
         compiled from "/var/www/html/wordpress/tiki/templates/confirm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1334262969525596f612bfd3-75871987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '845ec709f5ea73408911304913a059c7a68d120b' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/confirm.tpl',
      1 => 1362063598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1334262969525596f612bfd3-75871987',
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
  'unifunc' => 'content_525596f6226063_37835445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525596f6226063_37835445')) {function content_525596f6226063_37835445($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
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