<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 19:57:52
         compiled from "/var/www/html/Website/wiki/templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138808935153057d408e7702-32163997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '337611762907c950da76696c28edb9766049f0ea' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/error.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138808935153057d408e7702-32163997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'close_window' => 0,
    'errortype' => 0,
    'prefs' => 0,
    'user' => 0,
    'file_error' => 0,
    'page' => 0,
    'errortitle' => 0,
    'likepages' => 0,
    'tiki_p_search' => 0,
    'filter' => 0,
    'token_error' => 0,
    'msg' => 0,
    'required_preferences' => 0,
    'pref' => 0,
    'extraButton' => 0,
    'create' => 0,
    'tiki_p_admin' => 0,
    'tiki_p_admin_wiki' => 0,
    'tiki_p_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53057d40c388f6_64266235',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53057d40c388f6_64266235')) {function content_53057d40c388f6_64266235($_smarty_tpl) {?><?php if (!is_callable('smarty_block_jq')) include 'lib/smarty_tiki/block.jq.php';
if (!is_callable('smarty_function_redirect')) include 'lib/smarty_tiki/function.redirect.php';
if (!is_callable('smarty_block_remarksbox')) include 'lib/smarty_tiki/block.remarksbox.php';
if (!is_callable('smarty_block_tr')) include 'lib/smarty_tiki/block.tr.php';
if (!is_callable('smarty_function_preference')) include 'lib/smarty_tiki/function.preference.php';
if (!is_callable('smarty_function_button')) include 'lib/smarty_tiki/function.button.php';
?><?php if (isset($_smarty_tpl->tpl_vars['close_window']->value)&&$_smarty_tpl->tpl_vars['close_window']->value=='y'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('jq', array()); $_block_repeat=true; echo smarty_block_jq(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

close();
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_jq(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['errortype']->value)){?><?php $_smarty_tpl->tpl_vars['errortype'] = new Smarty_variable('', null, 0);?><?php }?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'mid_data', null); ob_start(); ?><?php if (($_smarty_tpl->tpl_vars['errortype']->value=="402")){?><?php echo $_smarty_tpl->getSubTemplate ('tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif(($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&!empty($_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url'])&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']!='y'){?><?php echo smarty_function_redirect(array('url'=>$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_url']),$_smarty_tpl);?>
<?php }else{ ?><?php if (($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']=='y'){?><?php $_smarty_tpl->tpl_vars['errortitle'] = new Smarty_variable("Please log in", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['errortitle'] = new Smarty_variable("Error", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['errortype']->value=="404"&&isset($_smarty_tpl->tpl_vars['file_error']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"File error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"File error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['file_error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"File error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }elseif($_smarty_tpl->tpl_vars['errortype']->value=="404"&&isset($_smarty_tpl->tpl_vars['page']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Page not found<br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages']=='y'){?><?php if ($_smarty_tpl->tpl_vars['likepages']->value){?><p>Perhaps you are looking for:</p><ul><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['back'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['back']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['name'] = 'back';
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['likepages']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['back']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['back']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['back']['total']);
?><li><a href="tiki-index.php?page=<?php echo rawurlencode($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']]);?>
" class="wiki"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['likepages']->value[$_smarty_tpl->getVariable('smarty')->value['section']['back']['index']], ENT_QUOTES, 'UTF-8', true);?>
</a></li><?php endfor; endif; ?></ul><?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array()); $_block_repeat=true; echo smarty_block_remarksbox(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array()); $_block_repeat=true; echo smarty_block_tr(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
There are no wiki pages similar to '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true);?>
'<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_tr(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search']=='y'&&$_smarty_tpl->tpl_vars['tiki_p_search']->value=='y'){?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_likePages']!='y'){?><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['feature_search_fulltext']=='y'){?><?php echo $_smarty_tpl->getSubTemplate ('tiki-searchresults.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('searchNoResults'=>"false",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value)), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate ('tiki-searchindex.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('searchNoResults'=>"true",'searchStyle'=>"menu",'searchOrientation'=>"horiz",'words'=>((string)$_smarty_tpl->tpl_vars['page']->value),'filter'=>$_smarty_tpl->tpl_vars['filter']->value), 0);?>
<?php }?><?php }?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['token_error']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>"Token Error")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Token Error"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['token_error']->value;?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>"Token Error"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }elseif(($_smarty_tpl->tpl_vars['errortype']->value==401||$_smarty_tpl->tpl_vars['errortype']->value==403)&&empty($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['prefs']->value['permission_denied_login_box']=='y'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Permission denied<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo $_smarty_tpl->getSubTemplate ('tiki-login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }elseif(!isset($_smarty_tpl->tpl_vars['user']->value)&&$_smarty_tpl->tpl_vars['errortype']->value!='no_redirect_login'&&$_smarty_tpl->tpl_vars['errortype']->value!='login'){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
You are not logged in. <a href="tiki-login_scr.php">Go to Log in Page</a><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php if (!empty($_smarty_tpl->tpl_vars['required_preferences']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'note','title'=>"Change them here")); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'note','title'=>"Change them here"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<form method="post" action="tiki-admin.php"><?php  $_smarty_tpl->tpl_vars['pref'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pref']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['required_preferences']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pref']->key => $_smarty_tpl->tpl_vars['pref']->value){
$_smarty_tpl->tpl_vars['pref']->_loop = true;
?><?php echo smarty_function_preference(array('name'=>$_smarty_tpl->tpl_vars['pref']->value),$_smarty_tpl);?>
<?php } ?><input type="submit" value="Set"></form><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'note','title'=>"Change them here"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php }?><?php if (isset($_smarty_tpl->tpl_vars['extraButton']->value)){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('remarksbox', array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value)); $_block_repeat=true; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo $_smarty_tpl->tpl_vars['extraButton']->value['comment'];?>
<?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['extraButton']->value['href'],'_text'=>$_smarty_tpl->tpl_vars['extraButton']->value['text']),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_remarksbox(array('type'=>'errors','title'=>$_smarty_tpl->tpl_vars['errortitle']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['page']->value)&&$_smarty_tpl->tpl_vars['page']->value&&$_smarty_tpl->tpl_vars['create']->value=='y'&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_admin_wiki']->value=='y'||$_smarty_tpl->tpl_vars['tiki_p_edit']->value=='y')){?><?php echo smarty_function_button(array('href'=>"tiki-editpage.php?page=".((string)$_smarty_tpl->tpl_vars['page']->value),'_text'=>"Create this page"),$_smarty_tpl);?>
 (page will be orphaned)<br><br><?php }?><?php if ($_smarty_tpl->tpl_vars['prefs']->value['javascript_enabled']=='y'){?><?php echo smarty_function_button(array('_onclick'=>"javascript:history.back();return false;",'_text'=>"Go back",'_ajax'=>"n"),$_smarty_tpl);?>
<br><br><?php }?><?php echo smarty_function_button(array('href'=>$_smarty_tpl->tpl_vars['prefs']->value['tikiIndex'],'_text'=>"Return to home page"),$_smarty_tpl);?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php echo $_smarty_tpl->getSubTemplate ('tiki.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>