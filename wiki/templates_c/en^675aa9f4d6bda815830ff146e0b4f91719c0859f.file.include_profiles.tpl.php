<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 17:43:37
         compiled from "/var/www/html/wordpress/tiki/templates/admin/include_profiles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648078865525595c9037bd8-14690157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '675aa9f4d6bda815830ff146e0b4f91719c0859f' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/admin/include_profiles.tpl',
      1 => 1370532444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648078865525595c9037bd8-14690157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profilefeedback' => 0,
    'prefs' => 0,
    'openSources' => 0,
    'profilesFilterUrlStart' => 0,
    'tikiMajorVersion' => 0,
    'profilesFilterUrlMid' => 0,
    'profilesFilterUrlFeaturedProfiles' => 0,
    'profilesFilterUrlEnd' => 0,
    'profilesFilterUrlFullProfiles' => 0,
    'profilesFilterUrlMiniProfiles' => 0,
    'profilesFilterUrlLearningProfiles' => 0,
    'profile' => 0,
    'category_list' => 0,
    'cat' => 0,
    'categories' => 0,
    'sources' => 0,
    'source' => 0,
    'repository' => 0,
    'result' => 0,
    'k' => 0,
    'entry' => 0,
    'export_yaml' => 0,
    'export_type' => 0,
    'modified_list' => 0,
    'data' => 0,
    'name' => 0,
    'current' => 0,
    'prefs_to_export' => 0,
    'default' => 0,
    'modules_for_export' => 0,
    'modules_to_export' => 0,
    'profile_tester_name' => 0,
    'empty_cache' => 0,
    'test_source' => 0,
    'oldSources' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_525595c957efb8_24526548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525595c957efb8_24526548')) {function content_525595c957efb8_24526548($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_function_cycle')) include '/var/www/html/wordpress/tiki/vendor/smarty/smarty/distribution/libs/plugins/function.cycle.php';
if (!is_callable('smarty_block_tabset')) include 'lib/smarty_tiki/block.tabset.php';
if (!is_callable('smarty_block_tab')) include 'lib/smarty_tiki/block.tab.php';
if (!is_callable('smarty_function_listfilter')) include 'lib/smarty_tiki/function.listfilter.php';
if (!is_callable('smarty_modifier_truncate')) include 'lib/smarty_tiki/modifier.truncate.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array('notonready'=>true)); $_block_repeat=true; echo smarty_block_jq(array('notonready'=>true), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var baseURI = '<?php echo $_SERVER['REQUEST_URI'];?>
';

function refreshCache( entry ) { // {{{
	var status = document.getElementById( 'profile-status-' + entry );
	var datespan = document.getElementById( 'profile-date-' + entry );
	var pending = 'img/icons/status_pending.gif';

	if( status.src == pending )
		return;
	
	status.src = pending;

	var req = getHttpRequest( 'POST', baseURI + '&refresh=' + escape(entry), true );
	req.onreadystatechange = function (aEvt) {
		if (req.readyState == 4) {
			if(req.status == 200) {
				var data = eval( "(" + req.responseText + ")" );
				status.src = 'img/icons/status_' + data.status + '.gif';
				datespan.innerHTML = data.lastupdate;
			} else
				alert("Error loading page\n");
		}
	};
	req.send('');
} // }}}

