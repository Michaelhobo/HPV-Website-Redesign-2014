<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:05:00
         compiled from "/var/www/html/Website/wiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55487829152e6132c4204c1-76276108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4775703fe7db0c2716beb663e242bf1dfdd5a5f2' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/credits.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55487829152e6132c4204c1-76276108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e6132c451f11_91690937',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6132c451f11_91690937')) {function content_52e6132c451f11_91690937($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/Website/wiki/vendor/smarty/smarty/distribution/libs/plugins/modifier.replace.php';
?>Theme: <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style'],'.css',''),'None',''));?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['style_option']){?> - <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style_option'],'.css',''),'None',''));?>
<?php }?>
<?php }} ?>