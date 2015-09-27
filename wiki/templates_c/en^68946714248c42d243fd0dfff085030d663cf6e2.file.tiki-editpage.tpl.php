<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 10:50:56
         compiled from "/var/www/html/Website/wiki/templates/tiki-editpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1495719465304fd106c22b7-43478424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68946714248c42d243fd0dfff085030d663cf6e2' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/tiki-editpage.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1495719465304fd106c22b7-43478424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'prefs' => 0,
    'customTip' => 0,
    'customTipTitle' => 0,
    'wikiHeaderTpl' => 0,
    'translation_mode' => 0,
    'hdr' => 0,
    'pageAlias' => 0,
    'data' => 0,
    'category_needed' => 0,
    'contribution_needed' => 0,
    'summary_needed' => 0,
    'likepages' => 0,
    'preview' => 0,
    'diff_style' => 0,
    'source_page' => 0,
    'diff_summaries' => 0,
    'diff' => 0,
    'prompt_for_edit_or_translate' => 0,
    'page_ref_id' => 0,
    'cell' => 0,
    'pos' => 0,
    'current_page_id' => 0,
    'add_child' => 0,
    'page_badchars_display' => 0,
    'target_page' => 0,
    'pagedata' => 0,
    'tiki_p_freetags_tag' => 0,
    'commentdata' => 0,
    'show_watch' => 0,
    'watch_checked' => 0,
    'wysiwyg' => 0,
    'tiki_p_upload_picture' => 0,
    'tikidomain' => 0,
    'tiki_p_modify_object_categories' => 0,
    'categories' => 0,
    'categIds' => 0,
    'showPropertiesTab' => 0,
    'tiki_p_use_content_templates' => 0,
    'templates' => 0,
    'templateId' => 0,
    'tiki_p_edit_content_templates' => 0,
    'tiki_p_lock' => 0,
    'tiki_p_admin_wiki' => 0,
    'lock_it' => 0,
    'comments_enabled' => 0,
    'tiki_p_use_HTML' => 0,
    'allowhtml' => 0,
    'suck_url' => 0,
    'parsehtml' => 0,
    'tiki_p_export_wiki' => 0,
    'tiki_p_wiki_attach_files' => 0,
    'tiki_p_wiki_admin_attachments' => 0,
    'copyrightTitle' => 0,
    'copyrights' => 0,
    'copyrightYear' => 0,
    'copyrightAuthors' => 0,
    'copyrightHolder' => 0,
    'showBiblioSection' => 0,
    'showstructs' => 0,
    'page_info' => 0,
    'tiki_p_edit_structures' => 0,
    'description' => 0,
    'user' => 0,
    'footnote' => 0,
    'tiki_p_wiki_admin_ratings' => 0,
    'poll_rated' => 0,
    'rating' => 0,
    'tiki_p_admin_poll' => 0,
    'polls_templates' => 0,
    'template' => 0,
    'poll_template' => 0,
    'tiki_p_admin_polls' => 0,
    'languages' => 0,
    'lang' => 0,
    'translationOf' => 0,
    'trads' => 0,
    'urgent_allowed' => 0,
    'translation_critical' => 0,
    'diff_oldver' => 0,
    'diff_newver' => 0,
    'headerlib' => 0,
    'geolocation_string' => 0,
    'explicit_namespace' => 0,
    'anon_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5304fd1127d643_30463458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5304fd1127d643_30463458')) {function content_5304fd1127d643_30463458($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_modifier_tiki_long_time')) include 'lib/smarty_tiki/modifier.tiki_long_time.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/Website/wiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_textarea')) include 'lib/smarty_tiki/block.textarea.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
?>
<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_contribution_mandatory']=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<strong class='mandatory_note'>Fields marked with an * are mandatory.</strong>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['customTip']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customTip']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>$_smarty_tpl->tpl_vars['customTipTitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['wikiHeaderTpl']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ("wiki:".((string)$_smarty_tpl->tpl_vars['wikiHeaderTpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
	
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>
<div class="floatright">
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_icon'=>"magnifier",'_class'=>"previewBtn",'_ajax'=>"n")); $_block_repeat=true; echo smarty_block_self_link(array('_icon'=>"magnifier",'_class'=>"previewBtn",'_ajax'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Preview your changes.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_icon'=>"magnifier",'_class'=>"previewBtn",'_ajax'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 $(".previewBtn").click(function(){
	if ($('#autosave_preview:visible').length === 0) {
		auto_save_data['editwiki'] = "";
		auto_save('editwiki', autoSaveId);
		if (!ajaxPreviewWindow) {
			$('#autosave_preview').slideDown('slow', function(){ ajax_preview( 'editwiki', autoSaveId, true );});
		}
	} else {
		$('#autosave_preview').slideUp('slow');
	}
	return false;
});<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='n'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_edit_section']=='y'){?>Edit Section:<?php }else{ ?>Edit:<?php }?> <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php if ($_smarty_tpl->tpl_vars['pageAlias']->value!=''){?> (<?php echo $_smarty_tpl->tpl_vars['pageAlias']->value;?>
)<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }else{ ?>
   <?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Update '<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
   
<?php if (isset($_smarty_tpl->tpl_vars['data']->value['draft'])){?>
	Draft written on <?php echo smarty_modifier_tiki_long_time($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']);?>
<br/>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['draft']['lastModif']<$_smarty_tpl->tpl_vars['data']->value['lastModif']){?>
		<b>Warning: new versions of this page have been made after this draft</b>
	<?php }?>
<?php }?>
<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')=='sandbox'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		The SandBox is a page where you can practice your editing skills, use the preview feature to preview the appearance of the page, no versions are stored for this page.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['category_needed']->value=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="highlight"><em class='mandatory_note'>A category is mandatory</em></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['contribution_needed']->value=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="highlight"><em class='mandatory_note'>A contribution is mandatory</em></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['summary_needed']->value)&&$_smarty_tpl->tpl_vars['summary_needed']->value=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'Warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="highlight"><em class='mandatory_note'>An edit summary is mandatory</em></div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'Warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['likepages']->value){?>
	<div>
		Perhaps you are looking for:
		<?php if (count($_smarty_tpl->tpl_vars['likepages']->value)<0){?>
			<ul>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
					<li>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']], ENT_QUOTES, 'UTF-8', true);?>
</a>
					</li>
				<?php endfor; endif; ?>
			</ul>
		<?php }else{ ?>
			<table class="normal"><tr>
				<?php echo smarty_function_cycle(array('name'=>'table','values'=>',,,,</tr><tr>','print'=>false,'advance'=>false),$_smarty_tpl);?>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?>
					<td><a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']], ENT_QUOTES, 'UTF-8', true);?>
</a></td><?php echo smarty_function_cycle(array('name'=>'table'),$_smarty_tpl);?>

				<?php endfor; endif; ?>
			</tr></table>
		<?php }?>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-preview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)){?>
	<div id="diff_outer">
		<div style="overflow:auto;height:20ex;" id="diff_history">
			<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y'){?>		
				<h2>Translate from: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source_page']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
				Changes that need to be translated are highlighted below.
			<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate ('pagehistory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('cant'=>0), 0);?>

		</div>
		<?php if ($_smarty_tpl->tpl_vars['diff_summaries']->value){?>
			<div class="wikitext" id="diff_versions">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['diff'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['diff']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['diff_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['diff']->key => $_smarty_tpl->tpl_vars['diff']->value){
$_smarty_tpl->tpl_vars['diff']->_loop = true;
?>
						<li>
							Version: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff']->value['version'], ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['diff']->value['comment'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "<em>No comment</em>" : $tmp);?>

							<?php if (count($_smarty_tpl->tpl_vars['diff_summaries']->value)>1){?>
								<?php $_smarty_tpl->tpl_vars['diff_version'] = new Smarty_variable($_smarty_tpl->tpl_vars['diff']->value['version'], null, 0);?>
								<?php echo smarty_function_icon(array('_id'=>"arrow_right",'onclick'=>"\$('input[name=oldver]').val(".((string)$_smarty_tpl->tpl_vars['diff_version']->value).");\$('#editpageform').submit();return false;",'_text'=>"View",'style'=>"cursor: pointer"),$_smarty_tpl);?>

							<?php }?>
						</li>
					<?php } ?>
					<?php echo smarty_function_button(array('_onclick'=>"\$('input[name=oldver]').val(1);\$('#editpageform').submit();return false;",'_text'=>"All Versions",'_ajax'=>"n"),$_smarty_tpl);?>

				</ul>
			</div>
		<?php }?>
	</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prompt_for_edit_or_translate']->value=='y'){?>
	<?php echo $_smarty_tpl->getSubTemplate ('tiki-edit-page-include-prompt_for_edit_or_translate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>

<form  enctype="multipart/form-data" method="post" action="tiki-editpage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
" id='editpageform' name='editpageform'>

	<input type="hidden" name="no_bl" value="y">
	<?php if (!empty($_REQUEST['returnto'])){?><input type="hidden" name="returnto" value="<?php echo $_REQUEST['returnto'];?>
"><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)){?>
		<select name="diff_style" class="wikiaction"title="Edit wiki page|Select the style used to display differences to be translated.">
			<option value="htmldiff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="htmldiff"){?> selected="selected"<?php }?>>html</option>
			<option value="inlinediff"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff"){?> selected="selected"<?php }?> >text</option>			  
			<option value="inlinediff-full"<?php if (isset($_smarty_tpl->tpl_vars['diff_style']->value)&&$_smarty_tpl->tpl_vars['diff_style']->value=="inlinediff-full"){?> selected="selected"<?php }?> >text full</option>			  
		</select>
		<input type="submit" class="wikiaction tips" title="Edit wiki page|Change the style used to display differences to be translated." name="preview" value="Change diff styles" onclick="needToConfirm=false;">
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['page_ref_id']->value){?><input type="hidden" name="page_ref_id" value="<?php echo $_smarty_tpl->tpl_vars['page_ref_id']->value;?>
"><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['hdr']->value)){?><input type="hidden" name="hdr" value="<?php echo $_smarty_tpl->tpl_vars['hdr']->value;?>
"><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['cell']->value)){?><input type="hidden" name="cell" value="<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>
"><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['pos']->value)){?><input type="hidden" name="pos" value="<?php echo $_smarty_tpl->tpl_vars['pos']->value;?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['current_page_id']->value){?><input type="hidden" name="current_page_id" value="<?php echo $_smarty_tpl->tpl_vars['current_page_id']->value;?>
"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['add_child']->value){?><input type="hidden" name="add_child" value="true"><?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['preview']->value||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='top'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']=='both'){?>
		<div class='top_actions'>
			<?php echo $_smarty_tpl->getSubTemplate ('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</div>
	<?php }?>

	<table class="formcolor" width="100%">
		<tr>
			<td colspan="2">
				<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)){?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y'){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
						<p>Page name: <input type="text" name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<input type="submit" name="rename" value="Rename">
						</p>
				<?php }else{ ?>
					<input type="hidden" name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
"> 
					
				<?php }?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_editpage','cookietab'=>1)); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Edit page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Edit page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<?php if ($_smarty_tpl->tpl_vars['translation_mode']->value=='y'){?>
							<div class="translation_message">
								<h2>Translate to: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['target_page']->value, ENT_QUOTES, 'UTF-8', true);?>
</h2>
								<p>Reproduce the changes highlighted on the left using the editor below.</p>
							</div>
						<?php }?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('textarea', array('codemirror'=>'true','syntax'=>'tiki')); $_block_repeat=true; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['pagedata']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_textarea(array('codemirror'=>'true','syntax'=>'tiki'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='edit'){?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y'){?>
									<fieldset>
										<legend>Freetags</legend>
										<table>
											<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

										</table>
									</fieldset>
								<?php }?>
						<?php }?>
						<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?>
							<fieldset>
								<label for="comment">Describe the change you made: <?php echo smarty_function_help(array('url'=>'Editing+Wiki+Pages','desc'=>"Edit comment: Enter some text to describe the changes you are currently making"),$_smarty_tpl);?>
</label>
								<input style="width:98%;" class="wikiedit" type="text" id="comment" name="comment" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['commentdata']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								<?php if (isset($_smarty_tpl->tpl_vars['show_watch']->value)&&$_smarty_tpl->tpl_vars['show_watch']->value=='y'){?>
									<label for="watch">Monitor this page:</label>
									<input type="checkbox" id="watch" name="watch" value="1"<?php if ($_smarty_tpl->tpl_vars['watch_checked']->value=='y'){?> checked="checked"<?php }?>>
								<?php }?>
							</fieldset>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_contribution']=='y'){?>
								<fieldset>
									<legend>Contributions</legend>
									<table>
										<?php echo $_smarty_tpl->getSubTemplate ('contribution.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									</table>
								</fieldset>
							<?php }?>
							<?php if ((!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_pictures']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_upload_picture']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_filegals_manager']!='y'){?>
								<fieldset>
									<legend>Upload picture:</legend>
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input type="hidden" name="hasAlreadyInserted" value="">
									<input type="hidden" name="prefix" value="/img/wiki_up/<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value){?><?php echo $_smarty_tpl->tpl_vars['tikidomain']->value;?>
/<?php }?>">
									<input name="picfile1" type="file" onchange="javascript:insertImgFile('editwiki','picfile1','hasAlreadyInserted','img')">
									<div id="new_img_form"></div>
									<a href="javascript:addImgForm()" onclick="needToConfirm = false;">Add another image</a>
								</fieldset>
							<?php }?>
				
						<?php }?>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Edit page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&count($_smarty_tpl->tpl_vars['categories']->value)>0){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Categories")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Categories"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['categIds']->value){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<strong>Categorization has been preset for this edit</strong>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['o'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['o']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['name'] = 'o';
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['categIds']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['o']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['o']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['o']['total']);
?>
									<input type="hidden" name="cat_categories[]" value="<?php echo $_smarty_tpl->tpl_vars['categIds']->value[$_smarty_tpl->getVariable('smarty')->value['section']['o']['index']];?>
">
								<?php endfor; endif; ?>
								<input type="hidden" name="cat_categorize" value="on">
								
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_categorize_structure']=='y'){?>
									Categories will be inherited from the structure top page
								<?php }?>
							<?php }else{ ?>
								<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?>
									<?php echo $_smarty_tpl->getSubTemplate ('categorize.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('notable'=>'y'), 0);?>

								<?php }?>
							<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Categories"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='freetagstab'){?>
						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y'){?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Freetags")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Freetags"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								<fieldset>
									<legend>Freetags</legend>
									<table>
										<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									</table>
								</fieldset>
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Freetags"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					<?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['showPropertiesTab']->value)){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Properties")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Properties"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_templates']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_content_templates']->value=='y'){?>
								<fieldset>
									<legend>Apply template:</legend>
									<select id="templateId" name="templateId" onchange="javascript:document.getElementById('editpageform').submit();" onclick="needToConfirm = false;">
										<option value="0">none</option>
										<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['templates']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
										<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['templateId']->value==$_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['templateId']){?>selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['templates']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
										<?php endfor; endif; ?>
									</select>
									<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_content_templates']->value=='y'){?>
										<a style="align=right;" href="tiki-admin_content_templates.php" class="link" onclick="needToConfirm = true;">Admin Content Templates</a>
									<?php }?>
								</fieldset>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')){?>
								<fieldset>
									<legend>Lock this page</legend>
									<input type="checkbox" id="lock_it" name="lock_it" <?php if ($_smarty_tpl->tpl_vars['lock_it']->value=='y'){?>checked="checked"<?php }?>>
								</fieldset>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_comments_allow_per_page']!='n'){?>
								<fieldset>
									<legend>Allow comments on this page</legend>
									<input type="checkbox" id="comments_enabled" name="comments_enabled" <?php if ($_smarty_tpl->tpl_vars['comments_enabled']->value=='y'){?>checked="checked"<?php }?>>
								</fieldset>
							<?php }?>
				
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_allowhtml']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_use_HTML']->value=='y'&&($_smarty_tpl->tpl_vars['wysiwyg']->value!='y'||$_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']=='y')){?>
								<fieldset>
									<legend>Allow HTML:</legend>
									<input type="checkbox" name="allowhtml" <?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y'){?>checked="checked"<?php }?>>
								</fieldset>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['ajax_autosave']=="y"){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("input[name=allowhtml]").change(function() {
	auto_save( "editwiki", autoSaveId );
});
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
							<?php }else{ ?>
								<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y'){?>on<?php }?>">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_html']=='y'){?>
								<fieldset>
									<legend>Import HTML:</legend>
									<input class="wikiedit" type="text" id="suck_url" name="suck_url" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['suck_url']->value, ENT_QUOTES, 'UTF-8', true);?>
