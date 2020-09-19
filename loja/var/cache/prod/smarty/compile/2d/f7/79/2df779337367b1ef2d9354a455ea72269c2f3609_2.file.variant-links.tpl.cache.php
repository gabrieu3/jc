<?php
/* Smarty version 3.1.33, created on 2020-09-12 14:52:21
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/catalog/_partials/variant-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0ad562c7c1_10384506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df779337367b1ef2d9354a455ea72269c2f3609' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/catalog/_partials/variant-links.tpl',
      1 => 1598917784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0ad562c7c1_10384506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13873093545f5d0ad5627488_66733318';
?>
<div class="variant-links">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['variants']->value, 'variant');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['variant']->value) {
?>
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
       class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['type'], ENT_QUOTES, 'UTF-8');?>
"
       title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
             <?php if ($_smarty_tpl->tpl_vars['variant']->value['html_color_code']) {?> style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['variant']->value['texture']) {?> style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
    ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['variant']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></a>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <span class="js-count count"></span>
</div>
<?php }
}
