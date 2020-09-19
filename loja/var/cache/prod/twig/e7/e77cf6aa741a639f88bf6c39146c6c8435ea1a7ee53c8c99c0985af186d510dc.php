<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__53c0398c17d48831c20c29a30ff68324b56b7b222790575e21e0466cab85156f */
class __TwigTemplate_120ef05a90124bf98b89c34295b6588bb8cee47577877c3753edfaa322194e43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"br\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/loja/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/loja/img/app_icon.png\" />

<title>Tema e Logotipo > Tema • Jeito de Cozinha</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'br';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-br';
    var full_cldr_language_code = 'pt-BR';
    var country_iso_code = 'BR';
    var _PS_VERSION_ = '1.7.6.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Novo pedido foi feito em sua loja';
    var order_number_msg = 'Número do pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Um novo cliente se registrou em sua loja';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'Uma nova nova mensagem foi postada em sua loja.';
    var see_msg = 'Leia esta mensagem';
    var token = '39a0bec5a08da1c00e18a8b42b0b8243';
    var token_admin_orders = '295e2388a9bc5b3ecc5705d3f1048924';
    var token_admin_customers = '58065b4a2e98007d310735a2f0b616e4';
    var token_admin_customer_threads = '71c73886cf90d0feb6f0f0a38dea88a8';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '7dc43fc2717871fe7d751448ca74cd11';
    var choose_language_translate = 'Escolha idioma';
    var default_language = '1';
    var admin_modules_link = '/loja/admin914u2qbma/index.php/improve/modules/catalog/recommended?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58';
    var admin_notification_get_link = '/loja/admin914u2qbma/index.php/common/notifications?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58';
    var admin_notification_push_link = '/loja/admin914u2qbma/index.php/common/notifications/ack?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58';
    var tab_modules_list = 'easywebtoapp';
    var update_success_msg = 'Atualizado com sucesso';
    var errorLogin = 'O PrestaShop não conseguiu autenticar-se nos Addons. Por favor, verifique as suas credenciais e sua conexão à internet.';
    var search_product_msg = 'Procure um produto';
  </script>

      <link href=\"/loja/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/admin914u2qbma/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/modules/emarketing/views/css/menuTabIcon.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/admin914u2qbma/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/loja/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/loja\\/admin914u2qbma\\/\";