function showDetails( id, domain, profile ) { // {{{
	
	var nid = id + "-sub";
	var infoId = id + "-info";
	var prev = document.getElementById( id );
	var obj = document.getElementById( nid );

	if( obj )
	{
		obj.id = null;
		obj.parentNode.removeChild( obj );
		return;
	}

	var infoOb = document.getElementById( infoId );
	if (!infoOb) {
		infoOb = document.createElement('span');
		infoOb.innerHTML = "";
		infoOb.style.fontStyle = "italic";
		infoOb.id = infoId;
		prev.getElementsByTagName("td")[0].appendChild( infoOb );
	}
	infoOb.innerHTML = " Loading profile...";
	
	var req = getHttpRequest( 'POST', baseURI + '&getinfo&pd=' + escape(domain) + '&pp=' + escape(profile), true );
	req.onreadystatechange = function (aEvt) {
		
		if (infoOb) {
			infoOb.innerHTML = " ";

		}
		if (req.readyState == 4) {
			if(req.status == 200) {
				var data = eval( "(" + req.responseText + ")" );

				var row = document.createElement( 'tr' );
				var cell = document.createElement( 'td' );
				var body = document.createElement( 'div' );
				var ul = document.createElement( 'ul' );

				row.appendChild( cell );
				cell.colSpan = 3;
				
				if( data.installable || data.already ) {
				
					var pStep = document.createElement('p');
					pStep.style.fontWeight = 'bold';
					if( data.installable ) {
						pStep.innerHTML = "Step 3: Click on Apply Now to apply Profile";
					} else if ( data.already ) {
						pStep.innerHTML = "A version of this profile is already applied.";
					}
					
					var form = document.createElement( 'form' );
					var p = document.createElement('p');				
					var submit = document.createElement('input');
					var pd = document.createElement('input');
					var pp = document.createElement('input');
					form.method = 'post';
					form.action = document.location.href;

					var iTable = document.createElement('table');
					iTable.className = 'normal';

					var rowNum = 0;
					for( i in data.userInput ) {
						if( typeof(data.userInput[i]) != 'string' )
							continue;

						var iRow = iTable.insertRow( rowNum++ );
						var iLabel = iRow.insertCell( 0 );
						var iField = iRow.insertCell( 1 );

						iRow.className = 'formcolor';

						iLabel.appendChild( document.createTextNode( i ) );
						var iInput = document.createElement( 'input' );
						iInput.type = 'text';
						iInput.name = i;
						iInput.value = data.userInput[i];

						iField.appendChild( iInput );
					}

					if( rowNum > 0 )
						form.appendChild( iTable );

					form.appendChild(p);

					submit.type = 'submit';
					if( data.installable ) {
						submit.name = 'install';
						submit.value = 'Apply Now';
						form.setAttribute ( "onsubmit", 'return confirm(\"Are you sure you want to apply the profile ' + profile + '?\");' );
					} else if ( data.already ) {
						submit.name = 'forget';
						submit.value = 'Forget and Re-apply';
						form.setAttribute ( "onsubmit", 'return confirm(\"Are you sure you want to re-apply the profile ' + profile + '?\");' );
					}					
					
					p.appendChild(submit);
					pd.type = 'hidden';
					pd.name = 'pd';
					pd.value = domain;
					p.appendChild(pd);
					p.appendChild(pStep);
					pp.type = 'hidden';
					pp.name = 'pp';
					pp.value = profile;
					p.appendChild(pp);

					cell.appendChild(form);
				}
				else if( data.error )
				{
					var p = document.createElement('p');
					p.style.fontWeight = 'bold';
					p.innerHTML = "An error occurred during the profile validation. This profile cannot be applied. Message: " + data.error;
					cell.appendChild(p);
				}
				else
				{
					var p = document.createElement('p');
					p.style.fontWeight = 'bold';
					p.innerHTML = "An error occurred during the profile validation. This profile cannot be applied.";
					cell.appendChild(p);
				}

				if( data.dependencies.length > 1 )
				{
					for( k in data.dependencies )
					{
						if( typeof(data.dependencies[k]) != 'string')
							continue;

						var li = document.createElement( 'li' );
						var a = document.createElement( 'a' );
						a.href = data.dependencies[k];
						a.innerHTML = data.dependencies[k];

						li.appendChild( a );
						ul.appendChild( li );
					}

					var p = document.createElement( 'p' );
					p.innerHTML = 'These profiles will be applied:';
					cell.appendChild( p );
					cell.appendChild( ul );
				}

				body.innerHTML = data.content;
				body.style.height = '200px';
				body.style.overflow = 'auto';
				body.style.borderStyle = 'solid';
				body.style.borderWidth = '2px';
				body.style.borderColor = 'black';
				body.style.padding = '8px';

				cell.appendChild( body );

				row.id = nid;
				prev.parentNode.insertBefore( row, prev.nextSibling );

				if (data.feedback.length) {
					alert("Profile issues: \n" + data.feedback);
				}

			}
		} else {		// readyState not 4 (complete)
			
			switch (req.readyState) {
				case 1: {
					infoOb.innerHTML = " Loading profile...";
					break;
				}
				case 2: {
					infoOb.innerHTML = " Sending...";
					break;
				}
				case 3: {
					infoOb.innerHTML = " Waiting...";
					break;
				}
			}
			
		}
	}
	req.send('');
} // }}}

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array('notonready'=>true), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"tip",'title'=>"Tip")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<a class="rbox-link" href="http://profiles.tiki.org">Tiki Configuration Profiles</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"tip",'title'=>"Tip"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php if (isset($_smarty_tpl->tpl_vars['profilefeedback']->value)){?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"note",'title'=>"Note")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

		The following list of changes has been applied:
		<ul>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['profilefeedback']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
			<li class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
				<p><?php echo $_smarty_tpl->tpl_vars['profilefeedback']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']];?>
