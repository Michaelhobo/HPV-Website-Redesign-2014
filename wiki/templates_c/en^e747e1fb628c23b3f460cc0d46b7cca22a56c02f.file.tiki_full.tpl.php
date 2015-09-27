<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 08:45:34
         compiled from "/var/www/html/wordpress/tiki/templates/tiki_full.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14169806945256692e66e928-52476510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e747e1fb628c23b3f460cc0d46b7cca22a56c02f' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki_full.tpl',
      1 => 1361808794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14169806945256692e66e928-52476510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageLang' => 0,
    'prefs' => 0,
    'mid_data' => 0,
    'headerlib' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5256692e76dcd9_62411380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256692e76dcd9_62411380')) {function content_5256692e76dcd9_62411380($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_body_attributes')) include 'lib/smarty_tiki/function.html_body_attributes.php';
if (!is_callable('smarty_function_show_help')) include 'lib/smarty_tiki/function.show_help.php';
?><!DOCTYPE html>
<html lang="<?php if (!empty($_smarty_tpl->tpl_vars['pageLang']->value)){?><?php echo $_smarty_tpl->tpl_vars['pageLang']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['language'];?>
<?php }?>">
	<head>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</head>
	<body<?php echo smarty_function_html_body_attributes(array(),$_smarty_tpl);?>
>


<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y'){?>
<div dir="rtl">
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-ajax_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<div id="main">
	<div id="tiki-center">
		<div id="role_main">
			<?php echo $_smarty_tpl->tpl_vars['mid_data']->value;?>

			<?php echo smarty_function_show_help(array(),$_smarty_tpl);?>

		</div>
	</div>
</div>
			
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_bidi']=='y'){?>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- Put JS at the end -->
<?php if ($_smarty_tpl->tpl_vars['headerlib']->value){?>
	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js_files();?>

	<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->output_js();?>

<?php }?>
	</body>
</html>
<?php }} ?>