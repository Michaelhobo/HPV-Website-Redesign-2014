<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:58:27
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_maps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68421724852558b33c58d49-56046594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81696e722a87c827d86cf012c5de75f44c7a894' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_maps.tpl',
      1 => 1339006319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68421724852558b33c58d49-56046594',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'map_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558b33d0de48_03027786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558b33d0de48_03027786')) {function content_52558b33d0de48_03027786($_smarty_tpl) {?><?php if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
?><form action="tiki-admin.php?page=maps" method="post">
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" name="mapsset" value="Change preferences" />
	</div>
	<fieldset class="admin">
		<legend>Settings</legend>

		<?php echo smarty_function_preference(array('name'=>'geo_tilesets'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'geo_google_streetview'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="geo_google_streetview_childcontainer">
			<?php echo smarty_function_preference(array('name'=>'geo_google_streetview_overlay'),$_smarty_tpl);?>

		</div>

		<?php echo smarty_function_preference(array('name'=>'geo_locate_blogpost'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'geo_locate_wiki'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'geo_locate_article'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'wikiplugin_map'),$_smarty_tpl);?>

		<?php echo smarty_function_preference(array('name'=>'trackerfield_location'),$_smarty_tpl);?>


		<?php echo smarty_function_preference(array('name'=>'geo_always_load_openlayers'),$_smarty_tpl);?>


		<?php echo smarty_function_preference(array('name'=>'gmap_key'),$_smarty_tpl);?>

	</fieldset>
	
	<fieldset class="admin">			
		<legend>MapServer settings</legend>
		
		<?php echo smarty_function_preference(array('name'=>'feature_maps'),$_smarty_tpl);?>

		<div class="adminoptionboxchild" id="feature_maps_childcontainer">
			<?php if ($_smarty_tpl->tpl_vars['map_error']->value!=''){?>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'warning','title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['map_error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'warning','title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
			<?php echo smarty_function_preference(array('name'=>'map_path'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'default_map'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'map_help'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'map_comments'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'gdaltindex'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'ogr2ogr'),$_smarty_tpl);?>

			<?php echo smarty_function_preference(array('name'=>'mapzone'),$_smarty_tpl);?>

		</div>			
		
		<div class="heading input_submit_container" style="text-align: center">
			<input type="submit" name="mapsset" value="Change preferences" />
			<input type="submit" name="mapuser" value="Generate User Map" />
		</div>
	</fieldset>
</form>
<?php }} ?>