</p>
			</li>
		<?php endfor; endif; ?>
		</ul>
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"note",'title'=>"Note"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tabset', array('name'=>'tabs_admin-profiles')); $_block_repeat=true; echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Apply Profiles")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Apply Profiles"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	
		<h3>Configure Tiki in 3 easy steps using Profiles</h3>
		<?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?>
				<?php if ($_smarty_tpl->tpl_vars['openSources']->value=='some'){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"A Friendly Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"A Friendly Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

						Some of your Profiles Repositories are not connecting. This may prevent you from applying certain profiles
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"A Friendly Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
					
				<fieldset><legend>Profiles</legend>
				<form method="get" action="tiki-admin.php">
					<div class="adminoptionbox">
						<b>Step 1: Use the Quick or Manual Filter option to see a list of Configuration Profiles you can apply</b>
						<table class="normal">
							<tr>
								<th width="50%" class="quickmode_notes">Option 1: Quick Filter</th>
	
								<th width="50%">Option 2: Manual Filter</th>
							</tr>
							<tr>
								<td class="quickmode_notes">
									<br/>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlStart'] = new Smarty_variable('tiki-admin.php?profile=&categories%5B%5D=', null, 0);?>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlMid'] = new Smarty_variable('.x&categories%5B%5D=', null, 0);?>
									<?php $_smarty_tpl->tpl_vars['profilesFilterUrlEnd'] = new Smarty_variable('&repository=http%3a%2f%2fprofiles.tiki.org%2fprofiles&page=profiles&preloadlist=y&list=List#step2', null, 0);?>
									
									<p>
										<?php $_smarty_tpl->tpl_vars['profilesFilterUrlFeaturedProfiles'] = new Smarty_variable('Featured+profiles', null, 0);?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlFeaturedProfiles']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
">Featured Profiles</a>
										<br>Featured Profiles is a list of applications that are maintained by the Tiki community and are a great way to get started.
									</p>
									
									<p>
										<?php $_smarty_tpl->tpl_vars['profilesFilterUrlFullProfiles'] = new Smarty_variable('Full+profile+(out+of+the+box+%26+ready+to+go)', null, 0);?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlFullProfiles']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
">Full Profiles</a>
										<br>Full Profiles are full featured out of the box solutions. 
									</p>
		
									<p>
										<?php $_smarty_tpl->tpl_vars['profilesFilterUrlMiniProfiles'] = new Smarty_variable('Mini-profile+(can+be+included+in+other)', null, 0);?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlMiniProfiles']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
">Mini Profiles</a>
										<br>Mini Profiles will configure specific features and are a great way to add more functionality to an existing configuration. 
									</p>
		
									<p>
										<?php $_smarty_tpl->tpl_vars['profilesFilterUrlLearningProfiles'] = new Smarty_variable('Learning+profile+(just+to+show+off+feature)', null, 0);?>
										<a href="<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlStart']->value;?>
