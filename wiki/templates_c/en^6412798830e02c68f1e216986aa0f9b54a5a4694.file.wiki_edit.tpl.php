<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:43:33
         compiled from "/var/www/html/wordpress/tiki/templates/wiki_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1654814267525587b5829285-58758329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6412798830e02c68f1e216986aa0f9b54a5a4694' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/wiki_edit.tpl',
      1 => 1362128093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1654814267525587b5829285-58758329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'textarea__toolbars' => 0,
    'textarea_id' => 0,
    'comments' => 0,
    'switcheditor' => 0,
    'toolbar_section' => 0,
    'textarea_attributes' => 0,
    'textareadata' => 0,
    'diff_style' => 0,
    'diff_oldver' => 0,
    'diff_newver' => 0,
    'source_page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587b5884cf2_03953653',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587b5884cf2_03953653')) {function content_525587b5884cf2_03953653($_smarty_tpl) {?><?php if (!is_callable('smarty_function_toolbars')) include 'lib/smarty_tiki/function.toolbars.php';
?>

<div class='edit-zone'>
	<?php if ($_smarty_tpl->tpl_vars['textarea__toolbars']->value!='n'){?>
		<div class='textarea-toolbar' id='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp);?>
_toolbar'>
			<?php echo smarty_function_toolbars(array('area_id'=>(($tmp = @$_smarty_tpl->tpl_vars['textarea_id']->value)===null||$tmp==='' ? 'editwiki' : $tmp),'comments'=>$_smarty_tpl->tpl_vars['comments']->value,'switcheditor'=>$_smarty_tpl->tpl_vars['switcheditor']->value,'section'=>$_smarty_tpl->tpl_vars['toolbar_section']->value),$_smarty_tpl);?>

		</div>
	<?php }?>
	<textarea <?php echo $_smarty_tpl->tpl_vars['textarea_attributes']->value;?>
><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['textareadata']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value){?>
	<input type="hidden" name="oldver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_oldver']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="newver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_newver']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="source_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>

<?php }} ?>