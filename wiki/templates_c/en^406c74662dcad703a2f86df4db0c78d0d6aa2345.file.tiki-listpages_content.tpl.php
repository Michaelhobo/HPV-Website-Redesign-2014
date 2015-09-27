<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:43:08
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-listpages_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9140655485255879ca12e73-14807638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406c74662dcad703a2f86df4db0c78d0d6aa2345' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-listpages_content.tpl',
      1 => 1362120927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9140655485255879ca12e73-14807638',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cant_pages' => 0,
    'initial' => 0,
    'find' => 0,
    'tiki_p_remove' => 0,
    'prefs' => 0,
    'checkboxes_on' => 0,
    'listpages' => 0,
    'cntcol' => 0,
    'wplp_used' => 0,
    'ln' => 0,
    'lastmod_sortfield' => 0,
    'lastmod_title' => 0,
    'lastmod_shorttitle' => 0,
    'show_actions' => 0,
    'all_langs' => 0,
    'lc' => 0,
    'tiki_p_wiki_view_history' => 0,
    'categ' => 0,
    'categpath' => 0,
    'exact_match' => 0,
    'aliases_were_found' => 0,
    'tiki_p_lock' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_edit' => 0,
    'pagefound' => 0,
    'alias_found' => 0,
    'cant' => 0,
    'maxRecords' => 0,
    'offset' => 0,
    'clean' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5255879d2a4b73_38407972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5255879d2a4b73_38407972')) {function content_5255879d2a4b73_38407972($_smarty_tpl) {?><?php if (!is_callable('smarty_function_initials_filter_links')) include 'lib/smarty_tiki/function.initials_filter_links.php';
if (!is_callable('smarty_function_select_all')) include 'lib/smarty_tiki/function.select_all.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_function_object_link')) include 'lib/smarty_tiki/function.object_link.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_modifier_kbsize')) include 'lib/smarty_tiki/modifier.kbsize.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
?>

