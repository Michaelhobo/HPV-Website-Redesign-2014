<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:03:59
         compiled from "/var/www/html/Website/tiki/templates/categorize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104161479852d6db9fca0ef9-31796716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba8db72c3829903f7b1d136c77a766d1ed1fa888' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/categorize.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104161479852d6db9fca0ef9-31796716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_modify_object_categories' => 0,
    'categories' => 0,
    'tiki_p_admin_categories' => 0,
    'notable' => 0,
    'colsCategorize' => 0,
    'mandatory_category' => 0,
    'auto' => 0,
    'cat_tree' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6dba0044f04_29440497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6dba0044f04_29440497')) {function content_52d6dba0044f04_29440497($_smarty_tpl) {?><?php if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_modify_object_categories']->value=='y'&&(count($_smarty_tpl->tpl_vars['categories']->value)>0||$_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y')){?>
<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y'){?>
<tr>
 <td>Categorize</td>
 <td<?php if (isset($_smarty_tpl->tpl_vars['colsCategorize']->value)){?> colspan="<?php echo $_smarty_tpl->tpl_vars['colsCategorize']->value;?>
"<?php }?>>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['mandatory_category']->value>=0||$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']!='y'||(isset($_smarty_tpl->tpl_vars['auto']->value)&&$_smarty_tpl->tpl_vars['auto']->value=='y')){?>
  <div id="categorizator">
<?php }else{ ?>
<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y'){?><?php echo smarty_function_button(array('href'=>"#",'_flip_id'=>'categorizator','_class'=>'link','_text'=>"Select Categories",'_flip_default_open'=>'n'),$_smarty_tpl);?>
<?php }?>
  <div id="categorizator" style="display:<?php if (isset($_SESSION['tiki_cookie_jar']['show_categorizator'])&&$_SESSION['tiki_cookie_jar']['show_categorizator']=='y'||(isset($_smarty_tpl->tpl_vars['notable']->value)&&$_smarty_tpl->tpl_vars['notable']->value=='y')){?>block<?php }else{ ?>none<?php }?>;">
<?php }?>
  <div class="multiselect">
  <?php if (count($_smarty_tpl->tpl_vars['categories']->value)>0){?>
	<?php echo $_smarty_tpl->tpl_vars['cat_tree']->value;?>

    <input type="hidden" name="cat_categorize" value="on">
	<div class="clear">
	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y'){?>
    	<div class="floatright"><a href="tiki-admin_categories.php" class="link">Admin Categories <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a></div>
	<?php }?>
	
	<?php echo smarty_function_select_all(array('checkbox_names'=>'cat_categories[]','label'=>"Select/deselect all categories"),$_smarty_tpl);?>

  
	<?php }else{ ?>
	<div class="clear">
 	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y'){?>
    <div class="floatright"><a href="tiki-admin_categories.php" class="link">Admin Categories <?php echo smarty_function_icon(array('_id'=>'wrench'),$_smarty_tpl);?>
</a></div>
 	<?php }?>
    No categories defined
  <?php }?>
    </div> 
   </div> 
  </div> 
	<?php if (!isset($_smarty_tpl->tpl_vars['notable']->value)||$_smarty_tpl->tpl_vars['notable']->value!='y'){?>
  </td>
</tr>
  <?php }?>
<?php }?>

<?php }} ?>