">&nbsp;
									<input type="submit" class="wikiaction" name="do_suck" value="Import" onclick="needToConfirm=false;">&nbsp;
									<label><input type="checkbox" name="parsehtml" <?php if ($_smarty_tpl->tpl_vars['parsehtml']->value=='y'){?>checked="checked"<?php }?>>&nbsp;
									Try to convert HTML to wiki. </label>
								</fieldset>
							<?php }?>
							
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_import_page']=='y'){?>
								<fieldset>
									<legend>Import page:</legend>
									<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
									<input id="userfile1" name="userfile1" type="file">
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_export']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_export_wiki']->value=='y'){?>
										<a href="tiki-export_wiki_pages.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;all=1" class="link">export all versions</a>
									<?php }?>
								</fieldset>
							<?php }?>
							
							<?php if (!isset($_smarty_tpl->tpl_vars['wysiwyg']->value)||$_smarty_tpl->tpl_vars['wysiwyg']->value!='y'){?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_attachments']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_wiki_attach_files']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_attachments']->value=='y')){?>
									<fieldset>
										<legend>Upload file:</legend>
										<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
										<input type="hidden" name="hasAlreadyInserted2" value="">
										<input type="hidden" id="page2" name="page2" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
										<input name="userfile2" type="file" id="attach-upload">
										 <label>Comment:<input type="text" name="attach_comment" maxlength="250" id="attach-comment"></label>
										<input type="submit" class="wikiaction" name="attach" value="Attach" onclick="javascript:needToConfirm=false;insertImgFile('editwiki','userfile2','hasAlreadyInserted2','file', 'page2', 'attach_comment'); return true;">
									</fieldset>
								<?php }?>
	
							<?php }?>
							
							<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'){?>
									<fieldset>
										<legend>Copyright:</legend>
										<table class="formcolor" border="0">
											<tr>
												<td><label for="copyrightTitle">Title:</label></td>
												<td><input size="40" class="wikiedit" type="text" id="copyrightTitle" name="copyrightTitle" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['copyrightTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
												<?php if (!empty($_smarty_tpl->tpl_vars['copyrights']->value)){?>
													<td rowspan="3"><a href="copyrights.php?page=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
">To edit the copyright notices</a></td>
												<?php }?>
											</tr>
											<tr>
												<td><label for="copyrightYear">Year:</label></td>
												<td><input size="4" class="wikiedit" type="text" id="copyrightYear" name="copyrightYear" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['copyrightYear']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
											</tr>
											<tr>
												<td><label for="copyrightAuthors">Authors:</label></td>
												<td><input size="40" class="wikiedit" id="copyrightAuthors" name="copyrightAuthors" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['copyrightAuthors']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
											</tr>
											<tr>
												<td><label for="copyrightHolder">Copyright Holder :</label></td>
												<td><input size="40" class="wikiedit" id="copyrightHolder" name="copyrightHolder" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['copyrightHolder']->value, ENT_QUOTES, 'UTF-8', true);?>
