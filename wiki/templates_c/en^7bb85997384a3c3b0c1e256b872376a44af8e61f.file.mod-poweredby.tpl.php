<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:31
         compiled from "/var/www/html/wordpress/tiki/templates/modules/mod-poweredby.tpl" */ ?>
<?php /*%%SmartyHeaderCode:257465987525586ff201b29-25649519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb85997384a3c3b0c1e256b872376a44af8e61f' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/modules/mod-poweredby.tpl',
      1 => 1362137110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '257465987525586ff201b29-25649519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_params' => 0,
    'tpl_module_title' => 0,
    'tpl_module_name' => 0,
    'tiki_version' => 0,
    'tiki_uses_svn' => 0,
    'tiki_star' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586ff2a43e2_82193138',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586ff2a43e2_82193138')) {function content_525586ff2a43e2_82193138($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tikimodule')) include 'lib/smarty_tiki/block.tikimodule.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/modifier.date_format.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tikimodule', array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle'])); $_block_repeat=true; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<div class="power"><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['tiki'])||$_smarty_tpl->tpl_vars['module_params']->value['tiki']!='n'){?>Powered by <a href="http://tiki.org" title="&#169; 2002&#8211;<?php echo smarty_modifier_date_format(time(),"%Y");?>
 The Tiki Community">Tiki Wiki CMS Groupware</a><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['version'])||$_smarty_tpl->tpl_vars['module_params']->value['version']!='n'){?> v<?php echo $_smarty_tpl->tpl_vars['tiki_version']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['tiki_uses_svn']->value=='y'){?> (SVN)<?php }?> &quot;<?php echo $_smarty_tpl->tpl_vars['tiki_star']->value;?>
&quot; <?php }?><?php }?><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['credits'])||$_smarty_tpl->tpl_vars['module_params']->value['credits']!='n'){?><span id="credits">&nbsp;| <?php echo $_smarty_tpl->getSubTemplate ('credits.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span><?php }?></div><?php if (!isset($_smarty_tpl->tpl_vars['module_params']->value['icons'])||$_smarty_tpl->tpl_vars['module_params']->value['icons']!='n'){?><div class="power_icons"><a href="http://tiki.org/" title="Tiki"><img alt="Powered by Tiki" src="img/tiki/tikibutton2.png"></a><a href="http://php.net/" title="PHP"><img alt="Powered by PHP" src="img/php.png"></a><a href="http://smarty.net/" title="Smarty"><img alt="Powered by Smarty" src="img/smarty.gif"></a><a href="http://www.w3.org/Style/CSS/" title="CSS"><img alt="Made with CSS" src="img/css1.png"></a></div><?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tikimodule(array('error'=>$_smarty_tpl->tpl_vars['module_params']->value['error'],'title'=>$_smarty_tpl->tpl_vars['tpl_module_title']->value,'name'=>$_smarty_tpl->tpl_vars['tpl_module_name']->value,'flip'=>$_smarty_tpl->tpl_vars['module_params']->value['flip'],'decorations'=>$_smarty_tpl->tpl_vars['module_params']->value['decorations'],'nobox'=>$_smarty_tpl->tpl_vars['module_params']->value['nobox'],'notitle'=>$_smarty_tpl->tpl_vars['module_params']->value['notitle']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>