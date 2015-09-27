<?php /* Smarty version Smarty-3.1-DEV, created on 2013-11-02 20:41:48
         compiled from "/var/www/html/wordpress/tiki/templates/database-connection-error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51390481652759bcc96d946-34163977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd249cac34acefe2d48bb5b569e0af95db595f9e9' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/database-connection-error.tpl',
      1 => 1362137110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51390481652759bcc96d946-34163977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prefs' => 0,
    'tiki_p_admin' => 0,
    'msg' => 0,
    'requires_update' => 0,
    'base_query' => 0,
    'values' => 0,
    'value' => 0,
    'built_query' => 0,
    'stacktrace' => 0,
    'where' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52759bcccb7207_71830021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52759bcccb7207_71830021')) {function content_52759bcccb7207_71830021($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>System error.</title>
	<link rel="stylesheet" href="styles/fivealive.css" type="text/css"/>
	<style type="text/css" media="screen">
		html {
			background-color: #fff;
		}
		#centercolumn {
			padding: 4em 10em;
		}
	</style>
</head>
<body class="tiki_wiki db_error">
<div id="fixedwidth"> 
	<div id="main">
	<div id="siteheader" style="margin: 1em auto; max-width: 800px">
			<div id="sitelogo">
				<img style="border: medium none ;" alt="Site Logo" src="img/tiki/Tiki_WCG.png">
			</div>
	</div>

	<div id="tiki-main">
		<div id="tiki-mid">
			<div style="margin:10px 30px;">
				<?php if ($_smarty_tpl->tpl_vars['prefs']->value['error_reporting_level']&&($_smarty_tpl->tpl_vars['tiki_p_admin']->value=='y'||$_smarty_tpl->tpl_vars['prefs']->value['error_reporting_adminonly']!='y')){?>
					<h1>System error.</h1>
					<div class="left">
						<p>The following error message was returned:</p>
						<strong>
							<pre><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8', true));?>
</pre>
						</strong>

						<?php if ($_smarty_tpl->tpl_vars['requires_update']->value){?>
							<p>
								Database is not currently up to date! Visit <a href="tiki-install.php">Tiki Installer</a> to resolve this issue.
								If you have shell (SSH) access, you can also use the following, on the command line, from the root of your Tiki installation: php installer/shell.php
							</p>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['base_query']->value){?>
							<p><strong>The query was:</strong></p>
							<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['base_query']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
						<?php }?>
						<?php if (count($_smarty_tpl->tpl_vars['values']->value)>0){?>
							<p><strong>Values:</strong></p>
							<ol>
								<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
									<li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</li>
								<?php } ?>
							</ol>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['built_query']->value){?>
							<p><strong>The built query was likely:</strong></p>
							<strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['built_query']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['stacktrace']->value){?>
							<p><strong>Stacktrace:</strong></p>
							<div>
								<?php echo $_smarty_tpl->tpl_vars['stacktrace']->value;?>

							</div>
						<?php }?>
					</div>
				
				</div>
				<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
					<p>Things to check:</p>
					<ol class="fancylist">
						<li><p>Is your database up and running?</p></li>
						<li><p>Is your database corrupt? Please see <a target="_blank" href="http://doc.tiki.org/Repair+Database">how to repair your database</a></p></li>					
						<li><p>Are your database credentials accurate? (username, database name, etc in db/local.php)</p></li>
						<?php if ($_smarty_tpl->tpl_vars['where']->value!='connection'){?>
							<li><p>Did you complete the <a href="tiki-install.php">Tiki Installer?</a></p></li>
						<?php }?>
					</ol>
				</div>
			<?php }elseif($_smarty_tpl->tpl_vars['where']->value=='connection'){?>
				<h1>Tiki is unable to connect to the database</h1>
				<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
					<p>Things to check:</p>
					<ol class="fancylist">
						<li><p>Is your database up and running?</p></li>
						<li><p>Are your database credentials accurate? (username, database name, etc in db/local.php)</p></li>
					</ol>
				</div>
			<?php }else{ ?>
				<h1>An error occurred while performing the request.</h1>
				<div class="wikitext" style="border: solid 1px #ccc; margin: 1em auto; padding: 1em; text-align: left; width: 90%;">
					<p>Things to check:</p>
					<ol class="fancylist">
						<li><p>Did you complete the <a href="tiki-install.php">Tiki Installer?</a></p></li>
						<li><p>Is your database corrupt? Please see <a target="_blank" href="http://doc.tiki.org/Repair+Database">how to repair your database</a></p></li>					
						<li><p>Are your database credentials accurate? (username, database name, etc in db/local.php)</p></li>
					</ol>
				</div>
			<?php }?>

			<p>Please see <a target="_blank" href="http://doc.tiki.org/">the documentation</a> for more information.</p>

			<hr/>


		</div>
	</div>
		</div>
	</div> 
</body>
</html>
<?php }} ?>