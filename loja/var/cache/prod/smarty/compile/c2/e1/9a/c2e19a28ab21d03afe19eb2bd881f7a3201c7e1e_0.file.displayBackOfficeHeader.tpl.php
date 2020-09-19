<?php
/* Smarty version 3.1.33, created on 2020-09-12 15:05:49
  from '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5d0dfde8cbb6_26797759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2e19a28ab21d03afe19eb2bd881f7a3201c7e1e' => 
    array (
      0 => '/home/u630514812/domains/jeitodecozinha.com.br/public_html/loja/modules/ps_faviconnotificationbo/views/templates/hook/displayBackOfficeHeader.tpl',
      1 => 1598917744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5d0dfde8cbb6_26797759 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconBgColor']->value,'javascript' ));?>
',
      textColor: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconTxtColor']->value,'javascript' ));?>
',
      notificationGetUrl: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['bofaviconUrl']->value,'javascript' ));?>
',
      CHECKBOX_ORDER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconOrder']->value);?>
,
      CHECKBOX_CUSTOMER: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconCustomer']->value);?>
,
      CHECKBOX_MESSAGE: <?php echo intval($_smarty_tpl->tpl_vars['bofaviconMsg']->value);?>
,
      timer: 120000, // Refresh every 2 minutes
    });
  }
<?php echo '</script'; ?>
>
<?php }
}
