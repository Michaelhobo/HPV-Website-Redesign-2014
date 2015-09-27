<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-15 19:01:41
         compiled from "/var/www/html/Website/tiki/templates/canonical.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174330297452d6db15cfe1d4-05581556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'feba94a1ce7e2d9144701ce813449419c7534eb5' => 
    array (
      0 => '/var/www/html/Website/tiki/templates/canonical.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174330297452d6db15cfe1d4-05581556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mid' => 0,
    'base_url_canonical' => 0,
    'page' => 0,
    'itemId' => 0,
    'forumId' => 0,
    'comments_parentId' => 0,
    'blogId' => 0,
    'postId' => 0,
    'articleId' => 0,
    'parentId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d6db15e55af6_38654530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d6db15e55af6_38654530')) {function content_52d6db15e55af6_38654530($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_canonical_url']=='y'&&isset($_smarty_tpl->tpl_vars['mid']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-index_p.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-show_page_raw.tpl'||$_smarty_tpl->tpl_vars['mid']->value=='tiki-all_languages.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_tracker_item.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['itemId']->value,'trackeritem');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['forumId']->value,'forum');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_forum_thread.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['comments_parentId']->value,'forumthread');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['blogId']->value,'blog');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-view_blog_post.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['postId']->value,'blogpost');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-read_article.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['articleId']->value,'article');?>
">
	<?php }elseif($_smarty_tpl->tpl_vars['mid']->value=='tiki-browse_categories.tpl'){?>
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['base_url_canonical']->value;?>
<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['parentId']->value,'category');?>
">
	<?php }?>
<?php }?>
<?php }} ?>