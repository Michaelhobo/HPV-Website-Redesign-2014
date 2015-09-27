<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:55:22
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_wysiwyg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163711798552558a7a9b4cc0-62280122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1d11e28932a138a16f02c95060e52a3addc8feb' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_wysiwyg.tpl',
      1 => 1369857912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163711798552558a7a9b4cc0-62280122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558a7aa7bb79_80159815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558a7aa7bb79_80159815')) {function content_52558a7aa7bb79_80159815($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
WYSIWYG means What You See Is What You Get, and is handled in Tiki by <a href="http://ckeditor.com/">CKEditor</a>.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<div class="navbar">
<?php echo smarty_function_button(array('href'=>"tiki-admin_toolbars.php",'_text'=>"Toolbars"),$_smarty_tpl);?>

</div>

<form action="tiki-admin.php?page=wysiwyg" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="wysiwygfeatures" value="Change preferences" />
	</div>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wysiwyg_htmltowiki']!='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Page links")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Note that if the SEFURL feature is on, page links created using wysiwyg might not be automatically updated when pages are renamed. This is addressed through the "Use Wiki syntax in WYSIWYG" feature.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Page links"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

	<fieldset class="admin">
		<legend>Activate the feature</legend>
		<?php echo smarty_function_preference(array('name'=>'feature_wysiwyg','visible'=>"always"),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_wysiwyg'),$_smarty_tpl);?>

	</fieldset>

	<fieldset class="admin">
		<legend><?php echo smarty_function_icon(array('_id'=>"text_dropcaps"),$_smarty_tpl);?>
 Wysiwyg Editor Features</legend>
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_optional'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wysiwyg_optional_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_default'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wysiwyg_memo'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'wysiwyg_wiki_parsed'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="wysiwyg_wiki_parsed_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'wysiwyg_wiki_semi_parsed'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'wysiwyg_htmltowiki'),$_smarty_tpl);?>

		</div>
		<?php echo smarty_function_preference(array('name'=>'wysiwyg_toolbar_skin'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>"wysiwyg_fonts"),$_smarty_tpl);?>


	</fieldset>
	<fieldset>
		<legend class="heading"><?php echo smarty_function_icon(array('_id'=>"bricks"),$_smarty_tpl);?>
 <span>Related features</span></legend>
		
		<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_wiki_paragraph_formatting_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'feature_wiki_paragraph_formatting_add_br'),$_smarty_tpl);?>

		</div>
		
		<p class="description">
			<?php echo smarty_function_preference(array('name'=>'feature_ajax'),$_smarty_tpl);?>

			<div class="adminoptionboxchild" id="feature_ajax_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'ajax_autosave'),$_smarty_tpl);?>

			</div>
	</fieldset>

	<div class="heading input_submit_container" style="text-align: center">
		<input type="submit" name="wysiwygfeatures" value="Change preferences" />
	</div>
</form>

<?php }} ?>