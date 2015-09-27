<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:04:58
         compiled from "/var/www/html/Website/wiki/templates/show_copyright.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33788684652e6132a28c136-37536291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35fe9805520f628b03cc63929be0db1280208d91' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/show_copyright.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33788684652e6132a28c136-37536291',
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
  'unifunc' => 'content_52e6132a2de551_99469445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6132a2de551_99469445')) {function content_52e6132a2de551_99469445($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
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