<?php echo $_smarty_tpl->tpl_vars['tikiMajorVersion']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlMid']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlLearningProfiles']->value;?>
<?php echo $_smarty_tpl->tpl_vars['profilesFilterUrlEnd']->value;?>
">Learning Profiles</a>
										<br>Learning Profiles will allow you to quickly evaluate specific features in Tiki.
									</p>
		
								</td>
								<td>
									<div class="adminoptionboxchild">
										<div class="adminoptionlabel">Filter the list of profiles:</div>
										<div class="adminoptionlabel">
											<label for="profile">Profile name: </label>
											<input type="text" name="profile" id="profile" value="<?php if (isset($_smarty_tpl->tpl_vars['profile']->value)){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
											<?php if (isset($_smarty_tpl->tpl_vars['category_list']->value)&&count($_smarty_tpl->tpl_vars['category_list']->value)>0){?>
												<div class="adminoptionlabel"><label for="categories">Profile types: </label>
													<select multiple="multiple" name="categories[]" id="categories" style="max-height: 10em">
													<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
														<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (!empty($_smarty_tpl->tpl_vars['categories']->value)&&in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value)){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
													<?php } ?>
													</select>
												</div>
											<?php }?>
		
										<div class="adminoptionlabel"><label for="repository">Repository: </label>
											<select name="repository" id="repository">
												<option value="">All</option>
												<?php  $_smarty_tpl->tpl_vars['source'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source']->key => $_smarty_tpl->tpl_vars['source']->value){
$_smarty_tpl->tpl_vars['source']->_loop = true;
?>
													<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['repository']->value)&&$_smarty_tpl->tpl_vars['repository']->value==$_smarty_tpl->tpl_vars['source']->value['url']){?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['source']->value['short'], ENT_QUOTES, 'UTF-8', true);?>
</option>
												<?php } ?>
											</select>
										</div>
										<input type="hidden" name="page" value="profiles"/>
										<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

if ($("#profile-0").length > 0) {
	$(".quickmode_notes").hide();
	$(window).scrollTop($("a[name=step2]").offset().top);
} else {
	$(".quickmode_notes").show();
}
$("#repository, #categories").change(function(){
	if ($(this).val()) {
		$(".quickmode_notes").hide(400);
	} else {
		$(".quickmode_notes").show(400);
	}
});
										<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

									</div>
								<div align="center"><input type="submit" name="list" value="List" /></div>
							</td>
						</tr>
					</table>
				</div>
		</form>
	        <a name="step2"></a>
	<br>	
		
	       <?php if (isset($_smarty_tpl->tpl_vars['result']->value)&&count($_smarty_tpl->tpl_vars['result']->value)!='0'){?>
	
	        <b>Step 2: Click on a Configuration Profile Name below to review it and to be able to apply it on your Web site</b>
			<table class="normal">
				<tr>
					<th>Profile Name</th>
					<th>Repository</th>
					<th>Profile type</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value){
$_smarty_tpl->tpl_vars['profile']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['profile']->key;
?>
					<tr id="profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
						<td><a href="javascript:showDetails( 'profile-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['domain'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
' )"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['profile']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a><?php if ($_smarty_tpl->tpl_vars['profile']->value['installed']){?> <em>applied</em><?php }?></td>
						<td><?php echo $_smarty_tpl->tpl_vars['profile']->value['domain'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['profile']->value['categoriesString'];?>
</td>
					</tr>
				<?php } ?>
				<?php if (count($_smarty_tpl->tpl_vars['result']->value)=='0'){?>
				<tr><td colspan="3" class="odd">None</td></tr>
				<?php }?>
			</table>
			<?php }?>
	
	</fieldset>




<fieldset class="admin">
<legend>Status</legend>
<div class="adminoptionbox">
	<table class="normal">
		<tr>
			<th>Profile repository</th>
			<th>Status</th>
			<th>Last update</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['entry']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['entry']->value['short'];?>
</td>
				<td><img id="profile-status-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" alt="Status" src="img/icons/status_<?php echo $_smarty_tpl->tpl_vars['entry']->value['status'];?>
.gif"></td>
				<td><span id="profile-date-<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['entry']->value['formatted'];?>
</span> <a href="javascript:refreshCache(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)" class="icon"><img src="img/icons/arrow_refresh.png" class="icon" alt="Refresh"></a></td>
			</tr>
		<?php } ?>
	</table>
