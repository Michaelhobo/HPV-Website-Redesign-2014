<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 19:57:35
         compiled from "/var/www/html/Website/wiki/templates/mail/user_creation_validation_mail_subject.tpl" */ ?>
<?php /*%%SmartyHeaderCode:147918147653057d2fbbb8f4-50292244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '577f3215fdb0753e56a9abb2ce26a69242447b1f' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/mail/user_creation_validation_mail_subject.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147918147653057d2fbbb8f4-50292244',
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
  'unifunc' => 'content_53057d2fbdc106_48608479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53057d2fbdc106_48608479')) {function content_53057d2fbdc106_48608479($_smarty_tpl) {?>Your personal access to <?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>

<?php }} ?>