<?php
/* Smarty version 3.1.33, created on 2020-09-12 14:52:21
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0ad5734e55_24816588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7eff24da25fc30c72dbd852684ac29ac30877dc' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/_partials/footer.tpl',
      1 => 1598917784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0ad5734e55_24816588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11932389375f5d0ad5730e42_83335904', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4656356375f5d0ad5731b10_65238583', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3850835175f5d0ad5732667_78050060', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16738428965f5d0ad5733169_20436856', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_11932389375f5d0ad5730e42_83335904 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_11932389375f5d0ad5730e42_83335904',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_4656356375f5d0ad5731b10_65238583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_4656356375f5d0ad5731b10_65238583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_3850835175f5d0ad5732667_78050060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_3850835175f5d0ad5732667_78050060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_16738428965f5d0ad5733169_20436856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_16738428965f5d0ad5733169_20436856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <a class="_blank" href="https://www.prestashop.com" target="_blank" rel="nofollow">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

            </a>
          <?php
}
}
/* {/block 'copyright_link'} */
}
