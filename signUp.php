<?php
$msgBox = '';
//include notification page
include('includes/notification.php');
//Include Function page
include('includes/Functions.php');
include('includes/db.php');
//User Signup
if(isset($_POST['signup'])){
	if($_POST['email'] == '' || $_POST['firstname'] == '' || $_POST['lastname'] == '' || $_POST['password'] == '' || $_POST['rpassword'] == '') {
				$msgBox = alertBox($SignUpEmpty);
			} else if($_POST['password'] != $_POST['rpassword']) {
				$msgBox = alertBox($PwdNotSame);

			} else {
				// Set new account
				$Email 		= $mysqli->real_escape_string($_POST['email']);
				$Password 	= encryptIt($_POST['password']);
				$FirstName	= $mysqli->real_escape_string($_POST['firstname']);
				$LastName	= $mysqli->real_escape_string($_POST['lastname']);
				$Currency	= $mysqli->real_escape_string($_POST['currency']);
				$privilegios = 0;

				//Check if already register

				$sql="Select Email from user Where Email = '$Email'";

				 $c= mysqli_query($mysqli, $sql);

                    if (mysqli_num_rows($c) >= 1) {

                        $msgBox = alertBox($AlreadyRegister);
                    }
                    else{

				// add new account
				$sql="INSERT INTO user (FirstName, LastName, Email, Password, Currency, privilegios) VALUES (?,?,?,?,?,?)";
				if($statement = $mysqli->prepare($sql)){
					//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
					$statement->bind_param('ssssss', $FirstName, $LastName, $Email, $Password, $Currency, $privilegios);
					$statement->execute();
				}
				$msgBox = alertBox($SuccessAccount);
				}
			}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sistema de Prestamos | Registro</title>

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
<body id="pages-sign-up">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 main">
                
              <form class="sign-up form-success" method="post" action="" role="form">
                            <center><img src="img/logo_prestamosapp.png" alt="logo_prestamosapp" width=300>
                    <p>
                        Por favor ingrese su información personal.
                    </p></center>
                    <?php if ($msgBox) { echo $msgBox; } ?>
                    <div class="form-group">
                        <label class="bmd-label-floating">Correo Electrónico</label>
                        <input class="form-control" name="email" type="email" autofocus>
                        <span class="bmd-help">Ingresa tu correo electrónico</span>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Nombre(s)</label>
                        <input class="form-control" name="firstname" type="text" >
                        <span class="bmd-help">Ingresa tu nombre(s)</span>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Appelidos</label>
                        <input class="form-control" name="lastname" type="text" >
                        <span class="bmd-help">Ingresa tus apellidos</span>
                    </div>
                    <div class="form-group">
                        <label class="bmd-label-floating">Moneda</label>
                        <select class="form-control"  name="currency" data-selectize>
							<option value="MX$">Peso Mexicano(MX$)</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label class="bmd-label-floating">Contraseña</label>
                        <input class="form-control" name="password" type="password" value="">
                        <span class="bmd-help">Ingresa una contraseña</span>
                    </div>
                     <div class="form-group">
                        <label class="bmd-label-floating">Confirmar Contraseña</label>
                        <input class="form-control" name="rpassword" type="password" value="">
                        <span class="bmd-help">Ingresa la misma contraseña</span>
                    </div>
                    <button type="submit" name="signup" class="btn btn-raised btn-lg btn-success btn-block"><span class="glyphicon glyphicon-log-in"></span> CREAR CUENTA</button>
                    <p class="sign-up-link">Ya tengo una cuenta <a href="login.php">Ingresar aquí</a></p>
                    <p class="copyright">&copy; Copyright 2016</p>
                 </form>
                    
            </div>
        </div>
    </div>

   <!-- build:js js/vendor.js -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/lodash/dist/lodash.min.js"></script>
    <script src="components/scripts/modernizr.js"></script>
    <script src="bower_components/tether/dist/js/tether.js"></script>
    <script src="bower_components/jquery-storage-api/jquery.storageapi.min.js"></script>
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="bower_components/d3/d3.js"></script>
    <script src="bower_components/peity/jquery.peity.min.js"></script>
    <script src="bower_components/mousetrap/mousetrap.js"></script>
    <script src="bower_components/bootstrap-material-design/dist/bootstrap-material-design.iife.js"></script>
    <script src="bower_components/chartist/dist/chartist.min.js"></script>
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    <script src="bower_components/nvd3/build/nv.d3.js"></script>
    <script src="bower_components/echarts/dist/echarts.min.js"></script>
    <script src="bower_components/topojson/topojson.min.js"></script>
    <script src="bower_components/datamaps/dist/datamaps.all.js"></script>
    <script src="bower_components/jquery.countdown/dist/jquery.countdown.js"></script>
    <script src="bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="components/scripts/highlight.min.js"></script>
    <script src="bower_components/table-export/tableExport.js"></script>
    <script src="bower_components/table-export/jquery.base64.js"></script>
    <script src="bower_components/table-export/jspdf/libs/sprintf.js"></script>
    <script src="bower_components/table-export/jspdf/jspdf.js"></script>
    <script src="bower_components/table-export/jspdf/libs/base64.js"></script>
    <script src="bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/toastr/toastr.min.js"></script>
    <script src="bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="bower_components/jquery-fullscreen/jquery.fullscreen-min.js"></script>
    <script src="bower_components/summernote/dist/summernote.js"></script>
    <script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="bower_components/counter-up/jquery.counterup.min.js"></script>
    <script src="bower_components/velocity/velocity.js"></script>
    <script src="bower_components/velocity/velocity.ui.js"></script>
    <script src="bower_components/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="components/scripts/enhance.js"></script>
    <script src="bower_components/particles.js/particles.min.js"></script>
    <!-- endbuild -->
    <!-- build:js js/main.js -->
    <script src="scripts/functions.js"></script>
    <script src="scripts/app.js"></script>
    <script src="scripts/left-sidebar.js"></script>
    <script src="scripts/navbar-1.js"></script>
    <script src="scripts/navbar-3.js"></script>
    <script src="scripts/charts/peity.js"></script>
    <script src="scripts/charts/chart-js.js"></script>
    <script src="scripts/charts/chartist.js"></script>
    <script src="scripts/charts/morris.js"></script>
    <script src="scripts/charts/nvd3.js"></script>
    <script src="scripts/charts/echarts.js"></script>
    <script src="scripts/jumbotron/jumbotron-3.js"></script>
    <script src="scripts/maps/vector-maps.js"></script>
    <script src="scripts/maps/google-maps.js"></script>
    <script src="scripts/icons/material-design-icons.js"></script>
    <script src="scripts/icons/font-awesome.js"></script>
    <script src="scripts/icons/flags.js"></script>
    <script src="scripts/icons/ionicons.js"></script>
    <script src="scripts/icons/weather-icons.js"></script>
    <script src="scripts/tables/default.js"></script>
    <script src="scripts/tables/table-export.js"></script>
    <script src="scripts/tables/datatable.js"></script>
    <script src="scripts/dashboards/geographic.js"></script>
    <script src="scripts/dashboards/analytics.js"></script>
    <script src="scripts/ui/counters.js"></script>
    <script src="scripts/pages/index.js"></script>
    <script src="scripts/ui/notify.js"></script>
    <script src="scripts/ui/tooltips.js"></script>
    <script src="scripts/ui/popovers.js"></script>
    <script src="scripts/ui/sweet-alert.js"></script>
    <script src="scripts/ui/toastr.js"></script>
    <script src="scripts/charts/easy-pie-chart.js"></script>
    <script src="scripts/editors/summernote.js"></script>
    <script src="scripts/extras/elevate-zoom.js"></script>
    <script src="scripts/extras/syntax-highlighting.js"></script>
    <!-- endbuild -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=weather,visualization,panoramio&key=AIzaSyDRuAzjz4dLpeQnvW4D8qZ7mX-G0pAZEcI"></script>
</body>
</html>
