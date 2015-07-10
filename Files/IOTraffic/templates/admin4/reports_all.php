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
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.php">
			<img src="../../assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		<div class="page-actions">
			<div class="btn-group">
				<button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<span class="hidden-sm hidden-xs">חדש&nbsp;</span><i class="fa fa-angle-down"></i>
				</button>
				<ul class="dropdown-menu" role="menu">
					<li>
						<a href="#">
						<i class="icon-docs"></i> יצירת אירוע </a>
					</li>
					<!--
					<li class="divider">
					</li>
					<li>
						<a href="#">
						<i class="icon-flag"></i> תגובות <span class="badge badge-success">4</span>
						</a>
					</li>
					<li>
						<a href="#">
						<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
						</a>
					</li>
					-->
				</ul>
			</div>
		</div>
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION-Police DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="fa fa-empire"></i>
						<span class="badge badge-success">
						7 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">7 ארועי משטרה </span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">הרגע</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-minus-circle"></i>
										</span>
										תאונת שרשרת בכביש 70 </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">15 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										מסיבת רחוב - דיזינגוף ת"א"  </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">שעתיים</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										הפגנה בירושלים </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 שעות</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										תאונה בכביש 90 </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION-Police DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION-MDA DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="fa fa-ambulance"></i>
						<span class="badge badge-success">
						2 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">2 ארועי מד"א</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">27 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										תאונה בכביש 70 </span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">31 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										תאונה בכביש 90 </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION-MDA DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION-Fire DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="fa fa-fire-extinguisher"></i>
						<span class="badge badge-success">
						2 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">2 ארועי כיבוי אש</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">10 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										שריפה ברחוב המלך דוד</span>
										</a>
									</li>
									<li>
										<a href="javascript:;">
										<span class="time">56 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										כיבוי שריפה ביער אדם </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION-Fire DROPDOWN -->
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION-Town DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="fa fa-building"></i>
						<span class="badge badge-success">
						1 </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold">1 ארועי עירייה</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<li>
										<a href="javascript:;">
										<span class="time">12 דקות</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										חסימת רחוב קלויזנר </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION-Town DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-user dropdown-dark">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<span class="username username-hide-on-mobile">
						דולב </span>
						<!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
						<img alt="" class="img-circle" src="../../assets/admin/layout4/img/avatar9.jpg"/>
						</a>
												<ul class="dropdown-menu dropdown-menu-default">
							<li>
								<a href="extra_profile.html">
								<i class="icon-user"></i> הפרופיל שלי </a>
							</li>
							<li>
								<a href="page_todo.html">
								<i class="icon-rocket"></i> המשימות שלי <span class="badge badge-success">
								7 </span>
								</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="extra_lock.html">
								<i class="icon-lock"></i> נעילת מסך </a>
							</li>
							<li>
								<a href="login.html">
								<i class="icon-key"></i> יציאה </a>
							</li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start">
					<a href="index.php">
					<i class="icon-home"></i>
					<span class="title">מסך הבית</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bulb"></i>
					<span class="title">רמזורים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							<i class="icon-home"></i>
							כל הרמזורים
							</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-plus"></i>
							הוספת רמזור</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת רמזור
							</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת רמזור
							</a>
						</li>
					</ul>
				</li>
								<li>
					<a href="javascript:;">
					<i class="icon-target"></i>
					<span class="title">צמתים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							<i class="icon-home"></i>
							כל הצמתים</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-plus"></i>
							הוספת צומת</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת צומת
							</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת צומת
							</a>
						</li>					
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-camcorder"></i>
					<span class="title">מצלמות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							<i class="icon-home"></i>
							כל המצלמות</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-plus"></i>
							הוספת מצלמה</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת מצלמה
							</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת מצלמה
							</a>
						</li>
					</ul>
				</li>
				<li class="open active">
					<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">דוחות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li class="active">
							<a href="#">
							<i class="icon-home"></i>
							כל הדוחות</a>
						</li>
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח ארועים</a>
						</li>	
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח טיפול בעומסים</a>
						</li>	
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח זמני עומסים</a>
						</li>							
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-bell"></i>
					<span class="title">ארועים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="#">
							<i class="icon-home"></i>
							כל הארועים</a>
						</li>
						<li>
							<a href="#">
							<i class="icon-check"></i>
							ארועים ממתינים לאישור</a>
						</li>	
						<li>
							<a href="#">
							<i class="fa fa-history"></i>
							הסטוריית ארועים</a>
						</li>							
					</ul>
				</li>				
				<li class="last">
					<a href="javascript:;">
					<i class="icon-pointer"></i>
					<span class="title">מפות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="maps_google.html">
							מפת תנועה</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
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
				<div class="tile bg-green-meadow">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 דו"ח כלל ארועים
						</div>
						<div class="number">
						</div>
					</div>
				</div>				
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
				<div class="tile double bg-green">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 דו"ח זמני עומסים
						</div>
						<div class="number">
						</div>
					</div>
				</div>
				<div class="tile bg-green">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 דו"ח בלה בלה
						</div>
						<div class="number">
						</div>
					</div>
				</div>
				<div class="tile double bg-green">
					<div class="tile-body">
						<i class="fa fa-bar-chart-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 דו"ח בלה בלה 2
						</div>
						<div class="number">
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; IOTraffic
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
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