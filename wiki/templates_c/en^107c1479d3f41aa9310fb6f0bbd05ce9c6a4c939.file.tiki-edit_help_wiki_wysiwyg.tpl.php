<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:46:40
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-edit_help_wiki_wysiwyg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4722245715255968069a770-56664537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '107c1479d3f41aa9310fb6f0bbd05ce9c6a4c939' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-edit_help_wiki_wysiwyg.tpl',
      1 => 1362137110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4722245715255968069a770-56664537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525596807acc36_35081503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525596807acc36_35081503')) {function content_525596807acc36_35081503($_smarty_tpl) {?><?php if (!is_callable('smarty_block_add_help')) include 'lib/smarty_tiki/block.add_help.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('add_help', array('show'=>'y','title'=>"Wiki Wysiwyg Help",'id'=>"wiki_help")); $_block_repeat=true; echo smarty_block_add_help(array('show'=>'y','title'=>"Wiki Wysiwyg Help",'id'=>"wiki_help"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<h3>Wiki Wysiwyg Help</h3>
<div class="help_section">
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_help']=='y'){?> 
<p>For more information, please see
	<a href="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['helpurl'];?>
Wysiwyg+Editor" target="tikihelp" class="tikihelp" title="Wysiwyg Editor: More help on wysiwyg editing">
		Wysiwyg Editor <?php echo smarty_function_icon(array('_id'=>'help','style'=>"vertical-align:middle"),$_smarty_tpl);?>

	</a>
</p>
<?php }?>
 
<hr>
<p>
	<?php echo smarty_function_icon(array('_id'=>"star"),$_smarty_tpl);?>
 WYSIWYG in wiki mode is an experimental feature in Tiki 7+ and uses
	<a href="http://ckeditor.com">CKEditor</a></p>
<p>
	To switch modes between WYSIWYG and Wiki edit modes click the <?php echo smarty_function_icon(array('_id'=>"pencil_go"),$_smarty_tpl);?>
 button on the toolbar.</p>
<p style="margin-left: 2em; ">
	<strong>N.B. </strong>Using this button changes the editor between WYSIWYG and the usual wiki editor, but leaves the page source in wiki syntax.</p>
<p>
	<?php echo smarty_function_icon(array('_id'=>"plugin"),$_smarty_tpl);?>
 Wiki plugins can be used and edited in WYSIWYG mode, double click the plugin to bring up the plugin edit popup form.<br>
	Here is an example of the {BOX} plugin:</p>
<div style="background-color: #fff; padding: 1em;">
<div class="tiki_plugin" plugin="box" style="position:relative; background-color: #eee; border: 1px solid #666;">
	<div contenteditable="false">
		<img src="img/icons/wiki_plugin_edit.png" width="16" height="16" style="float:left;position:absolute;z-index:10001">
		<table align="center" width="80%">
			<tr><td>
				<div class='cbox ' style=' background:#fffff0'><div class='cbox-data' style=" background:#fffff0">
					This is the text in the box which is justified; the box has a cream background, takes 80% of the screen width and is centred.
    			</div></div>
    		</td></tr>
    	</table>
	</div>
</div>
</div>
<p style="margin-left: 2em;">
	<?php echo smarty_function_icon(array('_id'=>"error"),$_smarty_tpl);?>
 <strong>Caution:</strong> This is a new feature and still work in progress.<br>
	If you intend to use plugins extensively in a page consider editing that page in wiki mode only.<br>
	Currently (in Tiki 9.0) drag and drop of plugins in WYSIWYG does not work.</p>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=="y"){?>
		<hr style="border-width: 1px;" />
		<p>
			<strong>Admins:</strong><br>
			<em>This new implementation is designed to work best with some site preferences set in a certain way.
			These can all be found on the <a href="tiki-admin.php?page=wysiwyg">wysiwyg admin page</a>.
			A profile to set these up correctly can be found on <a href="http://profiles.tiki.org/WYSIWYG_6x">profiles.tiki.org</a>
			which can be applied using the <a href="tiki-admin.php?page=profiles">profiles admin page</a>.</em></p>
	<?php }?>

</div>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_add_help(array('show'=>'y','title'=>"Wiki Wysiwyg Help",'id'=>"wiki_help"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>