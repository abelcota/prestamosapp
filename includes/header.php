<?php
include ('includes/notification.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Peak UI</title>
    <meta name="description" content="dashboard, admin, template, templates, peak, peak ui, material design">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/icons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" type="text/css" href="css/roboto.css">
    <link rel="stylesheet" type="text/css" href="css/material-icons.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/flag-icon-css.css">
    <link rel="stylesheet" type="text/css" href="css/weather-icons.css" />
    <link rel="stylesheet" type="text/css" href="css/weather-icons-wind.css" />
    <!-- build:css css/vendor.css -->
    <link rel="stylesheet" type="text/css" href="bower_components/chartist/dist/chartist.min.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/morris.js/morris.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/nvd3/build/nv.d3.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/sweetalert2/dist/sweetalert2.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/toastr/toastr.css" />
    <link rel="stylesheet" type="text/css" href="bower_components/summernote/dist/summernote.css" />
    <link rel="stylesheet" type="text/css" href="components/css/zoom.css" />
    <!-- endbuild -->
    <!-- build:css css/styles.css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/colors.css">
    <link rel="stylesheet" type="text/css" href="css/box-shadows.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/homepage.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/default-sidebar-1.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/default-sidebar-2.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/empty-view-1.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/empty-view-2.css">
    <link rel="stylesheet" type="text/css" href="css/layouts/empty-view-3.css">
    <link rel="stylesheet" type="text/css" href="css/left-sidebars/left-sidebar-1.css">
    <link rel="stylesheet" type="text/css" href="css/navbars/navbar-1.css">
    <link rel="stylesheet" type="text/css" href="css/right-sidebars/right-sidebar-1.css">
    <link rel="stylesheet" type="text/css" href="css/dashboards/geographic.css">
    <link rel="stylesheet" type="text/css" href="css/dashboards/analytics.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/margin.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/padding.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/text.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/border.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/height.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/width.css">
    <link rel="stylesheet" type="text/css" href="css/helpers/other.css">
    <link rel="stylesheet" type="text/css" href="css/color-system/material-design-colors.css">
    <link rel="stylesheet" type="text/css" href="css/icons/flags.css">
    <link rel="stylesheet" type="text/css" href="css/icons/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/icons/weather-icons.css">
    <link rel="stylesheet" type="text/css" href="css/icons/material-design-icons.css">
    <link rel="stylesheet" type="text/css" href="css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="css/charts/easy-pie-chart.css">
    <link rel="stylesheet" type="text/css" href="css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="css/charts/nvd3.css">
    <link rel="stylesheet" type="text/css" href="css/charts/echarts.css">
    <link rel="stylesheet" type="text/css" href="css/extras/crop.css">
    <link rel="stylesheet" type="text/css" href="css/extras/invoice.css">
    <link rel="stylesheet" type="text/css" href="css/extras/mousetrap.css">
    <link rel="stylesheet" type="text/css" href="css/extras/pricing-tables.css">
    <link rel="stylesheet" type="text/css" href="css/extras/syntax-highlighting.css">
    <link rel="stylesheet" type="text/css" href="css/extras/zoom.css">
    <link rel="stylesheet" type="text/css" href="css/editors/summernote.css">
    <link rel="stylesheet" type="text/css" href="css/jumbotron/jumbotron-1.css">
    <link rel="stylesheet" type="text/css" href="css/forms/basic.css">
    <link rel="stylesheet" type="text/css" href="css/forms/checkboxes.css">
    <link rel="stylesheet" type="text/css" href="css/forms/radios.css">
    <link rel="stylesheet" type="text/css" href="css/forms/sliders.css">
    <link rel="stylesheet" type="text/css" href="css/forms/toggles.css">
    <link rel="stylesheet" type="text/css" href="css/tables/default.css">
    <link rel="stylesheet" type="text/css" href="css/tables/datatable.css">
    <link rel="stylesheet" type="text/css" href="css/pages/index.css">
    <link rel="stylesheet" type="text/css" href="css/pages/banners.css">
    <link rel="stylesheet" type="text/css" href="css/pages/error.css">
    <link rel="stylesheet" type="text/css" href="css/pages/sign-in.css">
    <link rel="stylesheet" type="text/css" href="css/pages/sign-up.css">
    <link rel="stylesheet" type="text/css" href="css/ui/alerts.css">
    <link rel="stylesheet" type="text/css" href="css/ui/badges.css">
    <link rel="stylesheet" type="text/css" href="css/ui/breadcrumbs.css">
    <link rel="stylesheet" type="text/css" href="css/ui/buttons.css">
    <link rel="stylesheet" type="text/css" href="css/ui/cards.css">
    <link rel="stylesheet" type="text/css" href="css/ui/dropdowns.css">
    <link rel="stylesheet" type="text/css" href="css/ui/grid.css">
    <link rel="stylesheet" type="text/css" href="css/ui/images.css">
    <link rel="stylesheet" type="text/css" href="css/ui/lists.css">
    <link rel="stylesheet" type="text/css" href="css/ui/modals.css">
    <link rel="stylesheet" type="text/css" href="css/ui/overlays.css">
    <link rel="stylesheet" type="text/css" href="css/ui/pagination.css">
    <link rel="stylesheet" type="text/css" href="css/ui/popovers.css">
    <link rel="stylesheet" type="text/css" href="css/ui/progress-bars.css">
    <link rel="stylesheet" type="text/css" href="css/ui/social-media-buttons.css">
    <link rel="stylesheet" type="text/css" href="css/ui/sweet-alert.css">
    <link rel="stylesheet" type="text/css" href="css/ui/tabs.css">
    <link rel="stylesheet" type="text/css" href="css/ui/tags.css">
    <link rel="stylesheet" type="text/css" href="css/ui/tooltips.css">
    <link rel="stylesheet" type="text/css" href="css/ui/typography.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-1.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-10.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-11.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-2.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-6.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-7.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-8.css">
    <link rel="stylesheet" type="text/css" href="css/user-widgets/user-widget-9.css">
    <link rel="stylesheet" type="text/css" href="css/maps/google-maps.css">
    <link rel="stylesheet" type="text/css" href="css/maps/vector-maps.css">
    <link rel="stylesheet" type="text/css" href="css/text-widgets/text-widget-1.css">
    <link rel="stylesheet" type="text/css" href="css/text-widgets/text-widget-2.css">
    <link rel="stylesheet" type="text/css" href="css/text-widgets/text-widget-7.css">
    <link rel="stylesheet" type="text/css" href="css/activity-widgets/activity-widget-1.css">
    <link rel="stylesheet" type="text/css" href="css/activity-widgets/activity-widget-3.css">
    <link rel="stylesheet" type="text/css" href="css/activity-widgets/activity-widget-4.css">
    <link rel="stylesheet" type="text/css" href="css/activity-widgets/activity-widget-5.css">
    <link rel="stylesheet" type="text/css" href="css/activity-widgets/activity-widget-6.css">
    <link rel="stylesheet" type="text/css" href="css/documentation/customization.css">
    <link rel="stylesheet" type="text/css" href="css/documentation/code-structure.css">
    <link rel="stylesheet" type="text/css" href="css/documentation/credits.css">
    <link rel="stylesheet" type="text/css" href="css/documentation/layout.css">
    <link rel="stylesheet" type="text/css" href="css/documentation/styles.css">
    <!-- endbuild -->
</head>
<body class="animated fadeIn" id="dashboards-analytics" data-layout="default-sidebar-1" data-sidebar="success" data-navbar="success" data-controller="dashboards" data-view="analytics">
<nav class="navbar-1">
        <ul class="nav nav-inline navbar-left">
            <li class="nav-item">
                <a class="nav-link toggle-layout" href="#">
                    <i class="material-icons menu">menu</i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link toggle-fullscreen" href="#">
                    <i class="material-icons">fullscreen</i>
                </a>
            </li>
        </ul>
        <span class="welcome">Bienvenido!, <?php echo $nombreUser;?></span>
        <div class="dropdown user-dropdown">
            <a class="dropdown-toggle no-after" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="badge badge-40">
                    <img src="assets/faces/m7.png" class="max-w-40 img-circle" alt="badge" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right from-right">
                <a class="dropdown-item" href="#">
                    <i class="material-icons icon">exit_to_app</i>
                    <span class="title">Salir</span>
                </a>
            </div>
        </div>
    </nav>
    <div class="jumbotron-1">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                
                <h1 class="display-3">Sistema administrativo de prestamos v.1.0</h1>
                
                <button type="button" class="btn btn-primary bmd-btn-fab" data-toggle="dropdown">
				<i class="material-icons icon">dashboard</i>
			</button>
                <div class="dropdown-menu dropdown-menu-right from-right">
                    <a class="dropdown-item" href="#">
                        <i class="material-icons icon">email</i>
                        <span class="title">Inbox</span>
                        <span class="tag tag-pill tag-raised tag-danger tag-xs">New</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="material-icons icon">grade</i>
                        <span class="title">Messages</span>
                        <span class="tag tag-outline-primary tag-rounded tag-xs">5</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="material-icons icon">settings</i>
                        <span class="title">Profile</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="material-icons icon">alarm</i>
                        <span class="title">Lock screen</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="material-icons icon">power_settings_new</i>
                        <span class="title">Logout</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- inicia el container principal -->
<div class="container-fluid">
    <div class="row">
         <div class="left-sidebar-1">
             <div class="wrapper">
                 <!-- contenido del panel de navegacion-->
                 <div class="content">
                    <!-- logotipo -->
                     <div class="logo">
                            <a href="#" class="text">
                               <center><img src="img/logo_w.png" alt="logo_prestamosapp" width=220 style="margin-top:100px;"></center>
                            </a>
                     </div>
                     <div class="left-sidebar-search">
                            <form class="form-inline form-custom">
                                <div class="form-group">
                                    
                                </div>
                            </form>
                        </div>
                    <!-- información del usuario -->
                    <div class="sidebar-heading">
                            <div class="sidebar-image">
                                <img src="assets/faces/m7.png" class="img-circle img-fluid" alt="sidebar-image" />
                            </div>
                            <div class="sidebar-options">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-secondary btn-raised dropdown-toggle" data-toggle="dropdown">
       <?php 
                    echo $ColUser['FirstName'];?>   </a>
                                    <div class="dropdown-menu dropdown-menu-center from-top">
                                        <a class="dropdown-item"href="index.php?page=Settings">
                                            <i class="material-icons icon">settings</i>
                                            <span class="title">Configuración</span>
                                        </a>
                                        <a class="dropdown-item" href="index.php?action=logout">
                                            <i class="material-icons icon">power_settings_new</i>
                                            <span class="title">Salir</span>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="description">
                                    Usuario Activo</div>
                                </div>
                        </div>
                        <!-- /informacion del usuario -->
                         <div class="left-sidebar-section">
                            <div class="section-title">Menu principal</div>
                                <ul class="list-unstyled" id="navigation">
                                    <li>
                                        <button class="btn btn-flat" data-parent="#navigation" onclick="window.location.href='index.php'">
                                            <span class="btn-title">Inicio</span>
                                            <i class="material-icons pull-left icon">home</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#navigation" onclick="window.location.href='index.php?page=Transaction'">
                                            <span class="btn-title">Transacciones</span>
                                            <i class="material-icons pull-left icon">compare_arrows</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#navigation" onclick="window.location.href='index.php?page=AssetReport'">
                                            <span class="btn-title">Ingresos</span>
                                            <i class="material-icons pull-left icon">file_download</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#navigation" onclick="window.location.href='index.php?page=ExpenseReport'">
                                            <span class="btn-title">Salidas</span>
                                            <i class="material-icons pull-left icon">file_upload</i>
                                        </button>
                                    </li>
                                </ul>
                          <div class="left-sidebar-section">   
                                <div class="section-title">Configuración</div>
                                <ul class="list-unstyled" id="configuration">
                                    <li>
                                        <button class="btn btn-flat" data-parent="#configuration" onclick="window.location.href='index.php?page=ManageAccount'">
                                                <span class="btn-title">Cuentas</span>
                                                <i class="material-icons pull-left icon">account_balance</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#configuration" onclick="window.location.href='index.php?page=ManageBudget'">
                                                <span class="btn-title">Presupuesto</span>
                                                <i class="material-icons pull-left icon">account_balance_wallet</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#configuration" onclick="window.location.href='index.php?page=ManageExpenseCategory'">
                                                <span class="btn-title">Categorias Salidas</span>
                                                <i class="material-icons pull-left icon">view_module</i>
                                        </button>
                                    </li>
                                    <li>
                                        <button class="btn btn-flat" data-parent="#configuration" onclick="window.location.href='index.php?page=ManageIncomeCategory'">
                                                <span class="btn-title">Categorias Ingresos</span>
                                                <i class="material-icons pull-left icon">view_list</i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="left-sidebar-section">   
                                <div class="section-title">Reportes</div>
                                    <ul class="list-unstyled" id="reportes">
                                         <li>
                                            <a class="btn btn-flat" href="index.php?page=IncomeVsExpense"><i class="material-icons pull-left icon">assignment</i> <span class="btn-title">Ingresos vs Salidas</span></a>
                                        </li>
                                        <li>
                                            <a class="btn btn-flat" href="index.php?page=AllIncomeReports"><i class="material-icons pull-left icon">assignment</i> <span class="btn-title">Ingresos</span></a>
                                        </li>
                                        <li>
                                            <a class="btn btn-flat" href="index.php?page=AllExpenseReports"><i class="material-icons pull-left icon">assignment</i> <span class="btn-title">Salidas</span></a>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                            
                <!--/contenido panel navegacion -->
                </div>
            </div>
        </div>
    </div>
    <!-- -->   
    <div class="col-xs-12 main">
                <div class="page-on-top">                
       
<script>

$(document).ready(function () {
    $(this).parent().addClass("collapse");
    $(".parent").on('click', function () {
        $(this).parent().find("#subitem").slideToggle();
    });
});

</script>
      
