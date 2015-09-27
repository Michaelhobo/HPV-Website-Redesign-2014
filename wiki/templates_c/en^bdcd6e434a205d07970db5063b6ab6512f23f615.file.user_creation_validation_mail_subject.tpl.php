<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-31 02:51:35
         compiled from "/var/www/html/wordpress/tiki/templates/mail/user_creation_validation_mail_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536953615271c5b7b0ca47-65585396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdcd6e434a205d07970db5063b6ab6512f23f615' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/mail/user_creation_validation_mail_subject.tpl',
      1 => 1281517084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536953615271c5b7b0ca47-65585396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5271c5b7b258f9_93798651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271c5b7b258f9_93798651')) {function content_5271c5b7b258f9_93798651($_smarty_tpl) {?>Your personal access to <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php }} ?>