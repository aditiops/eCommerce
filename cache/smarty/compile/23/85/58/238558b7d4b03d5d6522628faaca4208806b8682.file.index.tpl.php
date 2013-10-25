<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 19:35:43
         compiled from "/var/www/html/themes/default/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14081146055266d38f638fb1-51919105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '238558b7d4b03d5d6522628faaca4208806b8682' => 
    array (
      0 => '/var/www/html/themes/default/mobile/index.tpl',
      1 => 1381148910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14081146055266d38f638fb1-51919105',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266d38f671653_94899879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266d38f671653_94899879')) {function content_5266d38f671653_94899879($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>