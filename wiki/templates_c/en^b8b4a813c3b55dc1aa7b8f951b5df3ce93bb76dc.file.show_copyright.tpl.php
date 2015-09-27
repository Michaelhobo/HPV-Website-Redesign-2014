<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:16
         compiled from "/var/www/html/wordpress/tiki/templates/show_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225639601525587681b3158-42758207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b4a813c3b55dc1aa7b8f951b5df3ce93bb76dc' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/show_copyright.tpl',
      1 => 1362063598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225639601525587681b3158-42758207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'page' => 0,
    'tiki_p_edit_copyrights' => 0,
    'copyrightpage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587681ff3e7_32458901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587681ff3e7_32458901')) {function content_525587681ff3e7_32458901($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_feature_copyrights']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']){?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage']==$_smarty_tpl->tpl_vars['page']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit_copyrights']->value=='y'){?>
			<br>
			To edit the copyright notices <a href="copyrights.php?page=<?php echo $_smarty_tpl->tpl_vars['copyrightpage']->value;?>
">Click Here</a>.
		<?php }?>
	<?php }else{ ?>
		<br>
		The content on this page is licensed under the terms of the <a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'],'wiki','with_next');?>
copyrightpage=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['prefs']->value['wikiLicensePage'];?>
</a>.
	<?php }?>
<?php }?>
<?php }} ?>