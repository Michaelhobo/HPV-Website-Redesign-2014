<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-27 00:41:08
         compiled from "/var/www/html/Website/wiki/templates/prefs/shared-flags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:128449159052e61ba475f1b9-49678895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ef40ef5c2100ad8dc9d3ffad39dc8e9ae64e37a' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/prefs/shared-flags.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '128449159052e61ba475f1b9-49678895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'p' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52e61ba4851fd6_70977983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e61ba4851fd6_70977983')) {function content_52e61ba4851fd6_70977983($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_simplewiki')) include 'lib/smarty_tiki/modifier.simplewiki.php';
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