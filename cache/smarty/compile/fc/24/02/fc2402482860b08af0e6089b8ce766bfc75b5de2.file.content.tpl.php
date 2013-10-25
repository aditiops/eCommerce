<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 19:33:51
         compiled from "/var/www/html/admin/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4137314645266d31fdefa27-76542980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc2402482860b08af0e6089b8ce766bfc75b5de2' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/localization/content.tpl',
      1 => 1381148910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4137314645266d31fdefa27-76542980',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266d31fe27195_00519938',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266d31fe27195_00519938')) {function content_5266d31fe27195_00519938($_smarty_tpl) {?>

<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
</div>
<br />
<div class="width4">
	<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)){?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
</div><?php }} ?>