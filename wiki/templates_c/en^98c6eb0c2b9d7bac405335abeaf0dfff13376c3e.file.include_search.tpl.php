<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:35:08
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1331014617525593ccb54d18-18328555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c6eb0c2b9d7bac405335abeaf0dfff13376c3e' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_search.tpl',
      1 => 1373536468,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1331014617525593ccb54d18-18328555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'stat' => 0,
    'what' => 0,
    'nb' => 0,
    'queue_count' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525593cce5c1b6_70445392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525593cce5c1b6_70445392')) {function content_525593cce5c1b6_70445392($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_help')) include 'lib/smarty_tiki/function.help.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_modifier_tiki_long_datetime')) include 'lib/smarty_tiki/modifier.tiki_long_datetime.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_stats']=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Search stats can be seen on page <a class='rbox-link' target='tikihelp' href='tiki-search_stats.php'>Search stats</a> in Admin menu
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_file_galleries']=='y'){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		Also see the Search Indexing tab here: <a class='rbox-link' target='tikihelp' href='tiki-admin.php?page=fgal'>File Gallery admin panel</a>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>


<form action="tiki-admin.php?page=search" method="post">
	<input type="hidden" name="searchprefs" />
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" value="Change preferences" />
	</div>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'admin_search')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'admin_search'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"General Settings")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"General Settings"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		
			<fieldset>
				<legend>
					Basic Search <?php echo smarty_function_help(array('url'=>"Search"),$_smarty_tpl);?>

				</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_search_fulltext'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_search_fulltext_childcontainer">				
					<?php echo smarty_function_preference(array('name'=>'feature_referer_highlight'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_obj'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_search_show_forbidden_cat'),$_smarty_tpl);?>

				</div>
			</fieldset>
		
			<fieldset>
				<legend>
					Advanced Search
				</legend>

				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild']){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('_icon'=>'info','title'=>"Last rebuild")); $_block_repeat=true; echo smarty_block_remarksbox(array('_icon'=>'info','title'=>"Last rebuild"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						<p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild']))); $_block_repeat=true; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild'])), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Your index was last fully rebuilt on %0.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array('_0'=>smarty_modifier_tiki_long_datetime($_smarty_tpl->tpl_vars['prefs']->value['unified_last_rebuild'])), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('_icon'=>'info','title'=>"Last rebuild"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>

				<?php echo smarty_function_preference(array('name'=>'feature_search','visible'=>"always"),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_search_childcontainer">				
					<?php echo smarty_function_preference(array('name'=>'feature_search_stats'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'user_in_search_result'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>"unified_incremental_update"),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>"allocate_memory_unified_rebuild"),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>"allocate_time_unified_rebuild"),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>"unified_engine"),$_smarty_tpl);?>

					<div class="adminoptionboxchild unified_engine_childcontainer lucene">
						<?php echo smarty_function_preference(array('name'=>"unified_lucene_highlight"),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>'unified_parse_results'),$_smarty_tpl);?>

						<?php echo smarty_function_preference(array('name'=>"unified_lucene_default_operator"),$_smarty_tpl);?>


						<fieldset>
							<legend>Search Engine Settings</legend>
							<?php echo smarty_function_preference(array('name'=>"unified_lucene_location"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_result"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_resultset_limit"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_terms_limit"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_buffered_docs"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_max_merge_docs"),$_smarty_tpl);?>

							<?php echo smarty_function_preference(array('name'=>"unified_lucene_merge_factor"),$_smarty_tpl);?>

						</fieldset>
					</div>

					<?php echo smarty_function_preference(array('name'=>'unified_excluded_categories'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_excluded_plugins'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_forum_deepindexing'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_tokenize_version_numbers'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_field_weight'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_default_content'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'unified_user_cache'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_cached_formatters'),$_smarty_tpl);?>


					<?php echo smarty_function_preference(array('name'=>'unified_trackerfield_keys'),$_smarty_tpl);?>


					<h4>Index maintenance</h4>
					<ul>
						<li><a href="tiki-admin.php?page=search&amp;optimize=now">Optimize</a> From the command line: <kbd>php console.php index:optimize</kbd></li>
						<li>
							<a href="tiki-admin.php?page=search&amp;rebuild=now" id="rebuild-link">Rebuild Index</a> From the command line: <kbd> php console.php index:rebuild</kbd><br>
							<label for="log-rebuild">Log rebuild?</label>
							<input type="checkbox" id="log-rebuild" />
							<span class="description">Log file is saved as temp/Search_Indexer.log</span> <br> From the command line: <kbd>php console.php index:rebuild --log</kbd><br>
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#log-rebuild").click(function(){
	if ($(this).prop("checked")) {
		$("#rebuild-link").attr("href", $("#rebuild-link").attr("href") + "&loggit");
	} else {
		$("#rebuild-link").attr("href", $("#rebuild-link").attr("href").replace("&loggit",""));
	}
});
							<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php if (!empty($_smarty_tpl->tpl_vars['stat']->value)){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'feedback','title'=>"Indexation")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Indexation"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

									<ul>
										<?php  $_smarty_tpl->tpl_vars['nb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nb']->_loop = false;
 $_smarty_tpl->tpl_vars['what'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nb']->key => $_smarty_tpl->tpl_vars['nb']->value){
$_smarty_tpl->tpl_vars['nb']->_loop = true;
 $_smarty_tpl->tpl_vars['what']->value = $_smarty_tpl->tpl_vars['nb']->key;
?>
											<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['what']->value, ENT_QUOTES, 'UTF-8', true);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nb']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
										<?php } ?>
									</ul>
								<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'feedback','title'=>"Indexation"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

							<?php }?>
						</li>
					</ul>
					<?php if ($_smarty_tpl->tpl_vars['queue_count']->value>0){?>
						<h5>Queue size: <?php echo $_smarty_tpl->tpl_vars['queue_count']->value;?>
</h5>
						Process:
						<ul>
							<?php if ($_smarty_tpl->tpl_vars['queue_count']->value>10){?>
								<li><a  href="tiki-admin.php?page=search&amp;process=10">10</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['queue_count']->value>20){?>
								<li><a  href="tiki-admin.php?page=search&amp;process=20">20</a></li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['queue_count']->value>0&&!empty($_REQUEST['process'])&&$_REQUEST['process']=='all'&&$_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=="y"){?>
								<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 setTimeout(function() { history.go(0); }, 1000); <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

								<li><strong><a  href="tiki-admin.php?page=search&amp;process=">Stop</a></strong></li>
							<?php }else{ ?>
								<li><em><a  href="tiki-admin.php?page=search&amp;process=all">All</a></em> <br><span class="description">Uses JavaScript to reload this page until queue is processed</span></li>
							<?php }?>
						</ul>
					<?php }?>
				</div>
			</fieldset>

			<fieldset>
				<legend>Features</legend>
				<?php echo smarty_function_preference(array('name'=>'search_autocomplete'),$_smarty_tpl);?>

			</fieldset>

			<fieldset>
				<legend>Forum searches</legend>
				<?php echo smarty_function_preference(array('name'=>'feature_forums_name_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forums_search'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'feature_forum_content_search'),$_smarty_tpl);?>

				<div class="adminoptionboxchild" id="feature_forum_content_search_childcontainer">
					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_tiki_search'),$_smarty_tpl);?>

					<?php echo smarty_function_preference(array('name'=>'feature_forum_local_search'),$_smarty_tpl);?>

				</div>
			</fieldset>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"General Settings"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


		<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Search Results")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Search Results"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Select the items to display on the search results page:
			<?php echo smarty_function_preference(array('name'=>'search_default_interface_language'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_default_where'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_show_category_filter'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_show_tag_filter'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_object_filter'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_show_sort_order'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_search_box'),$_smarty_tpl);?>

			Select the information to display for each result:
			<?php echo smarty_function_preference(array('name'=>'feature_search_show_visit_count'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_pertinence'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_object_type'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'feature_search_show_last_modification'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'search_parsed_snippet'),$_smarty_tpl);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Search Results"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'admin_search'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" value="Change preferences" />
	</div>
</form>
<?php }} ?>