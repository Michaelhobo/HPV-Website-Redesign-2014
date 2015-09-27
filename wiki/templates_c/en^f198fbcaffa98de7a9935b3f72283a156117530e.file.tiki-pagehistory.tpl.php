<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 18:23:40
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-pagehistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13485568965256f0ac5a8834-64274900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f198fbcaffa98de7a9935b3f72283a156117530e' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-pagehistory.tpl',
      1 => 1371580367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13485568965256f0ac5a8834-64274900',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'noHistory' => 0,
    'show_all_versions' => 0,
    'preview' => 0,
    'info' => 0,
    'tiki_p_rollback' => 0,
    'ver_cant' => 0,
    'flaggedrev_approval' => 0,
    'tiki_p_wiki_approve' => 0,
    'flaggedrev_preview_approved' => 0,
    'previewd' => 0,
    'source' => 0,
    'sourced' => 0,
    'prefs' => 0,
    'flaggedrev_compare_approve' => 0,
    'new' => 0,
    'diff_style' => 0,
    'history_offset' => 0,
    'history' => 0,
    'tiki_p_wiki_view_source' => 0,
    'tiki_p_remove' => 0,
    'tiki_p_wiki_view_latest' => 0,
    'translation_sources' => 0,
    'translation_targets' => 0,
    'target' => 0,
    'contributions' => 0,
    'contributors' => 0,
    'current' => 0,
    'old' => 0,
    'element' => 0,
    'lock' => 0,
    'tiki_p_edit' => 0,
    'languages' => 0,
    'lang' => 0,
    'show_translation_history' => 0,
    'paginate' => 0,
    'history_cant' => 0,
    'maxRecords' => 0,
    'history_pagesize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5256f0aebf13d4_34967231',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256f0aebf13d4_34967231')) {function content_5256f0aebf13d4_34967231($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_username')) include 'lib/smarty_tiki/modifier.username.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
History: <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['page']->value), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_text'=>"View page"),$_smarty_tpl);?>

	<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)){?>
		<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=="y"){?>
			<?php echo smarty_function_button(array('_text'=>"Show Edit Sessions",'show_all_versions'=>"n",'href'=>"?clear_versions=1",'_auto_args'=>"*"),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smarty_function_button(array('_text'=>"Show All Versions",'show_all_versions'=>"y",'href'=>"?clear_versions=1",'_auto_args'=>"*"),$_smarty_tpl);?>

		<?php }?>
	<?php }?>
</div>

<?php if ($_smarty_tpl->tpl_vars['preview']->value){?>
	<h2>Preview of version: <?php echo $_smarty_tpl->tpl_vars['preview']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version']==$_smarty_tpl->tpl_vars['preview']->value){?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version']!=$_smarty_tpl->tpl_vars['preview']->value&&$_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y'){?>
		<div class="navbar">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Rollback")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Rollback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rollback to this version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['preview']->value,'_title'=>"Rollback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</div>
	<?php }?>
	<div>
		<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)){?>
		  	<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['preview_idx'],'offset_arg'=>"preview_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
	</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<form method="post" action="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;preview=<?php echo rawurlencode($_smarty_tpl->tpl_vars['preview']->value);?>
">
				<?php if ($_smarty_tpl->tpl_vars['flaggedrev_preview_approved']->value){?>
					<p>This revision is currently marked as approved.<p>
					<div class="submit">
						<input type="hidden" name="unapprove" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<input type="submit" name="flaggedrev" value="Remove Approval">
					</div>
				<?php }else{ ?>
					<p>This revision has not been approved.<p>
					<div class="submit">
						<input type="hidden" name="approve" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['preview']->value, ENT_QUOTES, 'UTF-8', true);?>
">
						<input type="submit" name="flaggedrev" value="Approve Revision">
					</div>
				<?php }?>
			</form>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
	<div class="wikitext" id="page-data">
		<?php echo $_smarty_tpl->tpl_vars['previewd']->value;?>

	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['source']->value){?>
	<h2>
		Source of version: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>

		<?php if ($_smarty_tpl->tpl_vars['info']->value['version']==$_smarty_tpl->tpl_vars['source']->value){?><small><small>(current)</small></small><?php }?>
	</h2>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['version']!=$_smarty_tpl->tpl_vars['source']->value&&$_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y'){?>
		<div class="navbar"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Rollback")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Rollback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rollback to this version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['source']->value,'_title'=>"Rollback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
	<?php }?>
	<div>
		<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)){?>
		  	<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n"){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }else{ ?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['source_idx'],'offset_arg'=>"source_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		<?php }?>
	</div>
	<textarea data-codemirror="true" data-syntax='tiki' class="wikiedit readonly" style="width:100%;height:400px" readonly="readonly" id="page_source"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sourced']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_jquery_ui']=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_syntax_highlighter']!="y"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
