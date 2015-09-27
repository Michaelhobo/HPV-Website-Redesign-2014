<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 10:50:57
         compiled from "/var/www/html/Website/wiki/templates/tiki-preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16381615285304fd112f3f99-12358176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ee4c47ccac4d2c013fc352f9bfc0fa210273393' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/tiki-preview.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16381615285304fd112f3f99-12358176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'diff_style' => 0,
    'page' => 0,
    'description' => 0,
    'parsed' => 0,
    'has_footnote' => 0,
    'parsed_footnote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5304fd113e9dd7_98649178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5304fd113e9dd7_98649178')) {function content_5304fd113e9dd7_98649178($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
?><!-- templates/tiki-preview.tpl start -->
<div class="wikipreview" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>style="display:none;" id="autosave_preview"><div<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>
	<div style="float:right;">
		<select name="diff_style" id="preview_diff_style">
			<option value="" <?php if (empty($_smarty_tpl->tpl_vars['diff_style']->value)){?>selected="selected"<?php }?>>Preview</option>
			<option value="htmldiff" <?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff"){?>selected="selected"<?php }?>>HTML diff</option>
			<option value="sidediff" <?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="sidediff"){?>selected="selected"<?php }?>>Side-by-side diff</option>
		</select>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#preview_diff_style").change(function(){
	ajaxLoadingShow($("#autosave_preview .wikitext"));
	setCookie("preview_diff_style", $(this).val(), "", "session");
	$.get("tiki-auto_save.php", {
		editor_id: 'editwiki',
		autoSaveId: autoSaveId,
		inPage: true,
		<?php if (isset($_REQUEST['hdr'])){?>hdr: <?php echo $_REQUEST['hdr'];?>
,<?php }?>
		diff_style: $(this).val()
	}, function(data) {
		$("#autosave_preview .wikitext").html(data);
		ajaxLoadingHide();
	});
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon'=>"arrow_left",'_ajax'=>"n",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;")); $_block_repeat=true; echo smarty_block_self_link(array('_icon'=>"arrow_left",'_ajax'=>"n",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Popup preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon'=>"arrow_left",'_ajax'=>"n",'_onclick'=>"ajax_preview( 'editwiki', autoSaveId );"."$"."('#autosave_preview').hide();return false;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon'=>"close",'_ajax'=>"n",'_onclick'=>"$"."('#autosave_preview').hide();return false;")); $_block_repeat=true; echo smarty_block_self_link(array('_icon'=>"close",'_ajax'=>"n",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Close preview<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon'=>"close",'_ajax'=>"n",'_onclick'=>"$"."('#autosave_preview').hide();return false;"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$('#autosave_preview').resizable({
	handles:{'s':'#autosave_preview_grippy'},
	alsoResize:'#autosave_preview>div',
	resize: function(event, ui) {
		setCookie("wiki", $('#autosave_preview').height(), "preview");
	}
}).height(getCookie("wiki", "preview", ""));
$("#autosave_preview>div").height(getCookie("wiki", "preview", ""));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<h2>Preview: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'){?>
<small><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</small>
<?php }?>
<div align="center" class="attention" style="font-weight:bold">Note: Remember that this is only a preview, and has not yet been saved!</div>
<div  class="wikitext">
<?php echo $_smarty_tpl->tpl_vars['parsed']->value;?>

</div>
<?php if ($_smarty_tpl->tpl_vars['has_footnote']->value&&isset($_smarty_tpl->tpl_vars['parsed_footnote']->value)){?>
<div  class="wikitext"><?php echo $_smarty_tpl->tpl_vars['parsed_footnote']->value;?>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>
</div><span id="autosave_preview_grippy" class="ui-resizable-handle ui-resizable-s"> </span>
<?php }?>
</div>
<hr style="clear:both; height:0px;"/> 
<!-- templates/tiki-preview.tpl end -->
<?php }} ?>