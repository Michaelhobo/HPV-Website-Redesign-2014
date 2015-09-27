<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 13:11:50
         compiled from "/var/www/html/Website/wiki/templates/tiki-browse_categories.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16758304453051e16814037-94431106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f3d9fad77b85a89ca2e50ea5b24b62be027755' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/tiki-browse_categories.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16758304453051e16814037-94431106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parentId' => 0,
    'p_info' => 0,
    'tiki_p_admin_categories' => 0,
    'type' => 0,
    'find' => 0,
    'deep' => 0,
    'sort_mode' => 0,
    'prefs' => 0,
    'id' => 0,
    'name' => 0,
    'eyes_curr' => 0,
    'father' => 0,
    'tree' => 0,
    'cant_pages' => 0,
    'objects' => 0,
    'maxRecords' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53051e170c78d7_30434775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53051e170c78d7_30434775')) {function content_53051e170c78d7_30434775($_smarty_tpl) {?><?php if (!is_callable('smarty_block_title')) include 'lib/smarty_tiki/block.title.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/Website/wiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/html/Website/wiki/vendor/smarty/smarty/distribution/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_tr_if')) include 'lib/smarty_tiki/modifier.tr_if.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('title', array()); $_block_repeat=true; echo smarty_block_title(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['parentId']->value!=0){?>Category <?php echo $_smarty_tpl->tpl_vars['p_info']->value['name'];?>
<?php }else{ ?>Categories<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_title(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if ($_smarty_tpl->tpl_vars['parentId']->value&&$_smarty_tpl->tpl_vars['p_info']->value['description']){?>
	<div class="description"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['p_info']->value['description'], ENT_QUOTES, 'UTF-8', true));?>
</div>
<?php }?>
<div class="categbar">
	<?php echo smarty_function_button(array('href'=>"tiki-edit_categories.php",'_text'=>"Organize Objects",'_title'=>"Organize Objects"),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['tiki_p_admin_categories']->value=='y'){?>
		<?php echo smarty_function_button(array('href'=>"tiki-admin_categories.php?parentId=".((string)$_smarty_tpl->tpl_vars['parentId']->value),'_text'=>"Admin Category",'_title'=>"Admin the Category System"),$_smarty_tpl);?>

	<?php }?>
</div>

<div class="navbar">
	Browse in:
	
	<span class="button">
		<a <?php if ($_smarty_tpl->tpl_vars['type']->value==''){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo $_smarty_tpl->tpl_vars['deep']->value;?>
&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">All</a>
	</span>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_wiki']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='wiki page'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=wiki+page&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Wiki pages</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_galleries']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='image gallery'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=image+gallery&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Image galleries</a>
		</span>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='image'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=image&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Images</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='file gallery'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=file+gallery&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">File Galleries</a>
		</span>

		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='file'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=file&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Files</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_blogs']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='blog'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=blog&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Blogs</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_trackers']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='tracker'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=tracker&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Trackers</a>
		</span>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='trackeritem'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=trackeritem&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Trackers Items</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_quizzes']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='quiz'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=quiz&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Quizzes</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_polls']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='poll'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=poll&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Polls</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_surveys']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='survey'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=survey&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Surveys</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_directory']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='directory'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=directory&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Directory</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_faqs']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='faq'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=faq&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">FAQs</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sheet']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='sheet'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=sheet&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Sheets</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_articles']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='article'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=article&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Articles</a>
		</span>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_forums']=='y'){?>
		<span class="button">
			<a <?php if ($_smarty_tpl->tpl_vars['type']->value=='forum'){?> id="highlight"<?php }?> href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=forum&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Forums</a>
		</span>
	<?php }?>
</div>