$("#page_source").resizable();<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y'&&$_smarty_tpl->tpl_vars['flaggedrev_compare_approve']->value){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content Approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form method="post" action="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;preview=<?php echo rawurlencode($_smarty_tpl->tpl_vars['new']->value['version']);?>
">
			<p>This revision has not been approved.<p>
			<div class="submit">
				<input type="hidden" name="approve" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['new']->value['version'], ENT_QUOTES, 'UTF-8', true);?>
">
				<input type="submit" name="flaggedrev" value="Approve Revision">
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content Approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<hr style="clear: both;"/>

<?php if (!isset($_smarty_tpl->tpl_vars['noHistory']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['source']->value||$_smarty_tpl->tpl_vars['diff_style']->value){?><h2>History</h2><?php }?>
	<form action="tiki-pagehistory.php" method="get">
		<input type="hidden" name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<input type="hidden" name="history_offset" value="<?php echo $_smarty_tpl->tpl_vars['history_offset']->value;?>
">
		<div style="text-align:center;">
			<?php if (($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old")&&$_smarty_tpl->tpl_vars['history']->value){?>
				<div style=" text-align:right;">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y"){?><?php echo smarty_function_button(array('_text'=>"Advanced",'_id'=>"toggle_diffs",'_ajax'=>"n"),$_smarty_tpl);?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#toggle_diffs a").click(function(){
	if ($(this).text() == "Advanced") {
		$(this).text("Simple");
		if (jqueryTiki.chosen) {
			$("#diff_style_all").next(".chzn-container").show();
			$("#diff_style_simple").next(".chzn-container").hide();
			$("#diff_style_all").attr("name", "diff_style");
			$("#diff_style_simple").attr("name", "");
		} else {
			$("#diff_style_all").show().attr("name", "diff_style");
			$("#diff_style_simple").hide().attr("name", "");
		}
	} else {
		$(this).text("Advanced");
		if (jqueryTiki.chosen) {
			$("#diff_style_all").next(".chzn-container").hide();
			$("#diff_style_simple").next(".chzn-container").show();
			$("#diff_style_all").attr("name", "");
			$("#diff_style_simple").attr("name", "diff_style");
		} else {
			$("#diff_style_all").hide().attr("name", "");
			$("#diff_style_simple").show().attr("name", "diff_style");
		}
	}
	return false;
});
if (jqueryTiki.chosen) {
	if ($("#diff_style_simple").html().indexOf("<?php echo $_smarty_tpl->tpl_vars['diff_style']->value;?>
") > -1) {
		$("#diff_style_all").next(".chzn-container").hide().attr("name", "");
	} else {
		$("#diff_style_simple").next(".chzn-container").hide();
	}
}
<?php if ($_smarty_tpl->tpl_vars['diff_style']->value!="htmldiff"&&$_smarty_tpl->tpl_vars['diff_style']->value!="sidediff"){?>$("#toggle_diffs a").click();<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
					<select name="diff_style" id="diff_style_all"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y"){?> style="display: none"<?php }?>>
						<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff"){?>selected="selected"<?php }?>>HTML diff</option>
						<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff"){?>selected="selected"<?php }?>>Side-by-side diff</option>
						<option value="sidediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-char"){?>selected="selected"<?php }?>>Side-by-side diff by characters</option>
						<option value="inlinediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff"){?>selected="selected"<?php }?>>Inline diff</option>
						<option value="inlinediff-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-char"){?>selected="selected"<?php }?>>Inline diff by characters</option>
						<option value="sidediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-full"){?>selected="selected"<?php }?>>Full side-by-side diff</option>
						<option value="sidediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff-full-char"){?>selected="selected"<?php }?>>Full side-by-side diff by characters</option>
						<option value="inlinediff-full" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full"){?>selected="selected"<?php }?>>Full inline diff</option>
						<option value="inlinediff-full-char" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full-char"){?>selected="selected"<?php }?>>Full inline diff by characters</option>
						<option value="unidiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="unidiff"){?>selected="selected"<?php }?>>Unified diff</option>
						<option value="sideview" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sideview"){?>selected="selected"<?php }?>>Side-by-side view</option>
					</select>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y"){?><select name="diff_style" id="diff_style_simple">
						<option value="htmldiff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff"){?>selected="selected"<?php }?>>HTML diff</option>
						<option value="sidediff" <?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sidediff"){?>selected="selected"<?php }?>>Side-by-side diff</option>
					</select><?php }?>
					<input type="hidden" name="show_all_versions" value="<?php echo $_smarty_tpl->tpl_vars['show_all_versions']->value;?>