"></td>
											</tr>
										</table>
									</fieldset>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiplugin_addreference']=='y'&&$_smarty_tpl->tpl_vars['showBiblioSection']->value){?>
									<fieldset>
										<legend>Bibliography</legend>
											<?php echo $_smarty_tpl->getSubTemplate ('addreference.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									</fieldset>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']=='properties'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_freetags_edit_position']==''){?>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_freetags_tag']->value=='y'){?>
										<fieldset>
											<legend>Freetags</legend>
											<table>
												<?php echo $_smarty_tpl->getSubTemplate ('freetag.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

											</table>
										</fieldset>
									<?php }?>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_icache']=='y'){?>
									<fieldset>
										<legend>Cache</legend>
									    <select id="wiki_cache" name="wiki_cache">
										    <option value="0" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0){?>selected="selected"<?php }?>>0 (no cache)</option>
										    <option value="60" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==60){?>selected="selected"<?php }?>>1 minute</option>
										    <option value="300" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==300){?>selected="selected"<?php }?>>5 minutes</option>
										    <option value="600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==600){?>selected="selected"<?php }?>>10 minute</option>
										    <option value="900" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==900){?>selected="selected"<?php }?>>15 minutes</option>
										    <option value="1800" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==1800){?>selected="selected"<?php }?>>30 minute</option>
										    <option value="3600" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==3600){?>selected="selected"<?php }?>>1 hour</option>
										    <option value="7200" <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==7200){?>selected="selected"<?php }?>>2 hours</option>
									    </select> 
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_cache']==0){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Only cache a page if it should look the same to all groups authorized to see it.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>
									</fieldset>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_structure']=='y'){?>
									<fieldset>
										<legend>Structures</legend>
											<div id="showstructs">
												<?php if (count($_smarty_tpl->tpl_vars['showstructs']->value)>0){?>
													<ul>
														<?php  $_smarty_tpl->tpl_vars['page_info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page_info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showstructs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page_info']->key => $_smarty_tpl->tpl_vars['page_info']->value){
$_smarty_tpl->tpl_vars['page_info']->_loop = true;
?>
															<li><?php echo $_smarty_tpl->tpl_vars['page_info']->value['pageName'];?>
<?php if (!empty($_smarty_tpl->tpl_vars['page_info']->value['page_alias'])){?>(<?php echo $_smarty_tpl->tpl_vars['page_info']->value['page_alias'];?>
)<?php }?></li>
														<?php } ?>  
													</ul>
												<?php }?>
											  
												<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_structures']->value=='y'){?>
													<a href="tiki-admin_structures.php">Manage structures <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a>
												<?php }?>
											</div>
									</fieldset>	
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'){?>
									<fieldset>
										<legend>License:</legend>
										<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
										<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice']!=''){?>
											<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Important:")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

												<strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiSubmitNotice'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
											<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Important:"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

										<?php }?>
									</fieldset>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_authors_style_by_page']=='y'){?>
									<fieldset>
										<legend>Authors' style</legend>
										<?php echo $_smarty_tpl->getSubTemplate ('wiki_authors_style.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tr_class'=>'formcolor','wiki_authors_style_site'=>'y','style'=>''), 0);?>

									</fieldset>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_description']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y'){?>
								<fieldset>
									<?php if ($_smarty_tpl->tpl_vars['prefs']->value['metatag_pagedesc']=='y'){?>
										<legend>Description (used for metatags):</legend>
									<?php }else{ ?>
										<legend>Description:</legend>
									<?php }?>
									<input style="width:98%;" type="text" id="description" name="description" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
								</fieldset>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_footnotes']=='y'){?>
								<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
									<fieldset>
										<legend>My Footnotes:</legend>
										<textarea id="footnote" name="footnote" rows="8" cols="42" style="width:98%;" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['footnote']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</fieldset>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_ratings']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_admin_ratings']->value=='y'){?>
								<fieldset>
									<legend>Use rating:</legend>

									<?php  $_smarty_tpl->tpl_vars['rating'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rating']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['poll_rated']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rating']->key => $_smarty_tpl->tpl_vars['rating']->value){
$_smarty_tpl->tpl_vars['rating']->_loop = true;
?>
										<div>
											<a href="tiki-admin_poll_options.php?pollId=<?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['pollId'];?>
"><?php echo $_smarty_tpl->tpl_vars['rating']->value['info']['title'];?>
</a>
											<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['page']->value), null, 0);?>
											<?php $_smarty_tpl->tpl_vars['thispoll_rated'] = new Smarty_variable($_smarty_tpl->tpl_vars['rating']->value['info']['pollId'], null, 0);?>
											<?php echo smarty_function_button(array('href'=>"?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value)."&amp;removepoll=".((string)$_smarty_tpl->tpl_vars['thispoll_rated']->value),'_text'=>"Disable"),$_smarty_tpl);?>

										</div>
									<?php } ?>

									<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_poll']->value=='y'){?>
										<?php echo smarty_function_button(array('href'=>"tiki-admin_polls.php",'_text'=>"Admin Polls"),$_smarty_tpl);?>

									<?php }?>

									<?php if (count($_smarty_tpl->tpl_vars['poll_rated']->value)<=1||$_smarty_tpl->tpl_vars['prefs']->value['poll_multiple_per_object']=='y'){?>
										<div>
											<?php if (count($_smarty_tpl->tpl_vars['polls_templates']->value)){?>
												Type
												<select name="poll_template">
													<option value="0">none</option>
													<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['polls_templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
														<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['pollId'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['template']->value['pollId']==$_smarty_tpl->tpl_vars['poll_template']->value){?> selected="selected"<?php }?>><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>
													<?php } ?>
												</select>
												Title
												<input type="text" name="poll_title" size="22">
											<?php }else{ ?>
												There is no available poll template.
												<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_polls']->value!='y'){?>
													You should ask an admin to create them.
												<?php }?>
											<?php }?>
										</div>
									<?php }?>
								</fieldset>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'){?>
								<fieldset>
									<legend>Language:</legend>
									<select name="lang" id="lang">
										<option value="">Unknown</option>
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
"<?php if ($_smarty_tpl->tpl_vars['lang']->value==$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']||(!($_smarty_tpl->tpl_vars['data']->value['page_id'])&&$_smarty_tpl->tpl_vars['lang']->value==''&&$_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['value']==$_smarty_tpl->tpl_vars['prefs']->value['language'])){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'];?>
</option>
										<?php endfor; endif; ?>
									</select>
									<br>
									<?php ob_start();?><?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
