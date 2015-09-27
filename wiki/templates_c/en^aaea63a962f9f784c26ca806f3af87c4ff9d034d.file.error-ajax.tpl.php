<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:56:38
         compiled from "/var/www/html/wordpress/tiki/templates/error-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20378022252558ac60cb6d6-66188436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaea63a962f9f784c26ca806f3af87c4ff9d034d' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/error-ajax.tpl',
      1 => 1348079127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20378022252558ac60cb6d6-66188436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'detail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558ac612aa13_33168518',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558ac612aa13_33168518')) {function content_52558ac612aa13_33168518($_smarty_tpl) {?><h3>Error</h3>
<ul>
	<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['detail']->value['message'], ENT_QUOTES, 'UTF-8', true);?>
</li>
</ul>
<?php }} ?>