<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:04:59
         compiled from "/var/www/html/Website/wiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152258245552e6132b1a4a88-49766591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '408514af0108135d421734408a2c78793e869851' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/tiki-ajax_header.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152258245552e6132b1a4a88-49766591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e6132b1b5720_93315172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e6132b1b5720_93315172')) {function content_52e6132b1b5720_93315172($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>