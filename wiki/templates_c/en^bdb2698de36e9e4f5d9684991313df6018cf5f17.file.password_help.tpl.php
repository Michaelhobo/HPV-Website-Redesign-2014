<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 19:56:25
         compiled from "/var/www/html/Website/wiki/templates/password_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61958491653057ce9edd9e8-52202876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdb2698de36e9e4f5d9684991313df6018cf5f17' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/password_help.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61958491653057ce9edd9e8-52202876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53057cea019c70_33095126',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53057cea019c70_33095126')) {function content_53057cea019c70_33095126($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']>1){?><div class="highlight"><em><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Minimum %0 characters long<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['min_pass_length']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_num']=='y'){?><div class="highlight"><em>Password must contain both letters and numbers</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_case']=='y'){?><div class="highlight"><em>Password must contain at least one alphabetical character in lower case like a and one in upper case like A.</em></div><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_special']=='y'){?><div class="highlight"><em>Password must contain at least one special character in lower case like " / $ % ? & * ( ) _ + ...</em></div><?php }?>
					<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition'])&&$_smarty_tpl->tpl_vars['prefs']->value['pass_chr_repetition']=='y'){?><div class="highlight"><em>Password must contain no consecutive repetition of the same character as 111 or aab</em></div><?php }?>
<?php }} ?>