">
					<input type="submit" name="compare" value="Compare">
				</div>
			<?php }?>
			<div class="simplebox">
				<b>Legend:</b> v=view
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_source']=="y"){?>, s=source <?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']=="old"){?>, c=compare, d=diff<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y'){?>, b=rollback<?php }?>
			</div>
			<table class="formcolor" width="100%">
				<tr>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'){?><th><input type="submit" name="delete" value="Del"></th><?php }?>
					<th>Information</th>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'){?><th>Contribution</th><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y'){?><th>Contributors</th><?php }?>
					<th>Version</th>
					<th><?php echo smarty_function_icon(array('_id'=>"html"),$_smarty_tpl);?>
</th>
					<th>Action</th>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old"&&$_smarty_tpl->tpl_vars['history']->value){?>
						<th colspan="2">
							<input type="submit" name="compare" value="Compare">
						</th>
					<?php }?>
				</tr>
				<tr class="odd">
					<?php if ($_smarty_tpl->tpl_vars['history_offset']->value==1){?>
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'){?>
							<td>&nbsp;</td>
						<?php }?>
						<td class="left">
							<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['info']->value['lastModif']);?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['info']->value['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['info']->value['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
by %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['info']->value['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['info']->value['ip']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>

							<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'&&$_smarty_tpl->tpl_vars['info']->value['approved']){?><strong>(approved)</strong><?php }?>

							<?php if ($_smarty_tpl->tpl_vars['info']->value['comment']){?><div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['info']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']])&&$_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']]){?>
								<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['info']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value){
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
									<div>
										Updated from: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['source']->value['page'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

									</div>
								<?php } ?>
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']])&&$_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']]){?>
								<?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['info']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value){
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
								<div>
									Used to update: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['target']->value['page'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

								</div>
								<?php } ?>
							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'){?>
							<td><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributions']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']){?>,<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contributions']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php endfor; endif; ?></td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y'){?>
							<td>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']){?>,<?php }?><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['login']);?>
<?php endfor; endif; ?>
							</td>
						<?php }?>
						<td class="button_container"><?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['info']->value['version']){?><strong><?php }?><?php echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
<br>Current<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['info']->value['version']){?></strong><?php }?></td>
						<td class="button_container"><?php if ($_smarty_tpl->tpl_vars['info']->value['is_html']){?><?php echo smarty_function_icon(array('_id'=>'html'),$_smarty_tpl);?>
<?php }elseif($_smarty_tpl->tpl_vars['info']->value['wysiwyg']=="y"){?><?php echo smarty_function_icon(array('_id'=>'text_dropcaps','title'=>'Wiki Wysiwyg'),$_smarty_tpl);?>
<?php }?></td>
						<td class="button_container"><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"View")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"View"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
