<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:15
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-flaggedrev_approval_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164653473852558767501e76-17687416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe28cd84f975fe5a908f41d7f32d436587555aa7' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-flaggedrev_approval_header.tpl',
      1 => 1363873985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164653473852558767501e76-17687416',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'revision_approval' => 0,
    'revision_approved' => 0,
    'revision_displayed' => 0,
    'lastVersion' => 0,
    'tiki_p_wiki_view_latest' => 0,
    'tiki_p_wiki_approve' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587675defb9_23714434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587675defb9_23714434')) {function content_525587675defb9_23714434($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_self_link')) include 'lib/smarty_tiki/block.self_link.php';
if (!is_callable('smarty_modifier_sefurl')) include 'lib/smarty_tiki/modifier.sefurl.php';
?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['flaggedrev_approval']=='y'&&$_smarty_tpl->tpl_vars['revision_approval']->value){?>
	<?php if (($_smarty_tpl->tpl_vars['revision_approved']->value||$_smarty_tpl->tpl_vars['revision_displayed']->value)&&$_smarty_tpl->tpl_vars['revision_approved']->value!=$_smarty_tpl->tpl_vars['lastVersion']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['lastVersion']->value==$_smarty_tpl->tpl_vars['revision_displayed']->value){?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					You are currently viewing the latest version of the page.
					<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value){?>
						You can also view the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array()); $_block_repeat=true; echo smarty_block_self_link(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest approved version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y'){?>
						You can approve this revision and make it available to a wider audience. Make sure you review all the changes before approving.
					<?php }?>
				</p>
				<?php if ($_smarty_tpl->tpl_vars['tiki_p_wiki_approve']->value=='y'){?>
					<form method="post" action="<?php echo smarty_modifier_sefurl($_smarty_tpl->tpl_vars['page']->value);?>
">
						<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value){?>
							<p><a href="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&compare&oldver=<?php echo rawurlencode($_smarty_tpl->tpl_vars['revision_approved']->value);?>
&diff_style=<?php echo rawurlencode($_smarty_tpl->tpl_vars['prefs']->value['default_wiki_diff_style']);?>
">Show changes since last approved revision</a></p>
						<?php }else{ ?>
							<p>This page has no prior approved revision. <strong>All of the content must be reviewed.</strong></p>
						<?php }?>
						<div class="submit">
							<input type="hidden" name="revision" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['revision_displayed']->value, ENT_QUOTES, 'UTF-8', true);?>
">
							<input type="submit" name="approve" value="Approve current revision">
						</div>
					</form>
				<?php }?>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }else{ ?>
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

				<p>
					You are currently viewing the approved version of the page.
					<?php if ($_smarty_tpl->tpl_vars['revision_approved']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'){?>
						You can also view the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
					<?php }?>
				</p>
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		<?php }?>
	<?php }elseif($_smarty_tpl->tpl_vars['revision_approval']->value&&!$_smarty_tpl->tpl_vars['revision_approved']->value&&$_smarty_tpl->tpl_vars['tiki_p_wiki_view_latest']->value=='y'){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'comment','title'=>"Content waiting for approval")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<p>
				View the <?php $_smarty_tpl->smarty->_tag_stack[] = array('self_link', array('latest'=>1)); $_block_repeat=true; echo smarty_block_self_link(array('latest'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
latest version<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_self_link(array('latest'=>1), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
			</p>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'comment','title'=>"Content waiting for approval"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>