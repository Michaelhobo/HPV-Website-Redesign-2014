<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:16
         compiled from "/var/www/html/wordpress/tiki/templates/wiki_authors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67617185852558768069191-30802697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd88eb254ed6bf290045353306cd2c9338f8b95' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/wiki_authors.tpl',
      1 => 1362063598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67617185852558768069191-30802697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wiki_authors_style' => 0,
    'lastUser' => 0,
    'contributors' => 0,
    'lastModif' => 0,
    'prefs' => 0,
    'lastVersion' => 0,
    'revision_approval_info' => 0,
    'creator' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525587681a2a76_48930920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525587681a2a76_48930920')) {function content_525587681a2a76_48930920($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?><?php if ($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='business'){?>
	Last edited by <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['author'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['author']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['name'] = 'author';
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total']);
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['author']['first']){?>
			, based on work by
		<?php }else{ ?>
			<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['author']['last']){?>
				,
			<?php }else{ ?>
				and
			<?php }?>
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['author']['index']]);?>

	<?php endfor; endif; ?>.
	<br>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>
. <?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y'){?>(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value){?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }elseif($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='collaborative'){?>
	Contributors to this page: <?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value);?>

	<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['author'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['author']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['name'] = 'author';
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['contributors']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['author']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['author']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['author']['total']);
?>
		<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['author']['last']){?>
			,
		<?php }else{ ?> 
			and
		<?php }?>
		<?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['contributors']->value[$_smarty_tpl->getVariable('smarty')->value['section']['author']['index']]);?>

	<?php endfor; endif; ?>.
	<br>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page last modified on %0 by %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
. 
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y'){?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value){?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>

<?php }elseif($_smarty_tpl->tpl_vars['wiki_authors_style']->value=='lastmodif'){?>
	Page last modified on <?php echo smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value);?>

<?php }else{ ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Created by %0<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['creator']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
.
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Last Modification: %0 by %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['lastModif']->value),'_1'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['lastUser']->value)), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
. 
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['wiki_show_version']=='y'){?>
		(Version <?php echo $_smarty_tpl->tpl_vars['lastVersion']->value;?>
)
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['revision_approval_info']->value){?>
		<br>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page approved by %0 on %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_userlink($_smarty_tpl->tpl_vars['revision_approval_info']->value['user']),'_1'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['revision_approval_info']->value['lastModif'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php }?>
<?php }} ?>