<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:54:42
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_connect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8453037052558a52a9a419-35031494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '130b74556e638aaf7245403d695746bfc3d25846' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_connect.tpl',
      1 => 1371332263,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8453037052558a52a9a419-35031494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'headerlib' => 0,
    'cserver_search_text' => 0,
    'connect_stats' => 0,
    'connect_recent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558a52c9f4f3_53125731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558a52c9f4f3_53125731')) {function content_52558a52c9f4f3_53125731($_smarty_tpl) {?><?php if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_function_norecords')) include 'lib/smarty_tiki/function.norecords.php';
?><div>&nbsp;</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array()); $_block_repeat=true; echo smarty_block_tabset(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Tiki Connect")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Tiki Connect"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<fieldset>
			<legend><strong>Join the community!</strong></legend>
			<p>Tiki Wiki CMS Groupware is Free and Open Source Software (FOSS). It is a community-driven project which exists and improves thanks to the participation of people just like YOU.</p>
			<p><?php echo smarty_function_button(array('href'=>"http://info.tiki.org/Join+the+community",'_text'=>"Join the Community"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Tiki news</strong></legend>
			<p>
				Embedded RSS feed from info.tiki.org TODO, meanwhile
				<?php echo smarty_function_button(array('href'=>"http://info.tiki.org/tiki-articles_rss.php?ver=2",'_text'=>"Add RSS"),$_smarty_tpl);?>

			</p>
			<p>
				Tiki Newsletter <?php echo smarty_function_button(array('_text'=>"Subscribe",'href'=>"http://tiki.org/tiki-newsletters.php?nlId=6&info=1"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Promote your site</strong></legend>
			<p>
				Add your site to the Tiki diretory.
				<?php echo smarty_function_button(array('href'=>"tiki-register_site.php",'_text'=>"Submit your site"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Spread the word</strong></legend>
			<p>
				Add the "Powered by" module to your site. 
				<?php echo smarty_function_button(array('href'=>"tiki-admin_modules.php?textFilter=powered&cookietab=3",'_text'=>"Manage Modules"),$_smarty_tpl);?>

			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Help improve Tiki</strong></legend>
			<p>
				Submit a feature request or bug report.
				<a href="http://dev.tiki.org/Report+a+Bug">Click here to go to our development site</a>
			</p>
		</fieldset>
		<fieldset>
			<legend><strong>Make a financial contribution to the Tiki Association</strong></legend>
			<p>
				<a href="http://tiki.org/Donation">
					<img src="img/tiki/Tiki_Contribute_Button.png" alt="Contribute to Tiki">
				</a>
			</p>
		</fieldset>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Tiki Connect"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<form class="admin" id="connect" name="connect" action="tiki-admin.php?page=connect" method="post">
			<fieldset>
				<legend>Tiki Connect</legend>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

					<p><em>Please note: Experimental - work in progress</em></p>
					<p>Tiki Connect is a way to let the Tiki project know how it is being used, and which parts people like or would like fixing (or explaining).<br>
					When you click the "Send Info" below you will be connected with mother.tiki.org, which is where the data will be collected.</p>
					<p>You can also send feedback about Tiki by checking the "Feedback" checkbox above. Icons will appear next to all the preferences where you can "like", request a "fix" or ask "what's this for?"<br>
					Your votes are sent when you connect with mother.tiki.org (currently only be clicking the "Send Info" button)</p>
					<p>For more info <a href="http://doc.tiki.org/Connect">click here</a></p>
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"info",'title'=>"New Feature",'icon'=>"bricks"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php echo smarty_function_preference(array('name'=>"connect_feature"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="connect_feature_childcontainer">
					<div class="navbar">
						<?php echo smarty_function_button(array('_script'=>"#",'_text'=>"Send Info",'_title'=>"Send the data",'_id'=>"connect_send_btn"),$_smarty_tpl);?>

						<?php echo smarty_function_button(array('_script'=>"#",'_text'=>"Preview info",'_title'=>"See what is going to be sent",'_id'=>"connect_list_btn"),$_smarty_tpl);?>

						<?php if (empty($_smarty_tpl->tpl_vars['prefs']->value['connect_site_title'])){?>
							<?php echo smarty_function_button(array('_text'=>"Fill form",'_title'=>"Fill this form in based on other preferences",'_id'=>"connect_defaults_btn",'_script'=>"#"),$_smarty_tpl);?>

						<?php }?>
					</div>
					<?php echo smarty_function_preference(array('name'=>"connect_send_info"),$_smarty_tpl);?>

					<div class="adminoptionboxchild" id="connect_send_info_childcontainer">
						<?php echo smarty_function_preference(array('name'=>"connect_site_title"),$_smarty_tpl);?>

						<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_send_info']=="y"&&empty($_smarty_tpl->tpl_vars['prefs']->value['connect_site_title'])){?>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"errors",'title'=>'')); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>''), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

								Site Title is required
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"errors",'title'=>''), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						<?php }?>
						<?php echo smarty_function_preference(array('name'=>"connect_site_email"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_url"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_keywords"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_site_location"),$_smarty_tpl);?>

						<div class="adminoptionboxchild" style="padding-left:5em;">
							<?php echo $_smarty_tpl->tpl_vars['headerlib']->value->add_map();?>

							<div class="adminoptionboxchild map-container" style="height:250px;width:400px;"  data-target-field="connect_site_location"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode']=="y"){?>
								data-icon-name="tiki" data-icon-src="img/tiki/tikiicon.png"
								data-icon-size="[16,16]" data-icon-offset="[-8,-16]" data-marker-filter=".geolocated.connection"<?php }?>></div>
						</div>
					</div>
					<?php echo smarty_function_preference(array('name'=>"connect_send_anonymous_info"),$_smarty_tpl);?>


					<div class="adminoptionboxchild"<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode']!="y"){?> style="display:none;"<?php }?>>
						<strong>Advanced settings</strong> Exposed to assist testing and development
						<?php echo smarty_function_preference(array('name'=>"connect_frequency"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_server"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_last_post"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_server_mode"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"connect_guid"),$_smarty_tpl);?>

					</div>
				</div>

			</fieldset>

			<div class="heading input_submit_container" style="text-align: center;">
				<input type="submit" name="connectprefs" value="Change preferences" />
			</div>
		</form>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['connect_server_mode']=="y"){?>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Connections received")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Connections received"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<h2>Recent connections</h2>
			<form class="admin" name="cserver_form" action="tiki-admin.php?page=connect" method="post">
				<input name="cserver_search" type="text" value="<?php echo $_smarty_tpl->tpl_vars['cserver_search_text']->value;?>
" />
				<input name="cserver" type="submit" value="Search" />
				<?php echo smarty_function_button(array('cserver'=>"rebuild",'_auto_args'=>"cserver,page",'_text'=>"Rebuild Index",'_title'=>"Rebuild received connections index"),$_smarty_tpl);?>

				<?php if (!empty($_smarty_tpl->tpl_vars['connect_stats']->value)){?>
					<span><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids'])); $_block_repeat=true; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<strong>Server stats:</strong> %0 reports received from %1 Tikis<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>$_smarty_tpl->tpl_vars['connect_stats']->value['received'],'_1'=>$_smarty_tpl->tpl_vars['connect_stats']->value['guids']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
				<?php }?>
			</form>

			<table class="normal">
				<tr>
					<th>Created</th>
					<th>Title</th>
					<th>Language</th>
					<th>Keywords</th>
				</tr>
				<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['connection'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['name'] = 'connection';
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['connect_recent']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['connection']['total']);
?>
					<tr class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
						<td>
							<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['created'];?>

						</td>
						<td class="text">
							<a class="<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['class'];?>
" <?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['metadata'];?>
 href="<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['url'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['language'];?>

						</td>
						<td>
							<?php echo $_smarty_tpl->tpl_vars['connect_recent']->value[$_smarty_tpl->getVariable('smarty')->value['section']['connection']['index']]['keywords'];?>

						</td>
					</tr>
				<?php endfor; else: ?>
					<?php echo smarty_function_norecords(array('_colspan'=>4),$_smarty_tpl);?>

				<?php endif; ?>
			</table>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Connections received"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>