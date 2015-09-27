<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:02:41
         compiled from "/var/www/html/Website/tiki/templates/tiki-listpages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50170028152d6db511d1e09-87319793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce81f07e36fb2bb12121d621f4068a2c5deda54d' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/tiki-listpages.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50170028152d6db511d1e09-87319793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'offset' => 0,
    'sort_mode' => 0,
    'find' => 0,
    'maxRecords' => 0,
    'error' => 0,
    'mapview' => 0,
    'aliases' => 0,
    'alias' => 0,
    'tiki_p_edit' => 0,
    'prefs' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6db5136cd79_96829202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6db5136cd79_96829202')) {function content_52d6db5136cd79_96829202($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_block_wikiplugin')) include 'lib/smarty_tiki/block.wikiplugin.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array('admpage'=>"wiki",'help'=>"Using+Wiki+Pages#List_Pages")); $_block_repeat=true; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using+Wiki+Pages#List_Pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array('admpage'=>"wiki",'help'=>"Using+Wiki+Pages#List_Pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_wikipages')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"List Wiki Pages")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"List Wiki Pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


		<?php echo $_smarty_tpl->getSubTemplate ('find.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('autocomplete'=>'pagename','find_show_languages'=>'y','find_show_languages_excluded'=>'y','find_show_categories_multi'=>'y','find_show_num_rows'=>'y','find_in'=>"<ul><li>Page name</li></ul>"), 0);?>


<form name="checkform" method="get" action="<?php echo $_SERVER['PHP_SELF'];?>
">
	<input type="hidden" name="offset" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['offset']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="maxRecords" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['maxRecords']->value, ENT_QUOTES, 'UTF-8', true);?>
">
</form>
		<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value){?>
<div class="simplebox highlight">
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

</div>
		<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['mapview']->value)&&$_smarty_tpl->tpl_vars['mapview']->value){?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('wikiplugin', array('_name'=>"googlemap",'type'=>"objectlist",'width'=>"400",'height'=>"400")); $_block_repeat=true; echo smarty_block_wikiplugin(array('_name'=>"googlemap",'type'=>"objectlist",'width'=>"400",'height'=>"400"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wikiplugin(array('_name'=>"googlemap",'type'=>"objectlist",'width'=>"400",'height'=>"400"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<div id="tiki-listpages-content">
		<?php if ($_smarty_tpl->tpl_vars['aliases']->value){?>
	<div class="aliases">
		<strong>Page aliases found:</strong>
			<?php  $_smarty_tpl->tpl_vars['alias'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alias']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aliases']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alias']->key => $_smarty_tpl->tpl_vars['alias']->value){
$_smarty_tpl->tpl_vars['alias']->_loop = true;
?>
		<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['alias']->value['toPage']);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alias']->value['fromPage'], ENT_QUOTES, 'UTF-8', true);?>
" class="alias"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['alias']->value['toPage'], ENT_QUOTES, 'UTF-8', true);?>
;</a>
			<?php } ?>
	</div>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ('tiki-listpages_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('clean'=>'n'), 0);?>

</div>


	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"List Wiki Pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Create a Wiki Page")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Create a Wiki Page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<div class="center" style="text-align: center">
	<strong>Insert name of the page you wish to create</strong>
	<form method="get" action="tiki-editpage.php">
		<input id="pagename" type="text" size="30" name="page"><br>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['namespace_enabled']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']){?>
			<div>
				<label>
					<input type="checkbox" name="namespace" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefs']->value['namespace_default'], ENT_QUOTES, 'UTF-8', true);?>
" checked="checked">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Create page within %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['prefs']->value['namespace_default']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</label>
			</div>
		<?php }?>
		<input class="submit button" type="submit" name="quickedit" value="Create Page">
	</form>
</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Create a Wiki Page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_wikipages'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>




<?php }} ?>