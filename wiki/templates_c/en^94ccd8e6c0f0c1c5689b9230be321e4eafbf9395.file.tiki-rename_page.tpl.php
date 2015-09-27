<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:44:41
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-rename_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:237615642525587f9e03454-26364767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94ccd8e6c0f0c1c5689b9230be321e4eafbf9395' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-rename_page.tpl',
      1 => 1362125222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '237615642525587f9e03454-26364767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'page_badchars_display' => 0,
    'prefs' => 0,
    'newname' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587f9eebb69_58192979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587f9eebb69_58192979')) {function content_525587f9eebb69_58192979($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rename page: <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<div class="navbar">
	<?php $_smarty_tpl->tpl_vars['thispage'] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['page']->value), null, 0);?>
	<?php echo smarty_function_button(array('href'=>"tiki-index.php?page=".((string)$_smarty_tpl->tpl_vars['thispage']->value),'_text'=>"View page"),$_smarty_tpl);?>

</div>

<form action="tiki-rename_page.php" method="post">
  <input type="hidden"  name="page" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<?php if (isset($_smarty_tpl->tpl_vars['page_badchars_display']->value)){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_badchar_prevent']=='y'){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Invalid page name")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains unallowed characters. It will not be possible to save the page until those are removed: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Invalid page name"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }else{ ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'tip','title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The page name specified contains characters that may render the page hard to access. You may want to consider removing those: <strong>%0</strong><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>htmlspecialchars($_smarty_tpl->tpl_vars['page_badchars_display']->value, ENT_QUOTES, 'UTF-8', true)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'tip','title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<input type="hidden" name="badname" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newname']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<input type="submit" name="confirm" value="Use this name anyway">
		<?php }?>
	<?php }elseif(isset($_smarty_tpl->tpl_vars['msg']->value)){?>		
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
		
	<?php }?>
  <table class="formcolor">
    <tr>
      <td><label for='newpage'>New name:</label></td>
      <td>
        <input type='text' id='newpage' name='newpage' size='40' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['newname']->value, ENT_QUOTES, 'UTF-8', true);?>
'>
        <input type="submit" name="rename" value="Rename">
      </td>
    </tr>
  </table>
</form>
<?php }} ?>