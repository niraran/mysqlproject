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
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Metronic | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="../../assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="../../assets/admin/pages/css/tasks-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="../../assets/global/css/components-rounded-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/themes/light-rtl.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="../../assets/admin/layout4/css/custom-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
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
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
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
				<li class="start active ">
					<a href="index.html">
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
				<li>
					<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">דוחות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
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
							<i class="fa fa-bar-chart-o"></i>
							ארועים ממתינים לאישור</a>
						</li>	
						<li>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							הסטוריית ארועים</a>
						</li>							
					</ul>
				</li>				
				<li class="last ">
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
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>מסך הבית <small>סטטיסטיקות & קיצורי דרך</small></h1>
				</div>
				<!-- END PAGE TITLE -->
				<!-- BEGIN PAGE TOOLBAR -->
				<div class="page-toolbar">
					<!-- BEGIN THEME PANEL -->
					<div class="btn-group btn-theme-panel">
						<a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
						<i class="icon-settings"></i>
						</a>
						<div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<h3>THEME</h3>
									<ul class="theme-colors">
										<li class="theme-color theme-color-default" data-theme="default">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Dark Header</span>
										</li>
										<li class="theme-color theme-color-light active" data-theme="light">
											<span class="theme-color-view"></span>
											<span class="theme-color-name">Light Header</span>
										</li>
									</ul>
								</div>
								<div class="col-md-8 col-sm-8 col-xs-12 seperator">
									<h3>LAYOUT</h3>
									<ul class="theme-settings">
										<li>
											 Theme Style
											<select class="layout-style-option form-control input-small input-sm">
												<option value="square">Square corners</option>
												<option value="rounded" selected="selected">Rounded corners</option>
											</select>
										</li>
										<li>
											 Layout
											<select class="layout-option form-control input-small input-sm">
												<option value="fluid" selected="selected">Fluid</option>
												<option value="boxed">Boxed</option>
											</select>
										</li>
										<li>
											 Header
											<select class="page-header-option form-control input-small input-sm">
												<option value="fixed" selected="selected">Fixed</option>
												<option value="default">Default</option>
											</select>
										</li>
										<li>
											 Top Dropdowns
											<select class="page-header-top-dropdown-style-option form-control input-small input-sm">
												<option value="light">Light</option>
												<option value="dark" selected="selected">Dark</option>
											</select>
										</li>
										<li>
											 Sidebar Mode
											<select class="sidebar-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
										<li>
											 Sidebar Menu
											<select class="sidebar-menu-option form-control input-small input-sm">
												<option value="accordion" selected="selected">Accordion</option>
												<option value="hover">Hover</option>
											</select>
										</li>
										<li>
											 Sidebar Position
											<select class="sidebar-pos-option form-control input-small input-sm">
												<option value="left" selected="selected">Left</option>
												<option value="right">Right</option>
											</select>
										</li>
										<li>
											 Footer
											<select class="page-footer-option form-control input-small input-sm">
												<option value="fixed">Fixed</option>
												<option value="default" selected="selected">Default</option>
											</select>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- END THEME PANEL -->
				</div>
				<!-- END PAGE TOOLBAR -->
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="#">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-blue-sharp">7</h3>
								<small>משטרה</small>
							</div>
							<div class="icon">
								<i class="fa fa-empire"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success blue-sharp">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<!--
								<div class="status-title">
									 צפה בהכל
								</div>
								-->
								<div class="status-number">
								<a href="#" > צפה בהכל </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-red-haze">2</h3>
								<small>מגן דוד אדום</small>
							</div>
							<div class="icon">
								<i class="fa fa-ambulance"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success red-haze">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<!--
								<div class="status-title">
									 change
								</div>
								-->
								<div class="status-number">
									 <a href="#" > צפה בהכל </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-green-sharp">2</h3>
								<small>מכבי אש</small>
							</div>
							<div class="icon">
								<i class="fa fa-fire-extinguisher"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success green-sharp">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<!--
								<div class="status-title">
									 grow
								</div>
								-->
								<div class="status-number">
									 <a href="#" > צפה בהכל </a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="dashboard-stat2">
						<div class="display">
							<div class="number">
								<h3 class="font-purple-soft">1</h3>
								<small>עיריה</small>
							</div>
							<div class="icon">
								<i class="fa fa-building"></i>
							</div>
						</div>
						<div class="progress-info">
							<div class="progress">
								<span style="width: 100%;" class="progress-bar progress-bar-success purple-soft">
								<span class="sr-only"></span>
								</span>
							</div>
							<div class="status">
								<!--
								<div class="status-title">
									 change
								</div>
								-->
								<div class="status-number">
									 <a href="#" > צפה בהכל </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- BEGIN PAGE CONTENT-->
			<div class="tiles" style="margin-right: 60px;" >
				<div class="tile bg-green-meadow">
					<div class="tile-body">
						<i class="icon-bulb"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 רמזורים
						</div>
						<div class="number">
						</div>
					</div>
				</div>				
				<div class="tile bg-purple-studio">
					<div class="tile-body">
						<i class="icon-target"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 צמתים
						</div>
						<div class="number">
						</div>
					</div>
				</div>
				<div class="tile bg-red-intense">
					<div class="tile-body">
						<i class="icon-camcorder"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 מצלמות
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
							 דוחות
						</div>
						<div class="number">
						</div>
					</div>
				</div>
				<div class="tile double bg-blue-hoki">
					<div class="tile-body">
						<i class="fa fa-bell-o"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 ארועים
						</div>
						<div class="number">
							 16
						</div>
					</div>
				</div>				
				<div class="tile double bg-blue-steel">
					<div class="tile-body">
						<i class="icon-pointer"></i>
					</div>
					<div class="tile-object">
						<div class="name">
							 מפות
						</div>
						<div class="number">
						</div>
					</div>
				</div>			
			</div>
			<!-- END PAGE CONTENT-->			
			
			
			
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>ארועים ממתינים לאישור
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">

									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">כלים <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="#">
													הדפסה </a>
												</li>
												<li>
													<a href="#">
													שמור ל-PDF </a>
												</li>
												<li>
													<a href="#">
													ייצא ל-Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr>
								<th>
									 שם האירוע
								</th>
								<th>
									 תיאור האירוע
								</th>
								<th>
									 יוזם האירוע
								</th>
								<th>
									 שעת פתיחה
								</th>
								<th>
									 מיקום
								</th>								
								<th>
									 אישור אירוע
								</th>
								<th>
									 דחיית אירוע
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									 תאונת שרשרת בכביש 70
								</td>
								<td>
									 תאונה קשה בכביש 70, נשמח לפינוי התנועה בציר לשעה הקרובה לשם פינוי המכוניות.
								</td>
								<td>
									 משטרה
								</td>
								<td class="center">
									 14:40
								</td>
								<td>
									<a href="#"> 32.591691,34.939538 </a>
								</td>								
								<td>
									<button class="btn btn-sm green"><i class="fa fa fa-check"></i> אישור</button>
								</td>
								<td>
									<button class="btn btn-sm red"><i class="fa fa-times"></i> דחייה</button>
								</td>
							</tr>
							<tr>
								<td>
									חסימת רחוב רלויזנר, בת-ים
								</td>
								<td>
									 חסימת רחוב קלויזנר לצורך שיפוצים.
								</td>
								<td>
									 עיריית בת-ים
								</td>
								<td class="center">
									 15:20
								</td>
								<td>
									 <a href="#">32.023432,34.750947 </a>
								</td>								
								<td>
									<button class="btn btn-sm green"><i class="fa fa fa-check"></i> אישור</button>
								</td>
								<td>
									<button class="btn btn-sm red"><i class="fa fa-times"></i> דחייה</button>
								</td>
							</tr>
							<tr>
								<td>
									 מסיבת רחוב בדיזינגוף ת"א
								</td>
								<td>
									 סגירת רחוב דיזינגוף לצורך מסיבת רחוב  מהשעה 10:00 בבוקר עד 19:00 בערב.
								</td>
								<td>
									 עיריית תל אביב
								</td>
								<td class="center">
									 16:00
								</td>
								<td>
									 <a href="#">32.086838,34.774883 </a>
								</td>								
								<td>
									<button class="btn btn-sm green"><i class="fa fa fa-check"></i> אישור</button>
								</td>
								<td>
									<button class="btn btn-sm red"><i class="fa fa-times"></i> דחייה</button>
								</td>
							</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<!-- BEGIN GEOCODING PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-pointer"></i>מפת תנועה בזמן אמת
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<form class="form-inline margin-bottom-10" action="#">
								<div class="input-group">
									<input type="text" class="form-control" id="gmap_geocoding_address" placeholder="חפש כתובת...">
									<span class="input-group-btn">
									<button class="btn blue" id="gmap_geocoding_btn"><i class="fa fa-search"></i>
									</span>
								</div>
							</form>
							<!--<div id="gmap_geocoding" class="gmaps">-->
							</div> <!-- dolev -->
							<div id="map-canvas" class="gmaps" style="height: 260px;"></div> <!-- dolev -->
						</div>
					</div>
					<!-- END GEOCODING PORTLET-->
				</div>			
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include 'views\footer.php';?>
<!-- END FOOTER -->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--
<script src="../../assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
-->
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="../../assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="../../assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&language=he"></script> <!-- dolev -->
<script src="../../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/maps-google.js" type="text/javascript"></script>

<script> <!-- dolev -->
function initialize() {
  var myLatlng = new google.maps.LatLng(32.085300, 34.781768);
  var mapOptions = {
    zoom: 12,
    center: myLatlng
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features 
    Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>