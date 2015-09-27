<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:44:02
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-removepage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118490159525587d2203578-63707190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4017c54c1c9a7cce1feb96f9134c326d0868fb53' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-removepage.tpl',
      1 => 1362125222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118490159525587d2203578-63707190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'version' => 0,
    'historyId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587d22c44d1_81369867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587d22c44d1_81369867')) {function content_525587d22c44d1_81369867($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Remove page: <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
 (<?php if ($_smarty_tpl->tpl_vars['version']->value=='last'){?>Last Version<?php }else{ ?>Version: <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
<?php }?>)<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['page']->value), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_text'=>"Back to page"),$_smarty_tpl);?>

</div>

<form action="tiki-removepage.php" method="post">
  <p><?php echo smarty_function_icon(array('_id'=>'exclamation','alt'=>"Alert"),$_smarty_tpl);?>
 You are about to remove the page <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong> permanently.</p>
  <p><label><input type="checkbox" id="all" name="all"> Remove all versions of this page.</label> </p>
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="version" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['version']->value, ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="historyId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['historyId']->value, ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="submit" name="remove" value="Remove">
</form>
<?php }} ?>