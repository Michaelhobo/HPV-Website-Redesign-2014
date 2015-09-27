<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:31
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-ajax_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1785386008525586ffd3e7a6-33783883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c9fa625e028374952e359ff5cb1fca0baffb65' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-ajax_header.tpl',
      1 => 1302758003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1785386008525586ffd3e7a6-33783883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586ffda34b8_98236703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586ffda34b8_98236703')) {function content_525586ffda34b8_98236703($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_ajax']=='y'){?>
<div id="ajaxLoading">Loading...</div>
<div id="ajaxLoadingBG">&nbsp;</div>
<div id="ajaxDebug"></div>
<?php }?>
<?php }} ?>