</div>
</fieldset>
<?php }else{ ?>
	<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"A Friendly Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"A Friendly Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

		JavaScript must be turned <strong>ON</strong> in order to apply Profiles. Please enable your JavaScript and try again.
	<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"A Friendly Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Apply Profiles"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Export")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Export"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<form action="tiki-admin.php?page=profiles" method="post">
		<fieldset id="export_to_yaml">
			<legend>Export YAML</legend>
			<?php if (!empty($_smarty_tpl->tpl_vars['export_yaml']->value)){?>
				<div class="wikitext"><?php echo $_smarty_tpl->tpl_vars['export_yaml']->value;?>
</div>
			<?php }?>
			<div class="navbar">
				<label for="export_type">Object type:</label>
				<select name="export_type" id="export_type">
					<option value="prefs"<?php if ($_smarty_tpl->tpl_vars['export_type']->value=="prefs"){?> selected="selected"<?php }?>>
						Preferences
					</option>
					<option value="modules"<?php if ($_smarty_tpl->tpl_vars['export_type']->value=="modules"){?> selected="selected"<?php }?>>
						Modules
					</option>
				</select>
			</div>
			<fieldset>
				<legend>Export modified preferences as YAML</legend>
				<div class="navbar">
					<?php echo smarty_function_listfilter(array('selectors'=>".profile_export_list > li"),$_smarty_tpl);?>

					<label for="select_all_prefs_to_export">Toggle Visible</label>
					<input type="checkbox" id="select_all_prefs_to_export" />
					<label for="export_show_added">Show added preferences</label>
					<input type="checkbox" name="export_show_added" id="export_show_added"
							<?php if (!empty($_REQUEST['export_show_added'])){?> checked="checked"<?php }?> />
				</div>
				<ul id="prefs_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value!="prefs"){?> style=display:none;"<?php }?>>
					<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modified_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
						<li class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
							<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['current']['expanded'])){?>
								<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['data']->value['current']['expanded'],", "), null, 0);?>
								<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable("[".((string)$_smarty_tpl->tpl_vars['current']->value)."]", null, 0);?>
							<?php }else{ ?>
								<?php $_smarty_tpl->tpl_vars['current'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['current']['expanded'], null, 0);?>
							<?php }?>
							<input type="checkbox" name="prefs_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
"
									 id="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['prefs_to_export']->value[$_smarty_tpl->tpl_vars['name']->value])){?> checked="checked"<?php }?> />
							<label for="checkbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
								<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 = '<strong><?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['current']->value,40,"...",true), ENT_QUOTES, 'UTF-8', true);?>
</strong>'
								<em>
									&nbsp;&nbsp;
									<?php if (isset($_smarty_tpl->tpl_vars['data']->value['default'])){?>
										<?php if (empty($_smarty_tpl->tpl_vars['data']->value['default'])){?>
											('')
										<?php }else{ ?>
											<?php if (is_array($_smarty_tpl->tpl_vars['data']->value['default'])){?><?php $_smarty_tpl->tpl_vars['default'] = new Smarty_variable(implode($_smarty_tpl->tpl_vars['data']->value['default'],", "), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['default'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value['default'], null, 0);?><?php }?>
											('<?php echo htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['default']->value,20,"...",true), ENT_QUOTES, 'UTF-8', true);?>
')
										<?php }?>
									<?php }else{ ?>
										(no default)
									<?php }?>
								</em>
							</label>
						</li>
					<?php } ?>
				</ul>
				<ul id="modules_to_export_list" class="profile_export_list"<?php if ($_smarty_tpl->tpl_vars['export_type']->value!="modules"){?> style=display:none;"<?php }?>>
					<?php echo smarty_function_cycle(array('values'=>"odd,even",'print'=>false),$_smarty_tpl);?>

					<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules_for_export']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["data"]->key;
?>
						<li class="<?php echo smarty_function_cycle(array(),$_smarty_tpl);?>
">
							<input type="checkbox" name="modules_to_export[<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"
								   id="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['modules_to_export']->value[$_smarty_tpl->tpl_vars['name']->value])){?> checked="checked"<?php }?> />
							<label for="modcheckbox_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
								<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['data']['name'], ENT_QUOTES, 'UTF-8', true);?>
 :
								<em>
									&nbsp;&nbsp;
									<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['position'];?>

									<?php echo $_smarty_tpl->tpl_vars['data']->value['data']['order'];?>

								</em>
							</label>
						</li>
					<?php } ?>
				</ul>
				<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$("#select_all_prefs_to_export").click( function () {
	$("input[name^=prefs_to_export]:visible,input[name^=modules_to_export]:visible").click();
});
$("#export_show_added").click( function () {
	$(this)[0].form.submit();
});
$("#export_type").change(function(){
	$(".profile_export_list").hide();
	$("#" + $(this).val() + "_to_export_list").show();
});
				<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<div class="input_submit_container">
					<input type="submit" name="export" value="Export" />
				</div>
			</fieldset>
		</fieldset>
	</form>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Export"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('tab', array('name'=>"Advanced")); $_block_repeat=true; echo smarty_block_tab(array('name'=>"Advanced"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<fieldset><legend>Repositories</legend>
