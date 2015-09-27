<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-10 18:23:42
         compiled from "/var/www/html/wordpress/tiki/templates/pagehistory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2013733505256f0aec1feb8-52403623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f856c9b102e2f724d1f52306802bcea54c9fca' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/pagehistory.tpl',
      1 => 1362063598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2013733505256f0aec1feb8-52403623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'translation_mode' => 0,
    'old' => 0,
    'new' => 0,
    'page' => 0,
    'info' => 0,
    'diff_style' => 0,
    'show_all_versions' => 0,
    'ver_cant' => 0,
    'diffdata' => 0,
    'oldd' => 0,
    'newd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5256f0af3503b2_50445109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256f0af3503b2_50445109')) {function content_5256f0af3503b2_50445109($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_modifier_userlink')) include 'lib/smarty_tiki/modifier.userlink.php';
if (!is_callable('smarty_modifier_tiki_short_datetime')) include 'lib/smarty_tiki/modifier.tiki_short_datetime.php';
if (!is_callable('smarty_block_pagination_links')) include 'lib/smarty_tiki/block.pagination_links.php';
?><?php if (isset($_REQUEST['diff_style'])&&$_REQUEST['diff_style']){?>
	<?php if (!isset($_smarty_tpl->tpl_vars['translation_mode']->value)||$_smarty_tpl->tpl_vars['translation_mode']->value!='y'){?>
		<h2><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Comparing version <?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
 with version <?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>		
	<?php }?>
	<table class="normal diff">
	<?php if (isset($_smarty_tpl->tpl_vars['translation_mode']->value)&&$_smarty_tpl->tpl_vars['translation_mode']->value=='n'){?>
		<tr>
			<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['old']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['old']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']){?> (Current)<?php }?></b></th>
			<th colspan="2"><b>Version: <a href="tiki-pagehistory.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['page']->value);?>
&amp;preview=<?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
" title="View"><?php echo $_smarty_tpl->tpl_vars['new']->value['version'];?>
</a><?php if ($_smarty_tpl->tpl_vars['new']->value['version']==$_smarty_tpl->tpl_vars['info']->value['version']){?> (Current)<?php }?></b></th>
		</tr>
		<tr>
			<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['old']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['old']->value['lastModif']);?>
</td>
			<td colspan="2"><?php echo smarty_modifier_userlink($_smarty_tpl->tpl_vars['new']->value['user']);?>
 - <?php echo smarty_modifier_tiki_short_datetime($_smarty_tpl->tpl_vars['new']->value['lastModif']);?>
</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['old']->value['comment']||$_smarty_tpl->tpl_vars['new']->value['comment']){?>
			<tr>
				<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['old']->value['comment']){?><?php echo $_smarty_tpl->tpl_vars['old']->value['comment'];?>
<?php }else{ ?>&nbsp;<?php }?></td>
				<td colspan="2" class="editdate"><?php if ($_smarty_tpl->tpl_vars['new']->value['comment']){?><?php echo $_smarty_tpl->tpl_vars['new']->value['comment'];?>
<?php }else{ ?>&nbsp;<?php }?></td>
			</tr>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['old']->value['description']!=$_smarty_tpl->tpl_vars['new']->value['description']){?>
			<tr>
				<td colspan="2" class="diffdeleted"><?php if ($_smarty_tpl->tpl_vars['old']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['old']->value['description'];?>
<?php }else{ ?>&nbsp;<?php }?></td>
				<td colspan="2" class="diffadded"><?php if ($_smarty_tpl->tpl_vars['new']->value['description']){?><?php echo $_smarty_tpl->tpl_vars['new']->value['description'];?>
<?php }else{ ?>&nbsp;<?php }?></td>
			</tr>
		<?php }?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=="sideview"){?>
		<tr>
			<td colspan="2" valign="top" ><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['old']->value['data'];?>
</div></td>
			<td colspan="2" valign="top" ><div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['new']->value['data'];?>
</div></td>
		</tr>
	<?php }?>
		<tr>
			<?php if ($_REQUEST['oldver_idx']+1==$_REQUEST['newver_idx']||$_REQUEST['oldver_idx']==$_REQUEST['newver_idx']){?>
				<td colspan="4">
					<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n"){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['bothver_idx'],'offset_arg'=>"bothver_idx",'itemname'=>"Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</td>
			<?php }else{ ?>
				<td colspan="2">
					<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n"){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['oldver_idx'],'offset_arg'=>"oldver_idx",'itemname'=>"Old Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</td>
				<td colspan="2">
					<?php if (isset($_smarty_tpl->tpl_vars['show_all_versions']->value)&&$_smarty_tpl->tpl_vars['show_all_versions']->value=="n"){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Session",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('pagination_links', array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n")); $_block_repeat=true; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_pagination_links(array('cant'=>$_smarty_tpl->tpl_vars['ver_cant']->value,'offset'=>$_REQUEST['newver_idx'],'offset_arg'=>"newver_idx",'itemname'=>"New Version",'show_numbers'=>"n"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }?>
				</td>
			<?php }?>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['diff_style']->value=='unidiff'){?>
			 <tr>
			 	<td colspan="4">
					 <?php if ($_smarty_tpl->tpl_vars['diffdata']->value){?>
						<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ix']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['name'] = 'ix';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ix']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<?php if ($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffheader"){?>
								<?php $_smarty_tpl->tpl_vars["oldd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['old'], null, 0);?>
								<?php $_smarty_tpl->tpl_vars["newd"] = new Smarty_variable($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['new'], null, 0);?>
								<br><div class="diffheader">@@ <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
-Lines: <?php echo $_smarty_tpl->tpl_vars['oldd']->value;?>
 changed to +Lines: <?php echo $_smarty_tpl->tpl_vars['newd']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 @@</div>
							<?php }elseif($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffdeleted"){?>
								<div class="diffdeleted">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
									<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']){?><br><?php }?>
									- <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

								<?php endfor; endif; ?>
								</div>
							<?php }elseif($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffadded"){?>
								<div class="diffadded">
									<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
										<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']){?><br><?php }?>
										+ <?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

									<?php endfor; endif; ?>
								</div>
							<?php }elseif($_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['type']=="diffbody"){?>
								<div class="diffbody">
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['name'] = 'iy';
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['iy']['total']);
?>
									<?php if (!$_smarty_tpl->getVariable('smarty')->value['section']['iy']['first']){?><br><?php }?>
									<?php echo $_smarty_tpl->tpl_vars['diffdata']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ix']['index']]['data'][$_smarty_tpl->getVariable('smarty')->value['section']['iy']['index']];?>

								<?php endfor; endif; ?>
							</div>
							<?php }?>
						<?php endfor; endif; ?>
					<?php }else{ ?>
						<div class="diffheader">Versions are identical</div>
					<?php }?>
				</td>
			</tr>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['diff_style']->value!='unidiff'&&$_smarty_tpl->tpl_vars['diff_style']->value!='sideview'){?>
			<?php if ($_smarty_tpl->tpl_vars['diffdata']->value){?><?php echo $_smarty_tpl->tpl_vars['diffdata']->value;?>
<?php }else{ ?><tr><td colspan="4">Versions are identical</td></tr><?php }?>
		<?php }?>
	</table>
<?php }?>
<?php }} ?>