<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>1||$_smarty_tpl->tpl_vars['initial']->value||$_smarty_tpl->tpl_vars['find']->value){?>
	<?php echo smarty_function_initials_filter_links(array(),$_smarty_tpl);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint']=='y'){?>
	<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='n'){?>
		<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('n', null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('y', null, 0);?>
	<?php }?>
<?php }else{ ?>
	<?php $_smarty_tpl->tpl_vars['checkboxes_on'] = new Smarty_variable('n', null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['find']->value!=''&&count($_smarty_tpl->tpl_vars['listpages']->value)!='0'){?>
	<p>Found &quot;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
&quot; in <?php echo count($_smarty_tpl->tpl_vars['listpages']->value);?>
 pages.</p>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'){?>
	<form name="checkboxes_on" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
">
<?php }?>

<?php $_smarty_tpl->tpl_vars['pagefound'] = new Smarty_variable('n', null, 0);?>

<table class="normal">
	<tr>
		<?php if (isset($_smarty_tpl->tpl_vars['checkboxes_on']->value)&&$_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'&&count($_smarty_tpl->tpl_vars['listpages']->value)>0){?>
			<th>
				<?php echo smarty_function_select_all(array('checkbox_names'=>'checked[]'),$_smarty_tpl);?>

			</th>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable('1', null, 0);?>
		<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable('0', null, 0);?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Id<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'page_id'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'pageName'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wplp_used']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wplp_used']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value){
$_smarty_tpl->tpl_vars['ln']->_loop = true;
 $_smarty_tpl->tpl_vars['lc']->value = $_smarty_tpl->tpl_vars['ln']->key;
?>
				<th><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ln']->value, ENT_QUOTES, 'UTF-8', true);?>
</th>
			<?php } ?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th><?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'hits')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hits<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'hits'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->tpl_vars['lastmod_sortfield'] = new Smarty_variable('lastModif', null, 0);?>
				<?php $_smarty_tpl->tpl_vars['lastmod_shorttitle'] = new Smarty_variable("Last mod", null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y'){?>
					<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Last modification / Comment", null, 0);?>
				<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'){?>
					<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Last modification", null, 0);?>
				<?php }else{ ?>
					<?php $_smarty_tpl->tpl_vars['lastmod_title'] = new Smarty_variable("Comment", null, 0);?>
					<?php $_smarty_tpl->tpl_vars['lastmod_sortfield'] = new Smarty_variable('comment', null, 0);?>
					<?php $_smarty_tpl->tpl_vars['lastmod_shorttitle'] = new Smarty_variable("Comment", null, 0);?>
				<?php }?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value)); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['lastmod_shorttitle']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>$_smarty_tpl->tpl_vars['lastmod_sortfield']->value,'_title'=>$_smarty_tpl->tpl_vars['lastmod_title']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Creator<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'creator','_title'=>"Page creator"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last author<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'user','_title'=>"Last author"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last ver.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'version','_title'=>"Last version"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th style="text-align:center;">
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon'=>'lock_gray')); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon'=>'lock_gray'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Status of the page<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'flag','_icon'=>'lock_gray'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vers.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'versions','_title'=>"Versions"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Links<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'links','_title'=>"Links to other items in page"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Backl.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'backlinks','_title'=>"Links to this page in other pages"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'size','_title'=>"Page size")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'size','_title'=>"Page size"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Size<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'size','_title'=>"Page size"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lang.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'lang','_title'=>"Language"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>Categories</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>Categories</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating']=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings")); $_block_repeat=true; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ratings<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('_sort_arg'=>'sort_mode','_sort_field'=>'rating','_title'=>"Ratings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</th>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['show_actions']->value=='y'){?>
			<?php $_smarty_tpl->tpl_vars['cntcol'] = new Smarty_variable($_smarty_tpl->tpl_vars['cntcol']->value+1, null, 0);?>
			<th>Actions</th>
		<?php }?>
	</tr>

	<?php echo smarty_function_cycle(array('values'=>"even,odd",'print'=>false),$_smarty_tpl);?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['name'] = 'changes';
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['listpages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['changes']['total']);
?>
	<?php if ($_smarty_tpl->tpl_vars['find']->value==$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']){?>
		<?php $_smarty_tpl->tpl_vars['pagefound'] = new Smarty_variable('y', null, 0);?>
	<?php }?>

	<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
		<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'){?>
			<td class="checkbox">
				<input type="checkbox" name="checked[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
">
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_id']=='y'){?>
			<td class="integer">
				<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
" class="link" title="View page&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['page_id'];?>
</a>
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name']=='y'){?>
			<td class="text">
				<?php echo smarty_function_object_link(array('type'=>'wiki','id'=>$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],'url'=>smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],'wiki','',$_smarty_tpl->tpl_vars['all_langs']->value),'title'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_name_len'],"...",true)),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description']!=''){?>
					<div class="subcomment">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['description'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_description_len'],"...",true);?>

					</div>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['changes']['index']]['snippet'])){?>
					<div class="subcomment"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['snippet'];?>
</div>
				<?php }?>
			</td>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['wplp_used']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_smarty_tpl->tpl_vars['lc'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wplp_used']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value){
$_smarty_tpl->tpl_vars['ln']->_loop = true;
 $_smarty_tpl->tpl_vars['lc']->value = $_smarty_tpl->tpl_vars['ln']->key;
?>
				<td class="text">
					<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]){?>
						<a href="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value]);?>
" class="link" title="View page&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['translations'][$_smarty_tpl->tpl_vars['lc']->value], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					<?php }?>
				</td>
			<?php } ?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_hits']=='y'){?>	
			<td class="integer">
				<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['hits'];?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'||$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y'){?>
			<td class="date">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastmodif']=='y'){?>
					<div><?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lastModif']);?>
</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['comment']!=''){?>
					<div>
						<i><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['comment'],$_smarty_tpl->tpl_vars['prefs']->value['wiki_list_comment_len'],"...",true);?>
