<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 19:34:21
         compiled from "/var/www/html/themes/default/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18981878755266d33dc022e8-62956675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c9a1d49ffa190489ca7b04fe79a7a4610a763dd' => 
    array (
      0 => '/var/www/html/themes/default/category-count.tpl',
      1 => 1381148910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18981878755266d33dc022e8-62956675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266d33dd7a978_57027208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266d33dd7a978_57027208')) {function content_5266d33dd7a978_57027208($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>