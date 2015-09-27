<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:28
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-admin_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1750338076525586fcdc1976-96793613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8838ecd19b4d01498bcbdf831e41cc35a5b0b410' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-admin_system.tpl',
      1 => 1362118800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1750338076525586fcdc1976-96793613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'templates_c' => 0,
    'modules' => 0,
    'tempcache' => 0,
    'temppublic' => 0,
    'dirs' => 0,
    'tiki_p_admin' => 0,
    'zipPath' => 0,
    'd' => 0,
    'k' => 0,
    'dirsWritable' => 0,
    'lostGroups' => 0,
    'g' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586fcf3f794_31883803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586fcf3f794_31883803')) {function content_525586fcf3f794_31883803($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki/modifier.kbsize.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('help'=>"System+Admin")); $_block_repeat=true; echo smarty_block_title(array('help'=>"System+Admin"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tiki Cache/System Admin<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('help'=>"System+Admin"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
If your Tiki is acting weird, first thing to try is to clear your cache below. Also very important is to clear your cache after an upgrade (by FTP/SSH when needed). Also see "Rebuild Index" in the <a href="tiki-admin.php?page=search">Search Admin Panel</a>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<h2>Clear cached content</h2>
<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

<table class="normal">
	<tr>
		<th>Directory to clear</th>
		<th>Files/Size</th>
		<th>Action</th>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td colspan="2"><b>Clear all Tiki caches</b></td>
		<td><a href="tiki-admin_system.php?do=all" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td><b>./templates_c/</b></td>
		<td>(<?php echo $_smarty_tpl->tpl_vars['templates_c']->value['cant'];?>
 Files / <?php echo (($tmp = @smarty_modifier_kbsize($_smarty_tpl->tpl_vars['templates_c']->value['total']))===null||$tmp==='' ? '0 Kb' : $tmp);?>
)</td>
		<td><a href="tiki-admin_system.php?do=templates_c" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td><b>./modules/cache/</b></td>
		<td>(<?php echo $_smarty_tpl->tpl_vars['modules']->value['cant'];?>
 Files / <?php echo (($tmp = @smarty_modifier_kbsize($_smarty_tpl->tpl_vars['modules']->value['total']))===null||$tmp==='' ? '0 Kb' : $tmp);?>
)</td>
		<td><a href="tiki-admin_system.php?do=modules_cache" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td><b>./temp/cache/</b></td>
		<td>(<?php echo $_smarty_tpl->tpl_vars['tempcache']->value['cant'];?>
 Files / <?php echo (($tmp = @smarty_modifier_kbsize($_smarty_tpl->tpl_vars['tempcache']->value['total']))===null||$tmp==='' ? '0 Kb' : $tmp);?>
)</td>
		<td><a href="tiki-admin_system.php?do=temp_cache" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td><b>./temp/public/</b></td>
		<td>(<?php echo $_smarty_tpl->tpl_vars['temppublic']->value['cant'];?>
 Files / <?php echo (($tmp = @smarty_modifier_kbsize($_smarty_tpl->tpl_vars['temppublic']->value['total']))===null||$tmp==='' ? '0 Kb' : $tmp);?>
)</td>
		<td><a href="tiki-admin_system.php?do=temp_public" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<td colspan="2"><b>All user prefs sessions</b></td>
		<td><a href="tiki-admin_system.php?do=prefs" class="link" title="Empty"><?php echo smarty_function_icon(array('_id'=>'img/icons/del.gif','alt'=>"Empty"),$_smarty_tpl);?>
</a></td>
	</tr>
</table>
<br>

<?php if (count($_smarty_tpl->tpl_vars['dirs']->value)&&$_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
	<h2>Directories to save</h2>
	<form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8', true);?>
">
		<p><label>Full Path to the Zip File:<input type="text" name="zipPath" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['zipPath']->value, ENT_QUOTES, 'UTF-8', true);?>
"></label>
		<input type="submit" name="zip" value="Generate a zip of those directories"></p>
		<?php if ($_smarty_tpl->tpl_vars['zipPath']->value){?>
			<div class="simplebox highlight"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['zipPath']->value)); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['zipPath']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
A zip has been written to %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['zipPath']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
		<?php }?>
	</form>
	<ul>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['dirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
			<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['d']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php if (!$_smarty_tpl->tpl_vars['dirsWritable']->value[$_smarty_tpl->tpl_vars['k']->value]){?> <i>(Directory is not writeable)</i><?php }?></li>
		<?php } ?>
	</ul>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['lostGroups']->value)){?>
	<h2>Clean</h2>
	Groups still used in the database but no more defined. <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('clean'=>"y")); $_block_repeat=true; echo smarty_block_self_link(array('clean'=>"y"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Click to remove.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('clean'=>"y"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<ul>
	<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lostGroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
		<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['g']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
	<?php } ?>
	</ul>
<?php }?><?php }} ?>