</i>
					</div>
				<?php }?>
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_creator']=='y'){?>
			<td class="username">
				<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['creator']);?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_user']=='y'){?>
			<td class="username">
				<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['user']);?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_lastver']=='y'){?>
			<td class="integer">
				<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['version'];?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_status']=='y'){?>
			<td class="icon">
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['flag']=='locked'){?>
					<?php echo smarty_function_icon(array('_id'=>'lock','alt'=>"Locked"),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smarty_function_icon(array('_id'=>'lock_break','alt'=>"unlocked"),$_smarty_tpl);?>

				<?php }?>
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_versions']=='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_history']->value=='y'){?>
				<td class="integer">
					<a class="link" href="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
">
						<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['versions'];?>

					</a>
				</td>
			<?php }else{ ?>
				<td class="integer">
					<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['versions'];?>

				</td>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_links']=='y'){?>
			<td class="integer">
				<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['links'];?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_backlinks']=='y'){?>
			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_backlinks']=='y'){?>
				<td class="integer">
					<a class="link" href="tiki-backlinks.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
">
						<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['backlinks'];?>

					</a>
				</td>
			<?php }else{ ?>
				<td class="integer"><?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['backlinks'];?>
</td>
			<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_size']=='y'){?>
			<td class="integer"><?php echo smarty_modifier_kbsize($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['len']);?>
</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_language']=='y'){?>
			<td class="text">
				<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['lang'];?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories']=='y'){?>
			<td class="text">
				<?php  $_smarty_tpl->tpl_vars['categ'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categ']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['categname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['categ']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['categ']->key => $_smarty_tpl->tpl_vars['categ']->value){
$_smarty_tpl->tpl_vars['categ']->_loop = true;
 $_smarty_tpl->tpl_vars['categ']->index++;
 $_smarty_tpl->tpl_vars['categ']->first = $_smarty_tpl->tpl_vars['categ']->index === 0;
?>
					<?php if (!$_smarty_tpl->tpl_vars['categ']->first){?><br><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categ']->value, ENT_QUOTES, 'UTF-8', true);?>

				<?php } ?>
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_categories_path']=='y'){?>
			<td class="text">
				<?php  $_smarty_tpl->tpl_vars['categpath'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['categpath']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['categpath']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['categpath']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['categpath']->key => $_smarty_tpl->tpl_vars['categpath']->value){
$_smarty_tpl->tpl_vars['categpath']->_loop = true;
 $_smarty_tpl->tpl_vars['categpath']->index++;
 $_smarty_tpl->tpl_vars['categpath']->first = $_smarty_tpl->tpl_vars['categpath']->index === 0;
?>
					<?php if (!$_smarty_tpl->tpl_vars['categpath']->first){?><br><?php }?>
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categpath']->value, ENT_QUOTES, 'UTF-8', true);?>

				<?php } ?>
			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_list_rating']=='y'){?>
			<td class="integer">
				<?php echo $_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['rating'];?>

			</td>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['show_actions']->value=='y'){?>
			<td class="action">
				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_edit']=='y'){?>
					<a class="link" href="tiki-editpage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
"><?php echo smarty_function_icon(array('_id'=>'page_edit'),$_smarty_tpl);?>
</a>
					<a class="link" href="tiki-copypage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
&amp;version=last"><?php echo smarty_function_icon(array('_id'=>'page_copy','alt'=>"Copy"),$_smarty_tpl);?>
</a>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_history']=='y'&&$_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_wiki_view_history']=='y'){?>
					<a class="link" href="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
"><?php echo smarty_function_icon(array('_id'=>'page_white_stack','alt'=>"History"),$_smarty_tpl);?>
</a>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_assign_perm_wiki_page']=='y'){?>
					<a class="link" href="tiki-objectpermissions.php?objectName=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
&amp;objectType=wiki+page&amp;permType=wiki&amp;objectId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
">
						<?php echo smarty_function_icon(array('_id'=>'key','alt'=>"Perms"),$_smarty_tpl);?>

					</a>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['perms']['tiki_p_remove']=='y'){?>
					<a class="link" href="tiki-removepage.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['listpages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['changes']['index']]['pageName']);?>
&amp;version=last"><?php echo smarty_function_icon(array('_id'=>'cross','alt'=>"Remove"),$_smarty_tpl);?>
</a>
				<?php }?>
			</td>
		<?php }?>
		</tr>
	<?php endfor; else: ?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'find_htmlescaped', null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', "intro", null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['exact_match']->value!='n'){?>No page:<?php }else{ ?>No pages found with:<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php if ($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['aliases_were_found']->value=='y'){?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&dquot;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

		<?php }elseif($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['initial']->value!=''&&$_smarty_tpl->tpl_vars['aliases_were_found']->value=='y'){?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial']->value)." &quote;. <br/>However, some page aliases fitting the query were found (see Aliases section above)."),$_smarty_tpl);?>

                <?php }elseif($_smarty_tpl->tpl_vars['find']->value!=''&&$_smarty_tpl->tpl_vars['initial']->value!=''){?>
                        <?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot; and starting with &quot; ".((string)$_smarty_tpl->tpl_vars['initial']->value)." &quot;."),$_smarty_tpl);?>

                <?php }elseif($_smarty_tpl->tpl_vars['find']->value!=''){?>
                        <?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>((string)$_smarty_tpl->tpl_vars['intro']->value)." &quot;".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value)."&quot;."),$_smarty_tpl);?>


		<?php }else{ ?>
			<?php echo smarty_function_norecords(array('_colspan'=>$_smarty_tpl->tpl_vars['cntcol']->value,'_text'=>"No pages found."),$_smarty_tpl);?>

		<?php }?>
	<?php endif; ?>
