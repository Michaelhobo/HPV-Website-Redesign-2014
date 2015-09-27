<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:57:13
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_directory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16162533052558ae99b92e4-61565485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b34591b0bafe1bf856898fb3a455c2bf4b127f8' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_directory.tpl',
      1 => 1313438232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16162533052558ae99b92e4-61565485',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558ae9a2fea4_13450847',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558ae9a2fea4_13450847')) {function content_52558ae9a2fea4_13450847($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To configure your directory, find "Admin Directory" under "Directory" on the application menu, or <a class="rbox-link" href="tiki-directory_admin.php">Click Here</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="tiki-admin.php?page=directory" method="post">
	<div class="input_submit_container clear" style="text-align: right;">
		<input type="submit" name="directory" value="Change preferences" />
	</div>
	
	<fieldset class="admin">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_directory','visible'=>"always"),$_smarty_tpl);?>

	</fieldset>		

	<fieldset class="admin">
		<legend>Directory</legend>
		<?php echo smarty_function_preference(array('name'=>'directory_columns'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_links_per_page'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_validate_urls'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_cool_sites'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_country_flag'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'directory_open_links'),$_smarty_tpl);?>

	</fieldset>
	<div class="input_submit_container clear" style="text-align: center;">
		<input type="submit" name="directory" value="Change preferences" />
	</div>
</form>
<?php }} ?>