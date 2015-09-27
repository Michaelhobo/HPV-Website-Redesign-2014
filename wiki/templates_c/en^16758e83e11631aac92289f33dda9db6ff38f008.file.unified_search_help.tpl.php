<?php /* Smarty version Smarty-3.1-DEV, created on 2013-10-09 16:42:49
         compiled from "/var/www/html/wordpress/tiki/templates/unified_search_help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37442314452558789d661d4-40755601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16758e83e11631aac92289f33dda9db6ff38f008' => 
    array (
      0 => '/var/www/html/wordpress/tiki/templates/unified_search_help.tpl',
      1 => 1301833055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37442314452558789d661d4-40755601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52558789d709b2_81702009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52558789d709b2_81702009')) {function content_52558789d709b2_81702009($_smarty_tpl) {?><div class="help_section">The documents are returned sorted on relevance depending on order, proximity, frequency of terms.</div><div class="help_section"><h4>Default search behavior</h4><p>By default, all search terms are <em>optional</em>.&nbsp;It behaves like an OR logic.&nbsp;Objects that contain the more terms are rated higher in the results and will appear first. For example, <strong>wiki forum</strong> will find:</p><ul><li>objects that include both tokenized terms</li><li>objects that include the term <strong>wiki</strong></li><li>objects that include the term <strong>forum</strong> or <strong>forums</strong></li></ul><h4>Boolean operators</h4><p>You can use AND or OR or NOT also to do a boolean search.&nbsp;Example: <strong>wiki and forum</strong> will find objects with both terms.&nbsp;Example: <strong>wiki or forum</strong> will find objects with one of the term.</p><h4>Grouping terms</h4><p>Use parenthesis ( ) to group terms into subexpressions.&nbsp;Example: <strong>wiki and (forum blog)</strong> will find objects that contain <strong>wiki</strong> and <strong>forum</strong> or that contain <strong>wiki</strong> and <strong>blog</strong> in any order.</p><h4>Finding phrases</h4><p>Use double quotes ( " " ) around a phrase to find terms in the exact order, next to each other.&nbsp;Example: <strong>"Alex Bell"</strong> will not find <strong>Bell Alex</strong> or <strong>Alex G. Bell</strong> but <strong>Alex Bells</strong>. </p></div>
<?php }} ?>