<form action="tiki-admin.php?page=profiles" method="post">
	<?php echo smarty_function_preference(array('name'=>'profile_unapproved'),$_smarty_tpl);?>

	<?php echo smarty_function_preference(array('name'=>'profile_sources'),$_smarty_tpl);?>

	<?php echo smarty_function_preference(array('name'=>'profile_channels'),$_smarty_tpl);?>


	<div align="center" style="padding:1em;"><input type="submit" name="config" value="Save" /></div>
</form>
</fieldset>


	<fieldset><legend>Profile tester</legend>
		<form action="tiki-admin.php?page=profiles" method="post">
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>"warning",'title'=>"Warning")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			Paste or type wiki markup and YAML (with or without the {CODE} tags) into the text area below<br>
			<em><strong>This will run the profile and make potentially unrecoverable changes in your database!</strong></em>
			<div class="adminoptionbox">
				<div class="adminoptionlabel">
					<label for="profile_tester_name">Test Profile Name: </label>
					<input type="text" name="profile_tester_name" id="profile_tester_name" value="<?php if (isset($_smarty_tpl->tpl_vars['profile_tester_name']->value)){?><?php echo $_smarty_tpl->tpl_vars['profile_tester_name']->value;?>
<?php }else{ ?>Test<?php }?>" />
					<select name="empty_cache">
						<option value=""<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value==''){?> checked="checked"<?php }?>>None</option>
						<option value="all"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='all'){?> checked="checked"<?php }?>>All</option>
						<option value="templates_c"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='templates_c'){?> checked="checked"<?php }?>>templates_c</option>
						<option value="temp_cache"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='temp_cache'){?> checked="checked"<?php }?>>temp_cache</option>
						<option value="temp_public"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='temp_public'){?> checked="checked"<?php }?>>temp_public</option>
						<option value="modules_cache"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='modules_cache'){?> checked="checked"<?php }?>>modules_cache</option>
						<option value="prefs"<?php if (isset($_smarty_tpl->tpl_vars['empty_cache']->value)&&$_smarty_tpl->tpl_vars['empty_cache']->value=='prefs'){?> checked="checked"<?php }?>>prefs</option>
					</select><?php echo $_smarty_tpl->tpl_vars['empty_cache']->value;?>

				</div>
				<div>
					<textarea data-codemirror="true" data-syntax="yaml" id="profile_tester" name="profile_tester" rows="5" cols="40" style="width:95%;"><?php if (isset($_smarty_tpl->tpl_vars['test_source']->value)){?><?php echo $_smarty_tpl->tpl_vars['test_source']->value;?>
<?php }?></textarea>
				</div>
			</div>
			<div align="center" style="padding:1em;"><input type="submit" name="test" value="Test" /></div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>"warning",'title'=>"Warning"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</form>
	</fieldset>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tab(array('name'=>"Advanced"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tabset(array('name'=>'tabs_admin-profiles'), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php  $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['k']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['oldSources']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['k']->key => $_smarty_tpl->tpl_vars['k']->value){
$_smarty_tpl->tpl_vars['k']->_loop = true;
?>
	refreshCache(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
);
<?php } ?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>