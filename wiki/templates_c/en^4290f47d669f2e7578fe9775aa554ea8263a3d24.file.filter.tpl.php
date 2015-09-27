<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:49
         compiled from "/var/www/html/wordpress/tiki/templates/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192399046252558789ba3fd3-11127510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4290f47d669f2e7578fe9775aa554ea8263a3d24' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/filter.tpl',
      1 => 1365179707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192399046252558789ba3fd3-11127510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_action' => 0,
    'filter_content' => 0,
    'prefs' => 0,
    'sort_modes' => 0,
    'k' => 0,
    'sort_mode' => 0,
    't' => 0,
    'filter_types' => 0,
    'filter_type' => 0,
    'tiki_p_view_category' => 0,
    'filter_categories' => 0,
    'filter_deep' => 0,
    'filter_category_picker' => 0,
    'tiki_p_view_freetags' => 0,
    'filter_tags' => 0,
    'filter_tags_picker' => 0,
    'filter_languages' => 0,
    'l' => 0,
    'filter_language' => 0,
    'filter_language_unspecified' => 0,
    'filter_categmap' => 0,
    'filter_tagmap' => 0,
    'sort_found' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558789d5c2f4_81320651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558789d5c2f4_81320651')) {function content_52558789d5c2f4_81320651($_smarty_tpl) {?><?php if (!is_callable('smarty_block_add_help')) include 'lib/smarty_tiki/block.add_help.php';
