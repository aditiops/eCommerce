<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 19:33:53
         compiled from "/var/www/html/admin/themes/default/template/controllers/countries/helpers/list/list_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6188557115266d321e91c43-19635277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56052dd0805ca9964ed88c6f283a858d388a5d44' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/countries/helpers/list/list_footer.tpl',
      1 => 1381148910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6188557115266d321e91c43-19635277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bulk_actions' => 0,
    'key' => 0,
    'params' => 0,
    'zones' => 0,
    'z' => 0,
    'table' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5266d3223d0c97_60288558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266d3223d0c97_60288558')) {function content_5266d3223d0c97_60288558($_smarty_tpl) {?>

			</table>
			<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value){?>
				<p>
					<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value)>1){?>
						<select id="select_submitBulk" name="select_submitBulk">
							<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>
</option>
							<?php } ?>
						</select>
						<input type="submit" class="button" name="submitBulk" id="submitBulk" value="<?php echo smartyTranslate(array('s'=>'Apply'),$_smarty_tpl);?>
" />
					<?php }else{ ?>
						<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['key']->value=='affectzone'){?>
								<select id="zone_to_affect" name="zone_to_affect">
									<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
									<?php } ?>
								</select>
							<?php }?>
							<input type="submit" class="button" name="submitBulk<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['params']->value['confirm'])){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
');"<?php }?> />
						<?php } ?>
					<?php }?>
				</p>
			<?php }?>
		</td>
	</tr>
</table>
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
</form>

<script type="text/javascript">
	var confirmation = new Array();
	<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['params']->value['confirm'])){?>
			confirmation['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
'] = "<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
";
		<?php }?>
	<?php } ?>

	$(document).ready(function(){
		<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value)>1){?>
			$('#submitBulk').click(function(){
				if (confirmation[$(this).val()])
					return confirm(confirmation[$(this).val()]);
				else
					return true;
			});
			$('#select_submitBulk').change(function(){
				if ($(this).val() == 'affectzone')
					loadZones();
				else if (loaded)
					$('#zone_to_affect').fadeOut('slow');
			});
		<?php }?>
	});
	var loaded = false;
	function loadZones()
	{
		if (!loaded)
		{
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				data: 'getZones=true&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
				async : true,
				cache: false,
				dataType: 'json',
				success: function(data) {
					var html = $(data);
					html.hide();
					$('#select_submitBulk').after(html);
					html.fadeIn('slow');
				}
			});
			loaded = true;
		}
		else
		{
			$('#zone_to_affect').fadeIn('slow');
		}
	}
</script><?php }} ?>