v<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"View"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_source']=="y"){?>
							&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"Source")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"Source"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['info']->value['version'],'_title'=>"Source"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old"&&$_smarty_tpl->tpl_vars['history']->value){?>
							<td class="button_container">
								<input type="radio" name="oldver" value="0" title="Compare" <?php if (isset($_smarty_tpl->tpl_vars['old']->value['version'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']){?>checked="checked"<?php }?>>
							</td>
							<td class="button_container">
								<input type="radio" name="newver" value="0" title="Compare" <?php if ((isset($_smarty_tpl->tpl_vars['new']->value['version'])&&$_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version'])||(!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])){?>checked="checked"<?php }?>>
							</td>
						<?php }?>
					<?php }?>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

				<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['history']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['element']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['element']->iteration=0;
 $_smarty_tpl->tpl_vars['element']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
 $_smarty_tpl->tpl_vars['element']->iteration++;
 $_smarty_tpl->tpl_vars['element']->index++;
 $_smarty_tpl->tpl_vars['element']->first = $_smarty_tpl->tpl_vars['element']->index === 0;
 $_smarty_tpl->tpl_vars['element']->last = $_smarty_tpl->tpl_vars['element']->iteration === $_smarty_tpl->tpl_vars['element']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hist']['first'] = $_smarty_tpl->tpl_vars['element']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['hist']['last'] = $_smarty_tpl->tpl_vars['element']->last;
?>
					<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
						<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'){?>
							<td class="button_container"><input type="checkbox" name="hist[<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
]"></td>
						<?php }?>
						<td class="left">
							<?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['element']->value['lastModif']);?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['element']->value['user']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['element']->value['user'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
by %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['element']->value['user'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_history_ip']!='n'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
from %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['element']->value['ip']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>

							<?php if ($_smarty_tpl->tpl_vars['element']->value['comment']){?><div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['comment'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>

							<?php if ((isset($_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['flaggedrev_approval']->value)&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'&&$_smarty_tpl->tpl_vars['element']->value['approved']){?><strong>(approved)</strong><?php }?>

							<?php if (isset($_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']])&&$_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']]){?>
								<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_sources']->value[$_smarty_tpl->tpl_vars['element']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value){
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
								<div>
									Updated from: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['source']->value['page'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['page'], ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 at version <?php echo $_smarty_tpl->tpl_vars['source']->value['version'];?>

								</div>
								<?php } ?>
							<?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']])&&$_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']]){?>
								<?php  $_smarty_tpl->tpl_vars['target'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['translation_targets']->value[$_smarty_tpl->tpl_vars['element']->value['version']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target']->key => $_smarty_tpl->tpl_vars['target']->value){
$_smarty_tpl->tpl_vars['target']->_loop = true;
?>
								<div>
									Used to update: <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['target']->value['page'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-index.php",'page'=>htmlspecialchars($_smarty_tpl->tpl_vars['target']->value['page'], ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 to version <?php echo $_smarty_tpl->tpl_vars['target']->value['version'];?>

								</div>
								<?php } ?>
							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'){?>
							<td>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['element']->value['contributions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']){?>&nbsp;<?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['contributions'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php endfor; endif; ?>
							</td>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contributor_wiki']=='y'){?>
							<td>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['element']->value['contributors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?><?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['ix']['first']){?>,<?php }?><?php echo smarty_modifier_username($_smarty_tpl->tpl_vars['element']->value['contributors'][$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['login']);?>
<?php endfor; endif; ?>
							</td>
						<?php }?>
						<td class="button_container">
							<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['element']->value['version']){?><strong><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=="n"&&!empty($_smarty_tpl->tpl_vars['element']->value['session'])){?>
								<em><?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
 - <?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
</em>
							<?php }else{ ?>
								<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['current']->value==$_smarty_tpl->tpl_vars['element']->value['version']){?></strong><?php }?>
						</td>
						<td class="button_container"><?php if ($_smarty_tpl->tpl_vars['element']->value['is_html']=="1"){?><?php echo smarty_function_icon(array('_id'=>"html"),$_smarty_tpl);?>
<?php }?></td>
						<td class="button_container">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"View")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"View"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
v<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'preview'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"View"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_view_source']->value=="y"&&$_smarty_tpl->tpl_vars['prefs']->value['feature_source']=="y"){?>
								&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Source")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Source"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
s<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'source'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Source"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']=="old"){?>
								&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_title'=>"Compare")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_title'=>"Compare"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
c<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"sideview",'_title'=>"Compare"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_title'=>"Diff")); $_block_repeat=true; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_title'=>"Diff"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
d<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('page'=>$_smarty_tpl->tpl_vars['page']->value,'diff2'=>$_smarty_tpl->tpl_vars['element']->value['version'],'diff_style'=>"unidiff",'_title'=>"Diff"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_rollback']->value=='y'&&$_smarty_tpl->tpl_vars['lock']->value!=true){?>
								&nbsp;<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Rollback")); $_block_repeat=true; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Rollback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
b<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_script'=>"tiki-rollback.php",'page'=>$_smarty_tpl->tpl_vars['page']->value,'version'=>$_smarty_tpl->tpl_vars['element']->value['version'],'_title'=>"Rollback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						</td>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']!="old"){?>
						<td class="button_container">
							<?php if ($_smarty_tpl->tpl_vars['show_all_versions']->value=='n'&&!empty($_smarty_tpl->tpl_vars['element']->value['session'])){?>
								<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['session'];?>
"
									title="Older Version" <?php if ((isset($_smarty_tpl->tpl_vars['old']->value['version'])&&isset($_smarty_tpl->tpl_vars['element']->value['session'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['element']->value['session'])||((!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])&&$_smarty_tpl->getVariable('smarty')->value['foreach']['hist']['first'])){?>checked="checked"<?php }?>>
							<?php }else{ ?>
								<input type="radio" name="oldver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
"
									title="Older Version" <?php if ((isset($_smarty_tpl->tpl_vars['old']->value['version'])&&isset($_smarty_tpl->tpl_vars['element']->value['version'])&&$_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['element']->value['version'])||((!isset($_REQUEST['diff_style'])||!$_REQUEST['diff_style'])&&$_smarty_tpl->getVariable('smarty')->value['foreach']['hist']['first'])){?>checked="checked"<?php }?>>
							<?php }?>
						</td>
						<td class="button_container">
							
							<input type="radio" name="newver" value="<?php echo $_smarty_tpl->tpl_vars['element']->value['version'];?>
" title="Select a newer version for comparison"
								<?php if (isset($_smarty_tpl->tpl_vars['new']->value['version'])&&$_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['element']->value['version']){?>checked="checked"<?php }?> >
						</td>
						<?php }?>
					</tr>
				<?php } ?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'){?>
				<tr>
					<td colspan="9" class="right">
						<select name="tra_lang">
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['languages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
							<?php endfor; endif; ?>
						</select>
						<input type="submit" name="update_translation" value="Update Translation"/>
						<?php if ($_smarty_tpl->tpl_vars['show_translation_history']->value){?>
							<input type="hidden" name="show_translation_history" value="1">
							<?php echo smarty_function_button(array('show_translation_history'=>0,'_text'=>"Hide translation history",'_auto_args'=>"*"),$_smarty_tpl);?>

						<?php }else{ ?>
							<?php echo smarty_function_button(array('show_translation_history'=>1,'_text'=>"Show translation history",'_auto_args'=>"*"),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>
				<?php }?>
			</table>
			<?php if ($_smarty_tpl->tpl_vars['paginate']->value){?>
				<?php if (isset($_REQUEST['history_offset'])){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset'=>$_REQUEST['history_offset'],'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }else{ ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['history_cant']->value,'offset_arg'=>"history_offset",'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			<?php }?>
			<input type="checkbox" name="paginate" id="paginate"<?php if ($_smarty_tpl->tpl_vars['paginate']->value){?> checked="checked"<?php }?> onchange="this.form.submit();">
			<label for="paginate">Enable pagination</label>
			<?php if ($_smarty_tpl->tpl_vars['paginate']->value){?>
				<input type="text" name="history_pagesize" id="history_pagesize" value="<?php echo $_smarty_tpl->tpl_vars['history_pagesize']->value;?>
" size="5">
				<label for="history_pagesize">per page</label>
			<?php }?>
		</div>
	</form>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php }} ?>