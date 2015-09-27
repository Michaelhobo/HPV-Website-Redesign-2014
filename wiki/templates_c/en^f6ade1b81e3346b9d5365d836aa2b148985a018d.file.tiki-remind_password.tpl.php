<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-24 12:29:29
         compiled from "/var/www/html/Website/wiki/templates/tiki-remind_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:282693213530baba93f88d7-29218796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6ade1b81e3346b9d5365d836aa2b148985a018d' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/tiki-remind_password.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282693213530baba93f88d7-29218796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showmsg' => 0,
    'prefs' => 0,
    'msg' => 0,
    'showfrm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_530baba95334f9_01064789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530baba95334f9_01064789')) {function content_530baba95334f9_01064789($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>'login')); $_block_repeat=true; echo smarty_block_title(array('admpage'=>'login'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
I forgot my password<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>'login'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['showmsg']->value!='n'){?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e'){?>
		<span class="warn"><?php echo smarty_function_icon(array('_id'=>'exclamation','alt'=>"Error",'style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smarty_function_icon(array('_id'=>'accept','alt'=>"OK",'style'=>"vertical-align:middle;align:left;"),$_smarty_tpl);?>

	<?php }?> 
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?>
		<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Enter your username or email." : $tmp);?>

	<?php }else{ ?>
		<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Enter your email." : $tmp);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['showmsg']->value=='e'){?></span><?php }?>
	<br><br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showfrm']->value=='y'){?>
	<form action="tiki-remind_password.php" method="post">
		<table class="formcolor">
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?>
				<tr>
					<td><label for="name">Username:</label></td>
					<td><input type="text" name="name" id="name"></td>
				</tr>
				<tr><td colspan="2">or</td></tr>
			<?php }?>
			<tr>
				<td><label for="email">Email:</label></td>
				<td><?php if ($_smarty_tpl->tpl_vars['prefs']->value['login_is_email']!='y'){?><input type="text" name="email" id="email"><?php }else{ ?><input type="text" name="name"><?php }?></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="remind" value="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_clear_passwords']=='y'){?>Send me my Password<?php }else{ ?>Request Password Reset<?php }?>">
				</td>
			</tr>  
		</table>
	</form>
<?php }?>
<?php }} ?>