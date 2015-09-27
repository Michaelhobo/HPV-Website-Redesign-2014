<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:04:00
         compiled from "/var/www/html/Website/tiki/templates/tiki-show_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64729333552d6dba038ccd3-33832396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99b419cf8f3eaa963192f9734c981e59103ff4a7' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/tiki-show_help.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64729333552d6dba038ccd3-33832396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'help_sections' => 0,
    'help' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6dba0437b84_89662784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6dba0437b84_89662784')) {function content_52d6dba0437b84_89662784($_smarty_tpl) {?>
<div class="help" id="tikihelp">
	<div class="help_sections" id="help_sections" style="display:none">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['help']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value){
$_smarty_tpl->tpl_vars['help']->_loop = true;
?>
				<li>
					<a href="#<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
">
						<?php echo $_smarty_tpl->tpl_vars['help']->value['title'];?>

					</a>
				</li>
			<?php } ?>
		</ul>
		<?php  $_smarty_tpl->tpl_vars['help'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['help']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['help_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['help']->key => $_smarty_tpl->tpl_vars['help']->value){
$_smarty_tpl->tpl_vars['help']->_loop = true;
?>
			<div id="<?php echo $_smarty_tpl->tpl_vars['help']->value['id'];?>
" class="">
				<?php echo $_smarty_tpl->tpl_vars['help']->value['content'];?>

			</div>
		<?php } ?>
	</div>
</div>
<br>
<?php }} ?>