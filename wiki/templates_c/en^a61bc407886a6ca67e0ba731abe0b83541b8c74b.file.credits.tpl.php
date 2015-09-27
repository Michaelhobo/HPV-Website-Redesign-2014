<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:31
         compiled from "/var/www/html/wordpress/tiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1533460912525586ff2aeff0-06900888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a61bc407886a6ca67e0ba731abe0b83541b8c74b' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/credits.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1533460912525586ff2aeff0-06900888',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586ff2dd6b3_76313466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586ff2dd6b3_76313466')) {function content_525586ff2dd6b3_76313466($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/modifier.replace.php';
?>Theme: <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style'],'.css',''),'None',''));?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['style_option']){?> - <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style_option'],'.css',''),'None',''));?>
<?php }?>
<?php }} ?>