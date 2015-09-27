<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:40:30
         compiled from "/var/www/html/wordpress/tiki/templates/tiki-user_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1821633417525586fe92f7d0-57563822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d5d54e9d451afd1fa189168bc89e734642453da' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/tiki-user_menu.tpl',
      1 => 1362137110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821633417525586fe92f7d0-57563822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu_info' => 0,
    'menu_channels' => 0,
    'chdata' => 0,
    'opensec' => 0,
    'sectionType' => 0,
    'm' => 0,
    'sep' => 0,
    'prefs' => 0,
    'cname' => 0,
    'link_on_section' => 0,
    'icon_name' => 0,
    'translate' => 0,
    'escape_menu_labels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525586fed539e9_22763384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525586fed539e9_22763384')) {function content_525586fed539e9_22763384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
?>
<div class="tikimenu<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['structure']=='y'){?> structuremenu<?php }?>">
	<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable('0', null, 0);?>
	<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
	
	<?php  $_smarty_tpl->tpl_vars['chdata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['chdata']->_loop = false;
 $_smarty_tpl->tpl_vars['pos'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu_channels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['chdata']->key => $_smarty_tpl->tpl_vars['chdata']->value){
$_smarty_tpl->tpl_vars['chdata']->_loop = true;
 $_smarty_tpl->tpl_vars['pos']->value = $_smarty_tpl->tpl_vars['chdata']->key;
?>
		<?php $_smarty_tpl->tpl_vars['cname'] = new Smarty_variable((($_smarty_tpl->tpl_vars['menu_info']->value['menuId']).('__')).($_smarty_tpl->tpl_vars['chdata']->value['position']), null, 0);?>
		
		<?php if ($_smarty_tpl->tpl_vars['chdata']->value['type']!='o'&&$_smarty_tpl->tpl_vars['chdata']->value['type']!='-'){?>
			
			<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?>
				<?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable($_smarty_tpl->tpl_vars['chdata']->value['type'], null, 0);?>
				<?php if ($_smarty_tpl->tpl_vars['sectionType']->value=='s'||$_smarty_tpl->tpl_vars['sectionType']->value=='r'){?>
					<?php $_smarty_tpl->tpl_vars['sectionType'] = new Smarty_variable(0, null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['opensec']->value>$_smarty_tpl->tpl_vars['sectionType']->value){?>
					<?php $_smarty_tpl->tpl_vars['m'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-$_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['close'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['close']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_channels']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['name'] = 'close';
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = (int)$_smarty_tpl->tpl_vars['m']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total']);
?>
						   </div>
					<?php endfor; endif; ?>
					<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['sectionType']->value, null, 0);?>
				<?php }?>
			<?php }?>
			
			<div class="separator<?php echo $_smarty_tpl->tpl_vars['sep']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']){?> selected<?php }?><?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant'])&&$_smarty_tpl->tpl_vars['chdata']->value['selectedAscendant']){?> selectedAscendant<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['sep']->value=='line'){?>
					<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['type']=='e'||$_smarty_tpl->tpl_vars['menu_info']->value['type']=='d'){?>
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'){?>
						<span class="separatoricon-toggle" style="display:inline">
							<a class='separator' href="javascript:toggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">
								<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>"Toggle",'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

							</a>
						</span>
						<?php if ($_smarty_tpl->tpl_vars['chdata']->value['url']&&$_smarty_tpl->tpl_vars['link_on_section']->value=='y'){?>
							<span class="separatoricon-url" style="display:none">
								<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['sefurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['url'];?>
<?php }?><?php }?>">
									<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>"Toggle",'_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

								</a>
							</span>
						<?php }?>
					<?php }elseif($_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']=='y'){?>
						<?php $_smarty_tpl->tpl_vars["icon_name"] = new Smarty_variable("icnmenu".((string)$_smarty_tpl->tpl_vars['cname']->value), null, 0);?>
						<a class='separator' href="javascript:icntoggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');" title="Toggle options">
							<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['type']!='d'){?>
								<?php if (empty($_smarty_tpl->tpl_vars['menu_info']->value['icon'])){?>
									<?php echo smarty_function_icon(array('_id'=>"ofolder",'alt'=>'Toggle','name'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value),'id'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value)),$_smarty_tpl);?>

								<?php }else{ ?>
									<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_info']->value['oicon'], ENT_QUOTES, 'UTF-8', true);?>
" alt="Toggle" name="<?php echo $_smarty_tpl->tpl_vars['icon_name']->value;?>
" id="$icon_name">
								<?php }?>
							<?php }else{ ?>
								<?php if (empty($_smarty_tpl->tpl_vars['menu_info']->value['icon'])){?>
									<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['open'])&&$_smarty_tpl->tpl_vars['chdata']->value['open']){?>
										<?php echo smarty_function_icon(array('_id'=>"ofolder",'alt'=>'Toggle','name'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value),'id'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value)),$_smarty_tpl);?>

									<?php }else{ ?>
										<?php echo smarty_function_icon(array('_id'=>"folder",'alt'=>'Toggle','name'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value),'id'=>((string)$_smarty_tpl->tpl_vars['icon_name']->value)),$_smarty_tpl);?>

									<?php }?>
								<?php }else{ ?>
									<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['open'])&&$_smarty_tpl->tpl_vars['chdata']->value['open']){?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_info']->value['oicon'], ENT_QUOTES, 'UTF-8', true);?>
" alt="Toggle" name="<?php echo $_smarty_tpl->tpl_vars['icon_name']->value;?>
" id="$icon_name">
									<?php }else{ ?>
										<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu_info']->value['icon'], ENT_QUOTES, 'UTF-8', true);?>
" alt="Toggle" name="<?php echo $_smarty_tpl->tpl_vars['icon_name']->value;?>
" id="$icon_name">
									<?php }?>
								<?php }?>
							<?php }?>
						</a>
					<?php }else{ ?>
						<a class='separator' href="javascript:toggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">[-]</a>
					<?php }?>
				<?php }?> 
				<?php if ($_smarty_tpl->tpl_vars['chdata']->value['url']&&$_smarty_tpl->tpl_vars['link_on_section']->value=='y'){?>
					<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['sefurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['url'];?>
<?php }?><?php }?>" class="separator">
				<?php }else{ ?>
					<a href="javascript:icntoggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');" class="separator">
				<?php }?>
					<span class="menuText">
						<?php if ($_smarty_tpl->tpl_vars['translate']->value=='n'){?>
							<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?>
						<?php }else{ ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</span>
				</a>
				<?php if (($_smarty_tpl->tpl_vars['menu_info']->value['type']=='e'||$_smarty_tpl->tpl_vars['menu_info']->value['type']=='d')&&$_smarty_tpl->tpl_vars['prefs']->value['feature_menusfolderstyle']!='y'){?>
					<a class='separator' href="javascript:toggle('menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
');">[+]</a>
				<?php }?> 
			</div> 
			
			<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value+1, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['menu_info']->value['type']=='e'||$_smarty_tpl->tpl_vars['menu_info']->value['type']=='d'){?>
				<div class="menuSection" <?php if (!isset($_smarty_tpl->tpl_vars['chdata']->value['open'])||!$_smarty_tpl->tpl_vars['chdata']->value['open']){?>style="display:none;"<?php }else{ ?>style="display:block;"<?php }?> id='menu<?php echo $_smarty_tpl->tpl_vars['cname']->value;?>
'>
			<?php }else{ ?>
				<div class="menuSection">
			<?php }?>
		
		<?php }elseif($_smarty_tpl->tpl_vars['chdata']->value['type']=='o'){?>
			<div class="option<?php echo $_smarty_tpl->tpl_vars['chdata']->value['optionId'];?>
 option<?php echo $_smarty_tpl->tpl_vars['sep']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['chdata']->value['selected'])&&$_smarty_tpl->tpl_vars['chdata']->value['selected']){?> selected<?php }?>">
				<a href="<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_sefurl']=='y'&&!empty($_smarty_tpl->tpl_vars['chdata']->value['sefurl'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['sefurl'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_item_names_raw']=='n'){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['url'];?>
