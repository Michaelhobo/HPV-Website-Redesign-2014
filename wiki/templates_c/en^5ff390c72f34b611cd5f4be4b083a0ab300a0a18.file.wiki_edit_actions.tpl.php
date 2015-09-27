<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:43:33
         compiled from "/var/www/html/wordpress/tiki/templates/wiki_edit_actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252070205525587b578f082-35798845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff390c72f34b611cd5f4be4b083a0ab300a0a18' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/wiki_edit_actions.tpl',
      1 => 1363744901,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252070205525587b578f082-35798845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'page' => 0,
    'tiki_p_admin' => 0,
    'page_badchars_display' => 0,
    'translation_mode' => 0,
    'source_page' => 0,
    'target_page' => 0,
    'tiki_p_minor' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587b5815717_58745590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587b5815717_58745590')) {function content_525587b5815717_58745590($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>
<div class="actions">
	<input type="hidden" name="no_bl" value="y">
	<input type="submit" class="wikiaction" title="Preview your changes." name="preview" value="Preview" onclick="needToConfirm=false;">
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $("input[name=preview]").click(function(){
auto_save_data['editwiki'] = "";
auto_save('editwiki', autoSaveId);
if (!ajaxPreviewWindow) {
	$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
}
return false;
});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'||$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)||$_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']!='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y'){?>
			<input type="hidden" name="source_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<input type="hidden" name="target_page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<input type="submit" class="wikiaction tips" title="Edit wiki page|Save the page as a partial translation." name="partial_save" value="Partial Translation" onclick="needToConfirm=false">
			<input type="submit" class="wikiaction tips" title="Edit wiki page|Save the page as a completed translation." name="save" value="Complete Translation" onclick="needToConfirm=false">
		<?php }else{ ?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_minor']->value=='y'&&mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_minor']!='n'){?>
			<input type="submit" class="wikiaction tips" name="minor" title="Edit wiki page|<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_watch_minor']){?>Save the page, but do not count it as new content to be translated.<?php }else{ ?>Save the page, but do not send notifications and do not count it as new content to be translated.<?php }?>" value="Save Minor Edit" onclick="needToConfirm=false;">
			<?php }?>
			<input type="submit" class="wikiaction" title="Save the page." name="save" value="Save" onclick="needToConfirm=false;">
		<?php }?>
	<?php }?>
	<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?>
	<input type="submit" class="wikiaction" title="Cancel the edit, you will lose your changes." name="cancel_edit" value="Cancel Edit" onclick="needToConfirm=false;">
	<?php }?>
<?php }?>
</div>
<?php }} ?>