<form method="post" action="tiki-browse_categories.php">
	<label>Find: <?php if ($_smarty_tpl->tpl_vars['parentId']->value!=0){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p_info']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 <?php }?><input type="text" name="find" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['find']->value, ENT_QUOTES, 'UTF-8', true);?>
" size="35"></label>
	<?php echo smarty_function_help(array('url'=>"#",'desc'=>"Find in: <ul><li>Name</li><li>Description</li></ul>"),$_smarty_tpl);?>

	<input type="submit" value="Find" name="search">
	<label>in the current category - and its subcategories: <input type="checkbox" name="deep" <?php if ($_smarty_tpl->tpl_vars['deep']->value=='on'){?>checked="checked"<?php }?>></label>
	<input type="hidden" name="parentId" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parentId']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	
	<input type="hidden" name="sort_mode" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_mode']->value, ENT_QUOTES, 'UTF-8', true);?>
">
</form>

<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on'){?>
	<a class="link" href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;type=<?php echo rawurlencode($_smarty_tpl->tpl_vars['type']->value);?>
&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Hide subcategories objects</a>
<?php }else{ ?>
	<a class="link" href="tiki-browse_categories.php?find=<?php echo rawurlencode($_smarty_tpl->tpl_vars['find']->value);?>
&amp;type=<?php echo rawurlencode($_smarty_tpl->tpl_vars['type']->value);?>
&amp;deep=on&amp;parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['parentId']->value);?>
&amp;sort_mode=<?php echo rawurlencode($_smarty_tpl->tpl_vars['sort_mode']->value);?>
">Show subcategories objects</a>
<?php }?>

<br><br>

<?php if (isset($_smarty_tpl->tpl_vars['p_info']->value)){?>
	<div class="treetitle">Current category:
		<a href="tiki-browse_categories.php?parentId=0&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=<?php echo rawurlencode($_smarty_tpl->tpl_vars['type']->value);?>
" class="categpath">Top</a>
		<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['p_info']->value['tepath']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value){
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
			&nbsp;<?php echo $_smarty_tpl->tpl_vars['prefs']->value['site_crumb_seper'];?>
&nbsp;
			<a class="categpath" href="tiki-browse_categories.php?parentId=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=<?php echo rawurlencode($_smarty_tpl->tpl_vars['type']->value);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</a>
		<?php } ?>
			<?php echo $_smarty_tpl->tpl_vars['eyes_curr']->value;?>

	</div>
     
	<?php if ($_smarty_tpl->tpl_vars['parentId']->value!='0'){?>
		<div>
			<a class="catname" href="tiki-browse_categories.php?parentId=<?php echo rawurlencode($_smarty_tpl->tpl_vars['father']->value);?>
&amp;deep=<?php echo rawurlencode($_smarty_tpl->tpl_vars['deep']->value);?>
&amp;type=<?php echo rawurlencode($_smarty_tpl->tpl_vars['type']->value);?>
" title="Upper level">..</a>
		</div>
	<?php }?>
<?php }?>
<div class="cattree"><?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
</div>
<div class="catobj">
	<?php if ($_smarty_tpl->tpl_vars['cant_pages']->value>0){?>
		<table class="normal">
			<tr>
				<th>
					Name
				</th>
				<th>
					Type
				</th>
				<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on'){?>
					<th>
						Category
					</th>
				<?php }?>
			</tr>

			<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['objects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['total']);
?>
				<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
					<td class="text">
						<a href=<?php if (empty($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ix']['index']]['sefurl'])){?>"<?php echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['href'];?>
"<?php }else{ ?>"<?php echo $_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['sefurl'];?>
"<?php }?> class="catname"><?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['name'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '&nbsp;' : $tmp);?>
</a>
						<div class="subcomment"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['description'], ENT_QUOTES, 'UTF-8', true));?>
</div>
					</td>
					<td class="text">
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type'],"wiki page","wiki"),"trackeritem","tracker item");?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</td>
					<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on'){?>
						<td class="text">
							<?php echo htmlspecialchars(smarty_modifier_tr_if($_smarty_tpl->tpl_vars['objects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['categName']), ENT_QUOTES, 'UTF-8', true);?>

						</td>
					<?php }?>
				</tr>
			<?php endfor; else: ?>
				<?php if ($_smarty_tpl->tpl_vars['deep']->value=='on'){?>
					<?php echo smarty_function_norecords(array('_colspan'=>3),$_smarty_tpl);?>

				<?php }else{ ?>
					<?php echo smarty_function_norecords(array('_colspan'=>2),$_smarty_tpl);?>

				<?php }?>
			<?php endif; ?>
		</table>
		<br>
	<?php }?>
</div>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value)); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['cant_pages']->value,'step'=>$_smarty_tpl->tpl_vars['maxRecords']->value,'offset'=>$_smarty_tpl->tpl_vars['offset']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>