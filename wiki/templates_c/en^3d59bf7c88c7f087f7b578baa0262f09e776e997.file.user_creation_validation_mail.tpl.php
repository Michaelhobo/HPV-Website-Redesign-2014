<?php /* Smarty version Smarty-3.1-DEV, created on 2014-02-19 19:57:35
         compiled from "/var/www/html/Website/wiki/templates/mail/user_creation_validation_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89309398753057d2f9dbda9-74397801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d59bf7c88c7f087f7b578baa0262f09e776e997' => 
    array (
      0 => '/var/www/html/Website/wiki/templates/mail/user_creation_validation_mail.tpl',
      1 => 1389346328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89309398753057d2f9dbda9-74397801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'mail_site' => 0,
    'mail_machine' => 0,
    'mail_user' => 0,
    'mail_apass' => 0,
    'mail_pass' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_53057d2faa4840_76937448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53057d2faa4840_76937448')) {function content_53057d2faa4840_76937448($_smarty_tpl) {?>Hi,

An administrator of the site below has added you as a new user:
	<?php if (!empty($_smarty_tpl->tpl_vars['prefs']->value['sitetitle'])){?><?php echo $_smarty_tpl->tpl_vars['prefs']->value['sitetitle'];?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['mail_site']->value;?>


If you want to confirm your membership in this site, click on the following link to login for the first time:
	<?php echo $_smarty_tpl->tpl_vars['mail_machine']->value;?>
?user=<?php echo rawurlencode($_smarty_tpl->tpl_vars['mail_user']->value);?>
&pass=<?php echo $_smarty_tpl->tpl_vars['mail_apass']->value;?>


<?php if (!empty($_smarty_tpl->tpl_vars['mail_pass']->value)){?>
Your authentication credentials are:
	Username: <?php echo $_smarty_tpl->tpl_vars['mail_user']->value;?>

	Password: <?php echo $_smarty_tpl->tpl_vars['mail_pass']->value;?>

<?php }?>

Welcome to the site!

<?php }} ?>