if (!is_callable('smarty_function_icon')) include 'lib/smarty_tiki/function.icon.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?>
<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="filter">
	<label>
		Content
		<input type="text" name="filter~content" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_content']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('add_help', array('show'=>'y','title'=>"Search Help",'id'=>"unified_search_help")); $_block_repeat=true; echo smarty_block_add_help(array('show'=>'y','title'=>"Search Help",'id'=>"unified_search_help"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			<?php echo $_smarty_tpl->getSubTemplate ('unified_search_help.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_add_help(array('show'=>'y','title'=>"Search Help",'id'=>"unified_search_help"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</label>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order']=='y'){?>
		<label>
			Sort By
			<select name="sort_mode" class="sort_mode">
				<?php $_smarty_tpl->tpl_vars['sort_found'] = new Smarty_variable(false, null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sort_modes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['sort_mode']->value){?> selected="selected"<?php $_smarty_tpl->tpl_vars['sort_found'] = new Smarty_variable(true, null, 0);?><?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php } ?>
			</select>
		</label>
		<?php if (preg_match('/desc$/',$_smarty_tpl->tpl_vars['sort_mode']->value)){?>
			<?php echo smarty_function_icon(array('_id'=>'arrow_up','width'=>'16','height'=>'16','class'=>'icon sort_invert','title'=>'Sort direction','href'=>'#'),$_smarty_tpl);?>

		<?php }else{ ?>
			<?php echo smarty_function_icon(array('_id'=>'arrow_down','width'=>'16','height'=>'16','class'=>'icon sort_invert','title'=>'Sort direction','href'=>'#'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<input type="hidden" name="sort_mode" value="<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
">
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_show_object_filter']=='y'){?>
		<label>
			Type
			<select name="filter~type">
				<option value="">Any</option>
				<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['filter_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['t']->key;
?>
					<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['t']->value==$_smarty_tpl->tpl_vars['filter_type']->value){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
				<?php } ?>
			</select>
		</label>
	<?php }else{ ?>
		<?php if (is_array($_smarty_tpl->tpl_vars['filter_type']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value){
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<input type="hidden" name="filter~type[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value, ENT_QUOTES, 'UTF-8', true);?>
">
			<?php } ?>
		<?php }else{ ?>
			<input type="hidden" name="filter~type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_type']->value, ENT_QUOTES, 'UTF-8', true);?>
">
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_category']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['search_show_category_filter']=='y'){?>
		<fieldset>
			<legend>Categories</legend>

			<a class="category-lookup" href="#">Lookup</a>
			
			<input type="text" name="filter~categories" class="category-wizard" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_categories']->value, ENT_QUOTES, 'UTF-8', true);?>
">

			<label>
				<input type="checkbox" name="filter~deep"<?php if ($_smarty_tpl->tpl_vars['filter_deep']->value){?> checked="checked"<?php }?>>
				Deep search
			</label>
		</fieldset>

		<div class="category-picker" title="Select Categories" style="display:none;">
			<?php echo $_smarty_tpl->tpl_vars['filter_category_picker']->value;?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_view_freetags']->value=='y'&&$_smarty_tpl->tpl_vars['prefs']->value['search_show_tag_filter']=='y'){?>
		<fieldset>
			<legend>Tags</legend>

			<input type="text" name="filter~tags" class="tag-wizard" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_tags']->value, ENT_QUOTES, 'UTF-8', true);?>
">

			<a class="tag-lookup" href="#">Lookup</a>
		</fieldset>

		<div class="tag-picker" title="Select Tags" style="display:none;">
			<?php echo $_smarty_tpl->tpl_vars['filter_tags_picker']->value;?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_multilingual']=='y'){?>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_default_interface_language']!='y'){?>
			<fieldset>
				<legend>Language</legend>
				<select name="filter~language">
					<option value="">Any</option>
					<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
						<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['filter_language']->value==$_smarty_tpl->tpl_vars['l']->value['value']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['l']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
					<?php } ?>
				</select>
				<label>
					<input type="checkbox" name="filter~language_unspecified"<?php if ($_smarty_tpl->tpl_vars['filter_language_unspecified']->value){?> checked="checked"<?php }?>>
					Include objects without a specified language
				</label>
			</fieldset>
		<?php }else{ ?>
			<input type="hidden" name="filter~language" value="<?php echo $_smarty_tpl->tpl_vars['prefs']->value['language'];?>
">
			<input type="hidden" name="filter~language_unspecified" value="1">
		<?php }?>
	<?php }?>
	<input type="submit" value="Search">
</form>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	$('.filter:not(.init)').addClass('init').each(function () {

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_categories']=='y'){?>
		var categoryInput = $('.category-wizard', this).fancy_filter('init', {
			map: <?php echo $_smarty_tpl->tpl_vars['filter_categmap']->value;?>

		});

		var categoryPicker = $('.category-picker', this).dialog({
			height: $(window).height()-200,
			width: 'auto',
			autoOpen: false,
			modal: true,
			buttons: {
				"Add to filter": function () {
					$(':checked', this).each(function () {
						categoryInput.fancy_filter('add', {
							token: $(this).val(),
							label: $(this).parent().text(),
							join: ' or '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.category-lookup', this).click(function () {
			categoryPicker.dialog('open');
			return false;
		});
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_freetags']=='y'){?>
		var tagInput = $('.tag-wizard', this).fancy_filter('init', {
			map: <?php echo $_smarty_tpl->tpl_vars['filter_tagmap']->value;?>

		});

		$('.tag-picker a', this).click(function () {
			$(this).toggleClass('highlight');

			return false;
		});
		var tagPicker = $('.tag-picker', this).dialog({
			autoOpen: false,
			modal: true,
			buttons: {
				"Add to filter": function () {
					$('.highlight', this).each(function () {
						tagInput.fancy_filter('add', {
							token: $(this).attr('href'),
							label: $(this).text(),
							join: ' and '
						});
					});
					$(this).dialog('close');
				},
				"Cancel": function () {
					$(this).dialog('close');
				}
			},
			close: function () {
				$(':checked', this).prop('checked', false);
			}
		});

		$('.tag-lookup', this).click(function () {
			tagPicker.dialog('open');
			return false;
		});
<?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['search_show_sort_order']=='y'){?>
		var $invert = $(".sort_invert", this);
		var $sort_mode = $(".sort_mode", this);
<?php if (!$_smarty_tpl->tpl_vars['sort_found']->value){?>
		var opts = $sort_mode.prop("options");
		for (var o = 0; o < opts.length; o++) {	// sort_mode not in intially rendered list, so try and find the opposite direction
			var tofind = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
			tofind = tofind.replace(/(:?asc|desc)$/, "");
			if (opts[o].value.search(tofind) === 0) {
				opts[o].value = "<?php echo $_smarty_tpl->tpl_vars['sort_mode']->value;?>
";
				$sort_mode.prop("selectedIndex", o);
				if (typeof $sort_mode.selectmenu == "function") {
					$sort_mode.selectmenu();	// seems to need a prod
				}
				break;
			}
		}
<?php }?>

		$sort_mode.change(function () {		// update direction arrow
			if ($(this).val().search(/desc$/) > -1) {
				$invert.attr("src", $invert.attr("src").replace("down", "up"));
			} else {
				$invert.attr("src", $invert.attr("src").replace("up", "down"));
			}
		}).trigger("change");
		$invert.parent().click(function () {	// change the value of the option to opposite direction
			var v = $sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value;
			if (v.search(/desc$/) > -1) {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/desc$/, "asc");
				$invert.attr("src", $invert.attr("src").replace("up", "down"));
			} else {
				$sort_mode.prop("options")[$sort_mode.prop("selectedIndex")].value = v.replace(/asc$/, "desc");
				$invert.attr("src", $invert.attr("src").replace("down", "up"));
			}
			return false;
		});
<?php }?>

	});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>