<?php }?><?php }?>" class="linkmenu">
					<?php if ($_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons']=='y'&&$_smarty_tpl->tpl_vars['menu_info']->value['use_items_icons']=='y'&&($_smarty_tpl->tpl_vars['opensec']->value==0||$_smarty_tpl->tpl_vars['chdata']->value['icon']!='')){?>
						<?php echo smarty_function_icon(array('_id'=>$_smarty_tpl->tpl_vars['chdata']->value['icon'],'alt'=>'','_defaultdir'=>$_smarty_tpl->tpl_vars['prefs']->value['menus_items_icons_path']),$_smarty_tpl);?>

					<?php }?>
					<span class="menuText">
						<?php if ($_smarty_tpl->tpl_vars['translate']->value=='n'){?>
							<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?>
						<?php }else{ ?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php if ($_smarty_tpl->tpl_vars['escape_menu_labels']->value){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chdata']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['chdata']->value['name'];?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
					</span>
				</a>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['sep']->value=='line'){?>
				<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable('', null, 0);?>
			<?php }?>
			
		
		<?php }elseif($_smarty_tpl->tpl_vars['chdata']->value['type']=='-'){?>
			<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?>
				</div><?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable($_smarty_tpl->tpl_vars['opensec']->value-1, null, 0);?>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars['sep'] = new Smarty_variable("line", null, 0);?>
		<?php }?>
	<?php } ?>
	
	<?php if ($_smarty_tpl->tpl_vars['opensec']->value>0){?>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['close'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['close']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['menu_channels']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['name'] = 'close';
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = (int)$_smarty_tpl->tpl_vars['opensec']->value;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['close']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['close']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['close']['total']);
?>
			</div>
		<?php endfor; endif; ?>
		<?php $_smarty_tpl->tpl_vars['opensec'] = new Smarty_variable(0, null, 0);?>
	<?php }?>
</div>
<?php }} ?>