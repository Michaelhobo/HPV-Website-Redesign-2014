<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:01:43
         compiled from "/var/www/html/Website/tiki/templates/credits.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93462257052d6db17913de4-26529329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e033eb11cb9b8ddca76a79a8af54796b9a0527e' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/credits.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93462257052d6db17913de4-26529329',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6db179b76c1_26663398',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6db179b76c1_26663398')) {function content_52d6db179b76c1_26663398($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/html/Website/tiki/vendor/smarty/smarty/distribution/libs/plugins/modifier.replace.php';
?>Theme: <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style'],'.css',''),'None',''));?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['style_option']){?> - <?php echo ucwords(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['prefs']->value['style_option'],'.css',''),'None',''));?>
<?php }?>
<?php }} ?>