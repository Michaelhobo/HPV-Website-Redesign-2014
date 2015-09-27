<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:57:36
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_gmap.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57760675052558b00e1b5b7-56667176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b65993419debeaeb3e831dc13aa31330a67c373b' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_gmap.tpl',
      1 => 1314642253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57760675052558b00e1b5b7-56667176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'show_map' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558b00ee2dc6_52203108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558b00ee2dc6_52203108')) {function content_52558b00ee2dc6_52203108($_smarty_tpl) {?><?php if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

To use Google Maps, you must generate a Google Maps API Key for your web site. See <a href="http://code.google.com/intl/fr/apis/maps/signup.html">http://code.google.com/intl/fr/apis/maps/signup.html</a> for details.
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>



<form action="tiki-admin.php?page=gmap" method="post">
	<input type="hidden" name="gmapsetup" value="" />
	<div class="heading input_submit_container" style="text-align: right">
		<input type="submit" value="Change preferences" />
	</div>
	
<fieldset class="admin">
	<legend>Activate the feature</legend>
	<?php echo smarty_function_preference(array('name'=>'feature_gmap','visible'=>"always"),$_smarty_tpl);?>

</fieldset>	

	<fieldset class="admin">
		<legend>Settings</legend>
		<div class="adminoptionbox">
			<div class="adminoptionlabel">
				<?php echo smarty_function_preference(array('name'=>'gmap_key'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'wikiplugin_googlemap'),$_smarty_tpl);?>

			</div>
		</div>
		<fieldset>
			<legend>Defaults</legend>
				<?php echo smarty_function_preference(array('name'=>'gmap_defaultx'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gmap_defaulty'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gmap_defaultz'),$_smarty_tpl);?>

		</fieldset>	
		<fieldset>
			<legend>Map mode in listings</legend>
				<?php echo smarty_function_preference(array('name'=>'gmap_article_list'),$_smarty_tpl);?>

				<?php echo smarty_function_preference(array('name'=>'gmap_page_list'),$_smarty_tpl);?>

		</fieldset>	
	</fieldset>	
	<div class="heading input_submit_container" style="text-align: center">
		<input type="submit" value="Change preferences" />
	</div>
</form>

<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_gmap']=='y'&&$_smarty_tpl->tpl_vars['show_map']->value=='y'){?>
<div class="wikitext">
	<div id="map" style="width: 500px; height: 400px;border: 1px solid #000;"></div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function load() {
  var map = new GMap2(document.getElementById("map"));
  map.addControl(new GLargeMapControl());
  map.addControl(new GMapTypeControl());
  map.setCenter(new GLatLng(<?php echo $_smarty_tpl->tpl_vars['prefs']->value['gmap_defaulty'];?>
, <?php echo $_smarty_tpl->tpl_vars['prefs']->value['gmap_defaultx'];?>
), <?php echo $_smarty_tpl->tpl_vars['prefs']->value['gmap_defaultz'];?>
);

  GEvent.addListener(map, "zoomend", function(gold, gnew) {
    document.getElementsByName('gmap_defaultz')[0].selectedIndex = gnew;
  });

  GEvent.addListener(map, "moveend", function() {
    document.getElementsByName('gmap_defaultx')[0].value = map.getCenter().x;
    document.getElementsByName('gmap_defaulty')[0].value = map.getCenter().y;
  });

}
load();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php }} ?>