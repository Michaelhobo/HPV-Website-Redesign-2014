<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:30
         compiled from "/var/www/html/wordpress/tiki/templates/prefs/shared-flags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1082384337525586fee3a5e5-73518538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7455c790baee4b5193967f72bd841a48c2348b7' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/prefs/shared-flags.tpl',
      1 => 1366223016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1082384337525586fee3a5e5-73518538',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586fef23237_86780164',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586fef23237_86780164')) {function content_525586fef23237_86780164($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_popup')) include 'lib/smarty_tiki/function.popup.php';
?><?php if ($_smarty_tpl->tpl_vars['p']->value['helpurl']){?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['helpurl'], ENT_QUOTES, 'UTF-8', true);?>
" target="tikihelp" class="tikihelp" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']){?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('_id'=>'help','alt'=>''),$_smarty_tpl);?>

	</a>
<?php }elseif($_smarty_tpl->tpl_vars['p']->value['description']){?>
	<span class="tikihelp" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['p']->value['separator']){?>Separator is <b><?php echo smarty_modifier_simplewiki($_smarty_tpl->tpl_vars['p']->value['separator']);?>
</b><?php }?>">
		<?php echo smarty_function_icon(array('_id'=>'information','alt'=>''),$_smarty_tpl);?>

	</span>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['warning']){?>
	<a href="#" target="tikihelp" class="tikihelp" title="Warning: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['warning'], ENT_QUOTES, 'UTF-8', true);?>
">
		<?php echo smarty_function_icon(array('_id'=>'error','alt'=>''),$_smarty_tpl);?>

	</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['p']->value['modified']&&$_smarty_tpl->tpl_vars['p']->value['available']){?>
	<input class="pref-reset system" type="checkbox" name="lm_reset[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['preference'], ENT_QUOTES, 'UTF-8', true);?>
" style="display:none" data-preference-default="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['popup_html'])){?>
	<a class="icon" title="Actions" href="#" style="padding:0; margin:0; border:0"
			 <?php echo smarty_function_popup(array('trigger'=>"onClick",'sticky'=>1,'mouseoff'=>1,'fullhtml'=>1,'center'=>"true",'text'=>htmlspecialchars(strtr($_smarty_tpl->tpl_vars['p']->value['popup_html'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>
>
		<?php echo smarty_function_icon(array('_id'=>'application_form','alt'=>"Actions"),$_smarty_tpl);?>

	</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['p']->value['voting_html'])){?>
	<?php echo $_smarty_tpl->tpl_vars['p']->value['voting_html'];?>

<?php }?>

<?php echo $_smarty_tpl->tpl_vars['p']->value['pages'];?>

<?php }} ?>