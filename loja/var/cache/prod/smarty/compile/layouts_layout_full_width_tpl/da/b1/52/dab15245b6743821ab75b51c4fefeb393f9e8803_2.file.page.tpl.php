<?php
/* Smarty version 3.1.33, created on 2020-09-12 14:52:21
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0ad5675157_14890569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab15245b6743821ab75b51c4fefeb393f9e8803' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/themes/classic/templates/page.tpl',
      1 => 1598917784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0ad5675157_14890569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11144885535f5d0ad5670b25_07073651', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_16490371075f5d0ad5671525_82564534 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14008943805f5d0ad5670f93_96725202 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16490371075f5d0ad5671525_82564534', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3004601465f5d0ad56733a3_68919228 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1342068085f5d0ad5673962_48978788 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16547002215f5d0ad5672f70_00415706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3004601465f5d0ad56733a3_68919228', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1342068085f5d0ad5673962_48978788', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6489648215f5d0ad5674693_24159565 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17579751185f5d0ad56742d6_44188578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6489648215f5d0ad5674693_24159565', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11144885535f5d0ad5670b25_07073651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11144885535f5d0ad5670b25_07073651',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14008943805f5d0ad5670f93_96725202',
  ),
  'page_title' => 
  array (
    0 => 'Block_16490371075f5d0ad5671525_82564534',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16547002215f5d0ad5672f70_00415706',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3004601465f5d0ad56733a3_68919228',
  ),
  'page_content' => 
  array (
    0 => 'Block_1342068085f5d0ad5673962_48978788',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17579751185f5d0ad56742d6_44188578',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6489648215f5d0ad5674693_24159565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14008943805f5d0ad5670f93_96725202', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16547002215f5d0ad5672f70_00415706', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17579751185f5d0ad56742d6_44188578', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
