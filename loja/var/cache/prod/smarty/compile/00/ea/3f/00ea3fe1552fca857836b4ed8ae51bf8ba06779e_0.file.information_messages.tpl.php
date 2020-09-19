<?php
/* Smarty version 3.1.33, created on 2020-09-12 15:05:50
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/admin914u2qbma/themes/new-theme/template/components/layout/information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0dfe16a5e6_20558815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00ea3fe1552fca857836b4ed8ae51bf8ba06779e' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/admin914u2qbma/themes/new-theme/template/components/layout/information_messages.tpl',
      1 => 1598917619,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0dfe16a5e6_20558815 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
