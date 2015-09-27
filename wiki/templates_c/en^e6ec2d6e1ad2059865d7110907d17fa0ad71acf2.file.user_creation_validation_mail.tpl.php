<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-31 02:51:35
         compiled from "/var/www/html/wordpress/tiki/templates/mail/user_creation_validation_mail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18091961735271c5b7a54520-89453277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6ec2d6e1ad2059865d7110907d17fa0ad71acf2' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/mail/user_creation_validation_mail.tpl',
      1 => 1307280853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18091961735271c5b7a54520-89453277',
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
  'unifunc' => 'content_5271c5b7af2046_56223413',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271c5b7af2046_56223413')) {function content_5271c5b7af2046_56223413($_smarty_tpl) {?>Hi,

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