<?php
/* Smarty version 4.3.1, created on 2023-11-13 19:17:10
  from 'app:frontendcomponentsnotification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65527636b8bcd7_77284490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959cdfb9c139350b3e526eb67ae0136140909d66' => 
    array (
      0 => 'app:frontendcomponentsnotification.tpl',
      1 => 1697149163,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65527636b8bcd7_77284490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs-system\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="cmp_notification <?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value )),' ','_');?>
 alert alert-info" role="alert">
	<?php if ($_smarty_tpl->tpl_vars['messageKey']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['messageKey']->value),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<?php }?>
</div>
<?php }
}
