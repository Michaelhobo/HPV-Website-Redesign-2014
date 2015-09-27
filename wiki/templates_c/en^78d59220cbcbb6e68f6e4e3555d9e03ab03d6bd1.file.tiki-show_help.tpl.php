<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:49
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-show_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89716074452558789e0dbc5-55843318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78d59220cbcbb6e68f6e4e3555d9e03ab03d6bd1' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-show_help.tpl',
      1 => 1369819148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89716074452558789e0dbc5-55843318',
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
  'unifunc' => 'content_52558789e3a531_60653241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558789e3a531_60653241')) {function content_52558789e3a531_60653241($_smarty_tpl) {?>
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