</table>

<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'&&count($_smarty_tpl->tpl_vars['listpages']->value)>0){?> 
	<p align="left"> 
		<label for="submit_mult">Perform action with checked:</label>
		<select name="submit_mult" id="submit_mult" onchange="this.form.submit();">
			<option value="" selected="selected">...</option>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_remove']->value=='y'){?> 
				<option value="remove_pages" >Remove</option>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_multiprint']=='y'){?>
				<option value="print_pages" >Print</option>

			        <?php if ($_smarty_tpl->tpl_vars['prefs']->value['print_pdf_from_url']!='none'){?>
					<option value="export_pdf" >PDF</option>
				<?php }?>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki_usrlock']=='y'&&($_smarty_tpl->tpl_vars['tiki_p_lock']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y')){?>
				<option value="lock_pages" >Lock</option>
				<option value="unlock_pages" >Unlock</option>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
				<option value="zip">Xml Zip</option>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'){?>
				<option value="title">Add page name as a header ! at the beginning of the page content</option>
			<?php }?>

			
		</select>                
	</p>
	<script type='text/javascript'>
		<!--
		// Fake js to allow the use of the <noscript> tag (so non-js-users can still submit)
		//-->
	</script>
	<noscript>
		<input type="submit" value="OK">
	</noscript>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['find']->value&&$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y'&&$_smarty_tpl->tpl_vars['pagefound']->value=='n'&&$_smarty_tpl->tpl_vars['alias_found']->value=='n'){?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'find_htmlescaped', null); ob_start(); ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'find_urlescaped', null); ob_start(); ?><?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<div class="navbar">
		 <?php echo smarty_function_button(array('_text'=>"Create Page: ".((string)$_smarty_tpl->tpl_vars['find_htmlescaped']->value),'href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['find_urlescaped']->value)."&lang=".((string)$_smarty_tpl->tpl_vars['find_lang']->value)."&templateId=".((string)$_smarty_tpl->tpl_vars['template_id']->value)."&template_name=".((string)$_smarty_tpl->tpl_vars['template_name']->value)."&categId=".((string)$_smarty_tpl->tpl_vars['create_page_with_categId']->value),'_title'=>"Create"),$_smarty_tpl);?>

	</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['checkboxes_on']->value=='y'){?>
</form>
<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value,'clean'=>$_smarty_tpl->tpl_vars['clean']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>