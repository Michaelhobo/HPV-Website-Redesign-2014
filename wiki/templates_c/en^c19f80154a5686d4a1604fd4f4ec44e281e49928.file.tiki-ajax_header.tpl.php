<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:01:41
         compiled from "/var/www/html/Website/tiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106147671952d6db15e61835-68781134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19f80154a5686d4a1604fd4f4ec44e281e49928' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/tiki-ajax_header.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106147671952d6db15e61835-68781134',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6db15ebc8d2_74153895',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6db15ebc8d2_74153895')) {function content_52d6db15ebc8d2_74153895($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>