To translate, do not change the language and the content.
									Instead, <a href="%0">create a new translation</a> in the new language.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>"tiki-edit_translation.php?no_bl=y&amp;page=".$_tmp1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<?php if ($_smarty_tpl->tpl_vars['translationOf']->value){?>
										<input type="hidden" name="translationOf" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['translationOf']->value, ENT_QUOTES, 'UTF-8', true);?>
">
									<?php }?>
								</fieldset>
								<?php if (count($_smarty_tpl->tpl_vars['trads']->value)>1&&$_smarty_tpl->tpl_vars['urgent_allowed']->value){?>
									<fieldset <?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_urgent_translation']!='y'||$_smarty_tpl->tpl_vars['diff_style']->value){?> style="display:none;"<?php }?>>
										<legend>Translation request:</legend>
										<input type="hidden" name="lang" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<input type="checkbox" id="translation_critical" name="translation_critical" id="translation_critical"<?php if ($_smarty_tpl->tpl_vars['translation_critical']->value){?> checked="checked"<?php }?>>
										<label for="translation_critical">Send urgent translation request.</label>
										<?php if ($_smarty_tpl->tpl_vars['diff_style']->value){?>
											<input type="hidden" name="oldver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_oldver']->value, ENT_QUOTES, 'UTF-8', true);?>
">
											<input type="hidden" name="newver" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['diff_newver']->value, ENT_QUOTES, 'UTF-8', true);?>
">
										<?php }?>
									</fieldset>
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['geo_locate_wiki']=='y'){?>
								<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

								<div class="map-container" data-target-field="geolocation" style="height: 250px; width: 250px;"></div>
								<input type="hidden" name="geolocation" value="<?php echo $_smarty_tpl->tpl_vars['geolocation_string']->value;?>
">
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y'){?>
								<fieldset>
									<legend>Namespace</legend>
									<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('title'=>"Advanced usage")); $_block_repeat=true; echo smarty_block_remarksbox(array('title'=>"Advanced usage"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

										<p>The namespace for a page is guessed automatically from the page name. However, some exceptions may arise. This option allows to override the namespace.</p>
									<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('title'=>"Advanced usage"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									<label>
										Explicit Namespace
										<input type="text" name="explicit_namespace" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['explicit_namespace']->value, ENT_QUOTES, 'UTF-8', true);?>
">
									</label>
								</fieldset>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=="y"){?>
								<a href="tiki-admin.php?page=wiki">Admin wiki preferences <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a>
							<?php }?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Properties"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value=='y'){?>
							<input type="hidden" name="allowhtml" value="<?php if ($_smarty_tpl->tpl_vars['allowhtml']->value=='y'){?>on<?php }?>">
						<?php }?>
					<?php }?>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_editpage','cookietab'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</td>
		</tr>
		
		
		<?php if (mb_strtolower($_smarty_tpl->tpl_vars['page']->value, 'UTF-8')!='sandbox'){?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_antibot']=='y'&&(isset($_smarty_tpl->tpl_vars['anon_user']->value)&&$_smarty_tpl->tpl_vars['anon_user']->value=='y')){?>
				<?php echo $_smarty_tpl->getSubTemplate ('antibot.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tr_style'=>"formcolor"), 0);?>

			<?php }?>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_actions_bar']!='top'){?>
			<tr>
				<td colspan="2" style="text-align:center;">
					<?php echo $_smarty_tpl->getSubTemplate ('wiki_edit_actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</td>
			</tr>
		<?php }?>
	</table>
</form>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-page_bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>