<?php
/* Smarty version 4.1.0, created on 2023-03-31 14:58:30
  from 'app:formfieldLabel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6426d8f6a7a982_33488987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e011bb0ce24c298716c487f88854604671d1986' => 
    array (
      0 => 'app:formfieldLabel.tpl',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6426d8f6a7a982_33488987 (Smarty_Internal_Template $_smarty_tpl) {
?>
<label<?php if (!$_smarty_tpl->tpl_vars['FBV_suppressId']->value) {?> for="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_name']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"<?php }
if ($_smarty_tpl->tpl_vars['FBV_class']->value) {?> class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = $_smarty_tpl->tpl_vars['FBV_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp) ));?>
"<?php }?> >
	<?php echo $_smarty_tpl->tpl_vars['FBV_label']->value;
if ($_smarty_tpl->tpl_vars['FBV_required']->value) {?><span class="req">*</span><?php }?>
</label>

<?php }
}
