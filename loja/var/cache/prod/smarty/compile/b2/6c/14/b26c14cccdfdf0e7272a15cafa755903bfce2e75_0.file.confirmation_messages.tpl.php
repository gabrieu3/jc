<?php
/* Smarty version 3.1.33, created on 2020-09-12 15:05:50
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/admin914u2qbma/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0dfe16e615_12597997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b26c14cccdfdf0e7272a15cafa755903bfce2e75' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/admin914u2qbma/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1598917619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0dfe16e615_12597997 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
