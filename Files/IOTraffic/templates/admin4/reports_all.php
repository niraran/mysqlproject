<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.3
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>IOTraffic | Smart Traffic</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components-rounded-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout4/css/themes/light-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN DB -->
<?php include 'views\DataBase.php';?>
<!-- END DB -->

<!-- BEGIN HEADER -->
<?php include 'views\header.php';?>
<!-- END HEADER -->

<div class="clearfix"></div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $Primary = 5; $Secondary = 5.1; include 'views\Menu.php'; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>כל הדוחות</h1>
				</div>
				<!-- END PAGE TITLE -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="index.php">מסך הבית</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">דוחות</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">כל הדוחות</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="tiles">
				<a href="report_events_all.php">
					<div class="tile bg-green-meadow">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח כלל הארועים
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_police.php">
					<div class="tile double bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח ארועי משטרה
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_mda.php">
					<div class="tile double bg-red-intense">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח ארועי מגן דוד אדום
							</div>
							<div class="number">
							</div>
						</div>
					</div>	
				</a>	
				<a href="report_events_fire.php">				
					<div class="tile double bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח ארועי כיבוי אש
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_municipality.php">
					<div class="tile double bg-purple-intense">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח ארועי עירייה
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_traffic.php">				
					<div class="tile bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח טיפול בעומסים
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_accident.php">
					<div class="tile double bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח תאונות
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_sport.php">
					<div class="tile bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח ארועי ספורט
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
				<a href="report_events_street.php">
					<div class="tile double bg-green">
						<div class="tile-body">
							<i class="fa fa-bar-chart-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 דו"ח חסימות רחוב
							</div>
							<div class="number">
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'views\footer.php';?>
<!-- END FOOTER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="../../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../../assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script>
jQuery(document).ready(function() {       
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>