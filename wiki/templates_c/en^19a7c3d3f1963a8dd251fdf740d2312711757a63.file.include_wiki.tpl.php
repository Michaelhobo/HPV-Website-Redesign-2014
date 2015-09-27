<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 08:23:14
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_wiki.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2062642999525663f2b63f04-82074457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a7c3d3f1963a8dd251fdf740d2312711757a63' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_wiki.tpl',
      1 => 1365263127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2062642999525663f2b63f04-82074457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feedbacksWikiUp' => 0,
    'moveWikiUp' => 0,
    'f' => 0,
    'errorsWikiUp' => 0,
    'prefs' => 0,
    'tags' => 0,
    'tikidomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525663f31221f4_99313897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525663f31221f4_99313897')) {function content_525663f31221f4_99313897($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
?>

<?php if (!empty($_smarty_tpl->tpl_vars['feedbacksWikiUp']->value)||!empty($_smarty_tpl->tpl_vars['moveWikiUp']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"feedback",'title'=>"Feedback")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php if (!empty($_smarty_tpl->tpl_vars['feedbacksWikiUp']->value)){?>
		The following pages were modified:
		<ul>
		<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feedbacksWikiUp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
			<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
		<?php } ?>
		</ul>
	<?php }else{ ?>
		Nothing was changed (no images in wiki_up were found in Wiki pages).
	<?php }?>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"feedback",'title'=>"Feedback"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }elseif(!empty($_smarty_tpl->tpl_vars['moveWikiUp']->value)){?>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['errorsWikiUp']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"errors",'title'=>"Errors")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>"Errors"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<ul>
		<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errorsWikiUp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
			<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
		<?php } ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>"Errors"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	Use the 'Quick Edit' module to easily create or edit wiki pages. Select <a class="rbox-link" href="tiki-admin_modules.php">Admin &gt; Modules</a> to add this (or other) modules.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<form action="tiki-admin.php?page=wiki" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="wikisetprefs" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>"admin_wiki")); $_block_repeat=true; echo smarty_block_tabset(array('name'=>"admin_wiki"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Preferences")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Preferences"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


			<fieldset class="admin">
				<legend>Activate the feature</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki','visible'=>"always"),$_smarty_tpl);?>

			</fieldset>

			<fieldset class="admin">
				<legend>Plugins</legend>
				<?php echo smarty_function_preference(array('name'=>'wikiplugin_author'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_include'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_transclude'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_randominclude'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_slideshow'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_attach'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_backlinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_listpages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_showpages'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_titlesearch'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_wantedpages'),$_smarty_tpl);?>

			</fieldset>

			<?php echo smarty_function_preference(array('name'=>'wikiHomePage'),$_smarty_tpl);?>


			<fieldset>
				<legend>Page display</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_wiki_description','label'=>"Description"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_page_title','label'=>"Display page name as page title"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_name_above','label'=>"Display page name above page"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_pageid','label'=>"Page ID"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_show_version','label'=>"Page version"),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_authors_style','label'=>"List authors"),$_smarty_tpl);?>


				<div class="adminoptionboxchild">
					<?php echo smarty_function_preference(array('name'=>'wiki_authors_style_by_page','label'=>"Allow override per page"),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_show_hide_before'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_actions_bar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_navigation_bar'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_topline_position'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'page_bar_position'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_encourage_contribution'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Page name</legend>

				<?php echo smarty_function_preference(array('name'=>'wiki_page_regex'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_badchar_prevent'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Edit</legend>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_templates'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_warn_on_edit'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'warn_on_edit_time'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_undo'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_footnotes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_allowhtml'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_timeout_warning'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'wiki_edit_section'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_edit_section_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_edit_section_level'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_icons_toggle'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_edit_minor'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_wiki_mandatory_category'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_actionlog_bytes'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_mandatory_edit_summary'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_freetags_edit_position'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Preferences"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Features")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Features"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<input type="hidden" name="wikifeatures" />

			<?php echo smarty_function_preference(array('name'=>'feature_sandbox'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_references'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_comments'),$_smarty_tpl);?>


			<?php echo smarty_function_preference(array('name'=>'feature_wiki_attachments'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_wiki_attachments_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'w_displayed_default'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'w_use_db'),$_smarty_tpl);?>

					<div class="adminoptionboxchild">
						<?php echo smarty_function_preference(array('name'=>'w_use_dir'),$_smarty_tpl);?>

					</div>
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['w_use_dir'])){?>
						If you change storage, it is better to move all the files for easy backup...
						<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=wikiatt&all2db=1",'_text'=>"Change all to db"),$_smarty_tpl);?>

						<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=wikiatt&all2file=1",'_text'=>"Change all to file"),$_smarty_tpl);?>

					<?php }?>
			</div>

			<?php echo smarty_function_preference(array('name'=>'wiki_pagination'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="wiki_pagination_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'wiki_page_separator'),$_smarty_tpl);?>

			</div>

			<?php echo smarty_function_preference(array('name'=>'feature_dump'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_dump_childcontainer">
				<div class="adminoptionbox clearfix">
					<div class="adminoptionlabel">
						<label for="tagname">Tag for current wiki:</label>
						<input maxlength="20" size="20" type="text" name="tagname" id="tagname" />
						<input type="submit" name="createtag" value="Create" />
					</div>
				</div>
				<div class="adminoptionbox clearfix">
					<div class="adminoptionlabel">
						<label for="restoretag">Restore wiki to tag:</label>
						<select name="tagname" id="restoretag"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0'){?> disabled="disabled"<?php }?>>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['name'] = 'sel';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total']);
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']];?>
</option>
							<?php endfor; else: ?>
								<option value=''>None</option>
							<?php endif; ?>
						</select>
						<input type="submit" name="restoretag" value="Restore"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0'){?> disabled="disabled"<?php }?> />
					</div>
				</div>
				<div class="adminoptionbox clearfix">
					<div class="adminoptionlabel">
						<label for="removetag">Remove a tag:</label>
						<select name="tagname" id="removetag"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0'){?> disabled="disabled"<?php }?>>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['name'] = 'sel';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sel']['total']);
?>
								<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['tags']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sel']['index']];?>
</option>
							<?php endfor; else: ?>
								<option value=''>None</option>
							<?php endif; ?>
						</select>
						<input type="submit" name="removetag" value="Remove"<?php if (count($_smarty_tpl->tpl_vars['tags']->value)=='0'){?> disabled="disabled"<?php }?> />
					</div>
				</div>

				<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=wiki&amp;dump=1",'_text'=>"Generate dump"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['tikidomain']->value){?>
					<?php echo smarty_function_button(array('href'=>"dump/".((string)$_smarty_tpl->tpl_vars['tikidomain']->value)."/new.tar",'_text'=>"Download last dump"),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smarty_function_button(array('href'=>"dump/new.tar",'_text'=>"Download last dump"),$_smarty_tpl);?>

				<?php }?>
			</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_pictures'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_pictures_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=picture&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
			<?php echo smarty_function_preference(array('name'=>'feature_filegals_manager'),$_smarty_tpl);?>

			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=wiki&amp;rmvunusedpic=1",'_text'=>"Remove unused pictures"),$_smarty_tpl);?>

			<?php echo smarty_function_button(array('href'=>"tiki-admin.php?page=wiki&amp;moveWikiUp=1",'_text'=>"Move images from wiki_up to the home file gallery"),$_smarty_tpl);?>

			<br><em>If you use these buttons please make sure to have a backup of the database and the directory wiki_up</em>
		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_export'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_export_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=export&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
			<?php echo smarty_function_button(array('href'=>"tiki-export_wiki_pages.php",'_text'=>"Export Wiki Pages"),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wikiwords'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wikiwords_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wikiwords_usedash'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_plurals'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_history'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_history_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=history&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
			<?php echo smarty_function_preference(array('name'=>'maxVersions'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'keep_versions'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_history_ip'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'default_wiki_diff_style'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_history_full'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_page_contribution'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_discuss'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_discuss_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_forum_id'),$_smarty_tpl);?>

			<a class="link" href="tiki-objectpermissions.php?permType=forums" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_source'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_source_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=source&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_ratings'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_ratings_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=ratings&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
		</div>
		<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wiki_simple_ratings_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_simple_ratings_options'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_backlinks'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_backlinks_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wiki_backlinks_name_len'),$_smarty_tpl);?>

			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=backlinks&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_semantic'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wiki_prefixalias_tokens'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_likePages'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wiki_likepages_samelang_only">
			<?php echo smarty_function_preference(array('name'=>'wiki_likepages_samelang_only'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_wiki_1like_redirection'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_pagealias'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wiki_pagealias_tokens'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_rankings'),$_smarty_tpl);?>


		<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_structure_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_open_as_structure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_make_structure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_categorize_structure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_create_webhelp'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_structure_drilldownmenu'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'page_n_times_in_a_structure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_wiki_no_inherit_perms_structure'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wiki_structure_bar_position'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wikiplugin_toc'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_import_html'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_import_page'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_use_date_links">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_use_date_links'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'wiki_uses_slides'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_userpage_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_userpage_prefix'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_usrlock'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_usrlock_childcontainer">
			<a class="link" href="tiki-objectpermissions.php?permType=wiki&amp;textFilter=lock&amp;show_disabled_features=y" title="Permission"><?php echo smarty_function_icon(array('_id'=>"key",'alt'=>"Permission"),$_smarty_tpl);?>
</a>
		</div>

		<?php echo smarty_function_preference(array('name'=>'wiki_creator_admin'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_wiki_print'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_print_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_multiprint'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'feature_print_indexed'),$_smarty_tpl);?>


		<?php echo smarty_function_preference(array('name'=>'feature_wiki_mindmap'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_morcego'),$_smarty_tpl);?>


		<div class="adminoptionbox clearfix">
			<fieldset>
				<legend>Wiki watch<?php echo smarty_function_help(array('url'=>"Watch"),$_smarty_tpl);?>
</legend>
					<?php echo smarty_function_preference(array('name'=>'wiki_watch_author'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_editor'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_comments'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'wiki_watch_minor'),$_smarty_tpl);?>

			</fieldset>
		</div>
		<?php echo smarty_function_preference(array('name'=>'wiki_keywords'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'geo_locate_wiki'),$_smarty_tpl);?>


		<?php echo smarty_function_preference(array('name'=>'namespace_enabled'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="namespace_enabled_childcontainer">
			The namespace separator should not
			<ul>
			<li>contain any of the characters not allowed in wiki page names, typically /?#[]@$&+;=&lt;&gt;</li>
			<li>conflict with wiki syntax tagging</li>
			</ul>
			<?php echo smarty_function_preference(array('name'=>'namespace_separator'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'namespace_indicator_in_structure'),$_smarty_tpl);?>

			<fieldset>
				<legend>Settings that may be affected by the namespace separator<?php echo smarty_function_help(array('url'=>"Watch"),$_smarty_tpl);?>
</legend>

				To use :: as a separator, you should also use ::: as the wiki center tag syntax.<br/>
				Note: a conversion of :: to ::: for existing pages must be done manually
				<?php echo smarty_function_preference(array('name'=>'feature_use_three_colon_centertag'),$_smarty_tpl);?>


				If the page name display stripper conflicts with the namespace separator, the namespace is used and the page name display is not stripped.
				<?php echo smarty_function_preference(array('name'=>'wiki_pagename_strip'),$_smarty_tpl);?>

			</fieldset>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Features"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Flagged Revision")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Flagged Revision"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<fieldset>
			<legend>Revision Approval</legend>

			<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval'),$_smarty_tpl);?>

			<div id="flaggedrev_approval_childcontainer">
				<?php echo smarty_function_preference(array('name'=>'flaggedrev_approval_categories'),$_smarty_tpl);?>

			</div>
		</fieldset>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Flagged Revision"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Page Listings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Page Listings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<input type="hidden" name="wikilistprefs" />
		<?php echo smarty_function_preference(array('name'=>'feature_listPages'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_lastChanges'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_listorphanPages'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'feature_listorphanStructure'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'gmap_page_list'),$_smarty_tpl);?>


		<div class="adminoptionbox clearfix">
			<fieldset>
				<legend>Configuration</legend>
				<div class="adminoptionbox clearfix">
					Select which items to display when listing pages:
				</div>
				<?php echo smarty_function_preference(array('name'=>'wiki_list_sortorder'),$_smarty_tpl);?>

				<div class="adminoptionboxchild">
					<?php echo smarty_function_preference(array('name'=>'wiki_list_sortdirection'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wiki_list_id'),$_smarty_tpl);?>


				<?php echo smarty_function_preference(array('name'=>'wiki_list_name'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_list_name_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_list_name_len'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_hits'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_lastmodif'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_creator'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_user'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_lastver'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_comment'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_list_comment_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_list_comment_len'),$_smarty_tpl);?>

				</div>
				<?php echo smarty_function_preference(array('name'=>'wiki_list_description'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="wiki_list_description_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'wiki_list_description_len'),$_smarty_tpl);?>

				</div>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_status'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_versions'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_links'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_backlinks'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_size'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_language'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_categories'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_categories_path'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_list_rating'),$_smarty_tpl);?>

			</fieldset>
		</div>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Page Listings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_morcego']=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Wiki 3D Browser Configuration")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Wiki 3D Browser Configuration"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<fieldset>
				<legend>General</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_feature_3d'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_autoload'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_width'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_height'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Graph appearance</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_3d_navigation_depth'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_node_size'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_text_size'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_spring_size'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_existing_page_color'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_missing_page_color'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Camera settings</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_3d_adjust_camera'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_camera_distance'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_fov'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_feed_animation_interval'),$_smarty_tpl);?>

			</fieldset>
			<fieldset>
				<legend>Physics engine</legend>
				<?php echo smarty_function_preference(array('name'=>'wiki_3d_friction_constant'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_elastic_constant'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_eletrostatic_constant'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_node_mass'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wiki_3d_node_charge'),$_smarty_tpl);?>

			</fieldset>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Wiki 3D Browser Configuration"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tools")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tools"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<a href="tiki-search_replace.php">Mass search and replace</a><br>
		<a href="tiki-report_direct_object_perms.php">Report wiki pages with direct object permissions</a><br>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tools"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>"admin_wiki"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="heading input_submit_container" style="text-align: center">
	<input type="submit" name="wikisetprefs" value="Change preferences" />
</div>
</form>
<?php }} ?>