var baseDir = \"\\/loja\\/\";
var changeFormLanguageUrl = \"\\/loja\\/admin914u2qbma\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\";
var currency = {\"iso_code\":\"BRL\",\"sign\":\"R\$\",\"name\":\"Real brasileiro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"BRL\",\"currencySymbol\":\"R\$\",\"positivePattern\":\"\\u00a4\\u00a0#,##0.00\",\"negativePattern\":\"-\\u00a4\\u00a0#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/loja/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/loja/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/loja/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/loja/admin914u2qbma/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/loja/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/loja/js/admin.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/loja/admin914u2qbma/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/loja/js/tools.js?v=1.7.6.7\"></script>
<script type=\"text/javascript\" src=\"/loja/admin914u2qbma/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/loja/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/loja/admin914u2qbma/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/loja/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/loja/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/loja/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/loja/admin914u2qbma/themes/default/js/bundle/module/module_card.js?v=1.7.6.7\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/loja/admin914u2qbma/index.php/common/notifications?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/jeitodecozinha.com.br\\/loja\\/admin914u2qbma\\/index.php?controller=AdminGamification&token=d906dc5e5c65284c1560656ad5f9faa1\";
            var current_id_tab = 53;
        </script>

";
        // line 105
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-br adminthemes\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminDashboard&amp;token=9a6e10147f97537cb114ce8fcb44bcb7\"></a>
      <span id=\"shop_version\">1.7.6.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b6f3d6bc76c7614ed469c7300adc545b\"
                 data-item=\"Avaliação do catálogo\"
      >Avaliação do catálogo</a>
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php/improve/modules/manage?token=679eb02d7fa003462ea9f3c69a45282d\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php/sell/catalog/categories/new?token=679eb02d7fa003462ea9f3c69a45282d\"
                 data-item=\"Nova categoria\"
      >Nova categoria</a>
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3a5faa8c5d41b8ef4d4d30bec47a7446\"
                 data-item=\"Novo vale desconto\"
      >Novo vale desconto</a>
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminOrders&amp;token=295e2388a9bc5b3ecc5705d3f1048924\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item\"
         href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php/sell/catalog/products/new?token=679eb02d7fa003462ea9f3c69a45282d\"
                 data-item=\"Produto novo\"
      >Produto novo</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"120\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-mEAkcaNOZ58\"
        data-post-link=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminQuickAccesses&token=2a37ad64ef4c06394ca32bd3f4ae9bf1\"
        data-prompt-text=\"Por favor, dê um nome para este atalho:\"
        data-link=\"Tema e Logotipo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar a página atual ao Acesso Rápido
      </a>
        <a class=\"dropdown-item\" href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminQuickAccesses&token=2a37ad64ef4c06394ca32bd3f4ae9bf1\">
      <i class=\"material-icons\">settings</i>
      Gerenciar atalhos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/loja/admin914u2qbma/index.php?controller=AdminSearch&amp;token=e0f126c2c165762317e73213bba78119\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        em todo lugar
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"em todo lugar\" href=\"#\" data-value=\"0\" data-placeholder=\"O que está procurando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> em todo lugar</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, SKU, referência...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes Nome\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nome...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes Nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID do pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos de Compras\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos de Compras</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome do módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://jeitodecozinha.com.br/loja/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Ver minha loja
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo pedido por enquanto :(<br>
              Você verificou seus <strong><a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=b0f4d1e3c3a9d099bc397ce5581728d6\">carrinhos abandonadas</a></strong>?<br> Seu próximo pedido pode estar escondido aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Você esteve ativo nas redes sociais nos últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Parece que todos os clientes estão felizes :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"https://profile.prestashop.com/jeitodecozinha%40gmail.com.jpg\" /></span>
      <span class=\"employee_profile\">Bem vindo de volta Gabriel</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/loja/admin914u2qbma/index.php/configure/advanced/employees/1/edit?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\">
      <i class=\"material-icons\">settings</i>
      Seu perfil
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Treinamento</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Encontre um Especialista</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> MarketPlace do PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Central de Ajuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminLogin&amp;logout=1&amp;token=bc1a5a4ef0321fd6a7d80419087b0e87\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sair</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/loja/admin914u2qbma/index.php/configure/advanced/employees/toggle-navigation?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminDashboard&amp;token=9a6e10147f97537cb114ce8fcb44bcb7\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Painel</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vender</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminOrders&amp;token=295e2388a9bc5b3ecc5705d3f1048924\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Pedidos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminOrders&amp;token=295e2388a9bc5b3ecc5705d3f1048924\" class=\"link\"> Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/orders/invoices/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Faturas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminSlip&amp;token=7ead05acac58aae64a0fd424769a6e1d\" class=\"link\"> Comprovantes de créditos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/orders/delivery-slips/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Comprovantes de entregas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCarts&amp;token=b0f4d1e3c3a9d099bc397ce5581728d6\" class=\"link\"> Carrinho de compras
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/loja/admin914u2qbma/index.php/sell/catalog/products?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catálogo
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/catalog/products?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/catalog/categories?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Categorias
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminTracking&amp;token=1677fea80e02225c93f0c22096cb4bc0\" class=\"link\"> Monitoramento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminAttributesGroups&amp;token=7e4f720f191ce0ed3108a584e1e5b538\" class=\"link\"> Atributos e Características
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/catalog/brands/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Marcas e Fornecedores
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminAttachments&amp;token=83718ab808fdba849c032471b565bf11\" class=\"link\"> Arquivos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCartRules&amp;token=3a5faa8c5d41b8ef4d4d30bec47a7446\" class=\"link\"> Descontos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/stocks/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/loja/admin914u2qbma/index.php/sell/customers/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clientes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/loja/admin914u2qbma/index.php/sell/customers/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminAddresses&amp;token=8487bd95a15d0b57921b0b63abf32cad\" class=\"link\"> Endereços
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCustomerThreads&amp;token=71c73886cf90d0feb6f0f0a38dea88a8\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Atendimento ao Cliente
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCustomerThreads&amp;token=71c73886cf90d0feb6f0f0a38dea88a8\" class=\"link\"> Atendimento ao Cliente
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminOrderMessage&amp;token=61836f6518901e4a4b0e46c1cc47a41d\" class=\"link\"> Mensagens de pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminReturn&amp;token=a4df97267117c4aadc1018e22457a80f\" class=\"link\"> Devoluções de Mercadorias
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminStats&amp;token=b6f3d6bc76c7614ed469c7300adc545b\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Estatísticas
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                                                    
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Melhorar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/loja/admin914u2qbma/index.php/improve/modules/manage?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Módulos
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/modules/manage?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"/loja/admin914u2qbma/index.php/modules/addons/modules/catalog?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Catálogo de Módulos
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/loja/admin914u2qbma/index.php/improve/design/themes/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Design
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/design/themes/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Tema e Logotipo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"137\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"/loja/admin914u2qbma/index.php/modules/addons/themes/catalog?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Catálogo de Temas
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/design/mail_theme/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Tema de E-mail
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/design/cms-pages/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Páginas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/design/modules/positions/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Posições
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminImages&amp;token=6999c64d94851ab82160bd3dd0928b0b\" class=\"link\"> Configurações de Imagem
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/loja/admin914u2qbma/index.php/modules/link-widget/list?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCarriers&amp;token=30657bb9b5eed78ecc5cee17760b6da6\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Frete
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminCarriers&amp;token=30657bb9b5eed78ecc5cee17760b6da6\" class=\"link\"> Transportadoras
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/shipping/preferences?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/loja/admin914u2qbma/index.php/improve/payment/payment_methods?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Pagamento
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/payment/payment_methods?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Métodos de Pagamento
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/payment/preferences?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Preferências
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/loja/admin914u2qbma/index.php/improve/international/localization/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Internacional
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/international/localization/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Localização
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminZones&amp;token=38b9a89a68ff7dcd40f3920435bcf5ad\" class=\"link\"> Localizações
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/international/taxes/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Taxas
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/loja/admin914u2qbma/index.php/improve/international/translations/settings?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Traduções
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminEmarketing\">
                  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminEmarketing&amp;token=abe5539a91c795e8953da2a50744efa2\" class=\"link\">
                    <i class=\"material-icons mi-track_changes\">track_changes</i>
                    <span>
                    Advertising
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurar</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/loja/admin914u2qbma/index.php/configure/shop/preferences/preferences?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Parâmetros da Loja
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/preferences/preferences?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Geral
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/order-preferences/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Opções de Pedidos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/product-preferences/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Opções de Produtos
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/customer-preferences/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Opções de Clientes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/contacts/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Contato
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/shop/seo-urls/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Tráfego e SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminSearchConf&amp;token=31b9eea7b31ac3f31fa17c10d97f0230\" class=\"link\"> Busca
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminGamification&amp;token=d906dc5e5c65284c1560656ad5f9faa1\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/system-information/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Parâmetros Avançados
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/system-information/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Informação
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/performance/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Desempenho
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/administration/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Administração
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/emails/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/import/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Importar
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/employees/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Equipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/sql-requests/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Banco de Dados
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/logs/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/loja/admin914u2qbma/index.php/configure/advanced/webservice-keys/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" class=\"link\"> WebService
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Lançar sua loja!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumo</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Parar o Embarque</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Tema e Logotipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema e Logotipo &gt; Tema          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/loja/admin914u2qbma/index.php/improve/design/themes/import?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\"                  title=\"Adicionar novo tema\"                >
                  <i class=\"material-icons\">add</i>                  Adicionar novo tema
                </a>
                                                                        <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/loja/admin914u2qbma/index.php/improve/design/themes/export?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\"                  title=\"Exportar tema atual\"                >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema atual
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/loja/admin914u2qbma/index.php/improve/modules/catalog?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\"                title=\"Módulos Recomendados\"
                              >
                Módulos Recomendados
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/loja/admin914u2qbma/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fbr%252Fdoc%252FAdminThemes%253Fversion%253D1.7.6.7%2526country%253Dbr/Ajuda?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/loja/admin914u2qbma/index.php/improve/design/themes/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"53\">
                      Tema e Logotipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminPsThemeCustoConfiguration&token=093db81b3e468a41cdfdadc81f3bcec4\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Pages Configuration
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminPsThemeCustoAdvanced&token=e2c3a725d9f2ca62641671d182ba8750\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Advanced Customization
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              </ul>
    </div>
    <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Módulos e Serviços Recomendados',
        'Close': 'Fechar',
      },
      recommendedModulesUrl: '/loja/admin914u2qbma/index.php/modules/addons/modules/recommended?tabClassName=AdminThemes&_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 0%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Continuar</button>
  <a class=\"onboarding-button-shut-down\">Pular este tutorial</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(0, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Seja bem-vindo \\u00e0 sua loja!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Ol\\u00e1! O meu nome \\u00e9 Preston e eu estou aqui para ser o seu guia.<\\/p>\\n    <p>Voc\\u00ea vai descobrir alguns passos essenciais antes de poder lan\\u00e7ar a sua loja:\\n    Crie o seu primeiro produto, personalize a sua loja, configure envios e pagamentos...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Vamos come\\u00e7ar!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">Depois<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">Come\\u00e7ar<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"https:\\/\\/jeitodecozinha.com.br\\/loja\\/admin914u2qbma\\/index.php?controller=AdminDashboard&token=9a6e10147f97537cb114ce8fcb44bcb7\"}]},{\"title\":\"Vamos l\\u00e1 criar o seu primeiro produto\",\"subtitle\":{\"1\":\"O que gostaria de dizer sobre este produto? Pense no que os seus clientes v\\u00e3o querer saber.\",\"2\":\"Adicione informa\\u00e7\\u00f5es claras e atrativas. N\\u00e3o se preocupe, voc\\u00ea pode edit\\u00e1s-la depois :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"D\\u00ea um nome atraente ao seu produto.\",\"options\":[\"savepoint\"],\"page\":[\"\\/loja\\/admin914u2qbma\\/index.php\\/sell\\/catalog\\/products\\/new?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Preencha os detalhes essenciais nesta aba. As outras abas s\\u00e3o para informa\\u00e7\\u00f5es mais avan\\u00e7adas.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Adicione uma ou mais fotos para tornar o seu produto mais atraente!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Por quanto voc\\u00ea quer vender?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"Opa! voc\\u00ea acabou de criar o seu primeiro produto. Est\\u00e1 bonito, n\\u00e3o \\u00e9 mesmo?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"D\\u00ea \\u00e0 sua loja a sua pr\\u00f3pria identifica\\u00e7\\u00e3o\",\"subtitle\":{\"1\":\"Qual \\u00e9 a apar\\u00eancia que voc\\u00ea quer que a loja tenha? O que a torna t\\u00e3o especial?\",\"2\":\"Personalize o seu tema ou escolha o melhor design atrav\\u00e9s do nosso cat\\u00e1logo de temas.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Uma boa maneira de come\\u00e7ar \\u00e9 adicionar seu logo aqui!\",\"options\":[\"savepoint\"],\"page\":\"\\/loja\\/admin914u2qbma\\/index.php\\/improve\\/design\\/themes\\/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Se quer algo realmente especial, d\\u00ea uma olhada no cat\\u00e1logo de temas!\",\"page\":\"\\/loja\\/admin914u2qbma\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"Deixe sua loja pronta para receber pagamentos\",\"subtitle\":{\"1\":\"Como voc\\u00ea quer que os seus clientes paguem?\",\"2\":\"Adapte a sua oferta ao seu mercado: adicione os m\\u00e9todos de pagamento mais populares para os seus clientes!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Estes m\\u00e9todos de pagamento j\\u00e1 est\\u00e3o dispon\\u00edveis aos seus clientes.\",\"options\":[\"savepoint\"],\"page\":\"\\/loja\\/admin914u2qbma\\/index.php\\/improve\\/payment\\/payment_methods?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"E voc\\u00ea pode escolher adicionar outros m\\u00e9todos de pagamentos por aqui!\",\"page\":\"\\/loja\\/admin914u2qbma\\/index.php\\/improve\\/payment\\/payment_methods?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Escolha suas formas de envio\",\"subtitle\":{\"1\":\"Como voc\\u00ea deseja enviar seus produtos?\",\"2\":\"Selecione as op\\u00e7\\u00f5es de envio que melhor satisfa\\u00e7am os seus clientes! Crie a sua pr\\u00f3pria transportadora ou adicione um m\\u00f3dulo desenvolvido.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Aqui est\\u00e3o os m\\u00e9todos de envio dispon\\u00edveis na sua loja hoje.\",\"options\":[\"savepoint\"],\"page\":\"https:\\/\\/jeitodecozinha.com.br\\/loja\\/admin914u2qbma\\/index.php?controller=AdminCarriers&token=30657bb9b5eed78ecc5cee17760b6da6\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Voc\\u00ea pode oferecer mais op\\u00e7\\u00f5es de envio configurando transportadoras adicionais\",\"page\":\"https:\\/\\/jeitodecozinha.com.br\\/loja\\/admin914u2qbma\\/index.php?controller=AdminCarriers&token=30657bb9b5eed78ecc5cee17760b6da6\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"Melhore a sua loja com m\\u00f3dulos\",\"subtitle\":{\"1\":\"Adicione novas funcionalidades e administre as j\\u00e1 existentes atrav\\u00e9s de m\\u00f3dulos.\",\"2\":\"Alguns m\\u00f3dulos j\\u00e1 s\\u00e3o pr\\u00e9-instalados, outros podem ser m\\u00f3dulos gratuitos ou pagos - navegue em nossa sele\\u00e7\\u00e3o e encontre o que est\\u00e1 dispon\\u00edvel!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Descubra a nossa sele\\u00e7\\u00e3o de m\\u00f3dulos na primeira aba. Administre os seus m\\u00f3dulos na segunda aba e esteja atento \\u00e0s notifica\\u00e7\\u00f5es dos mesmos na terceira aba.\",\"options\":[\"savepoint\"],\"page\":\"\\/loja\\/admin914u2qbma\\/index.php\\/improve\\/modules\\/catalog?_token=F85AgGdtyEDuKzR6yzt7SjQfcn_2rD4-mEAkcaNOZ58\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">Para voc\\u00ea!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          Voc\\u00ea J\\u00e1 viu o essencial, mas h\\u00e1 muito mais para descobrir.<br \\/>\\n          Alguns recursos podem ajud\\u00e1-lo a continuar:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">Guia de In\\u00edcio R\\u00e1pido<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">F\\u00f3rum<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">Treinamento<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">Tutorial em v\\u00eddeo<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">Estou pronto<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminWelcome&token=514813ea8b877004fe4f72fd9aacf216\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Olá! Você está perdido?</p>    <p>Para continuar, clique aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Continuar</button>    </div>    <p>Se quiser parar o tutorial definitivamente, clique aqui:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Finalizar o tutorial de boas vindas</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Etapa <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Próximo</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1243
        $this->displayBlock('content_header', $context, $blocks);
        // line 1244
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1245
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1246
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1247
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página não está disponível ainda.
  </p>
  <p class=\"mt-2\">
    Por favor use um computador desktop para acessar esta página, até que seja adaptada para o móvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"https://jeitodecozinha.com.br/loja/admin914u2qbma/index.php?controller=AdminDashboard&amp;token=9a6e10147f97537cb114ce8fcb44bcb7\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-BR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/br/login?email=jeitodecozinha%40gmail.com&amp;firstname=Gabriel&amp;lastname=Balestrin&amp;website=http%3A%2F%2Fjeitodecozinha.com.br%2Floja%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-BR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/loja/admin914u2qbma/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecte sua loja ao Prestashop marketplace para importar automaticamente todos os Addons que você adquiriu.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Não tem uma conta?</h4>
\t\t\t\t\t\t<p class='text-justify'>Descubra as vantagens do PrestaShop Addons! Explore o MarketPlace Oficial do PrestaShop e encontre mais de 3.500 módulos inovadores e temas que ajudam a otimizar as taxas de conversão, aumentar o tráfego na loja, desenvolver a fidelidade dos clientes e maximizar a sua produtividade</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectar ao PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/br/forgot-your-password\">Esqueci minha senha</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/br/login?email=jeitodecozinha%40gmail.com&amp;firstname=Gabriel&amp;lastname=Balestrin&amp;website=http%3A%2F%2Fjeitodecozinha.com.br%2Floja%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-BR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCriar uma conta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Entrar
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1354
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 105
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1243
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1244
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1245
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1246
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1354
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__53c0398c17d48831c20c29a30ff68324b56b7b222790575e21e0466cab85156f";
    }

    public function getDebugInfo()
    {
        return array (  1444 => 1354,  1439 => 1246,  1434 => 1245,  1429 => 1244,  1424 => 1243,  1415 => 105,  1407 => 1354,  1298 => 1247,  1295 => 1246,  1292 => 1245,  1289 => 1244,  1287 => 1243,  145 => 105,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__53c0398c17d48831c20c29a30ff68324b56b7b222790575e21e0466cab85156f", "");
    }
}
