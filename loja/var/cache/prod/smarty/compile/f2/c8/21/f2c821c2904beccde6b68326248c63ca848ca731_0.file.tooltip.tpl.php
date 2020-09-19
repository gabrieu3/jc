<?php
/* Smarty version 3.1.33, created on 2020-09-12 15:05:50
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/modules/welcome/views/templates/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0dfe1536a2_52718343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c821c2904beccde6b68326248c63ca848ca731' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/modules/welcome/views/templates/tooltip.tpl',
      1 => 1598917752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0dfe1536a2_52718343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
