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
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="../../assets/admin/pages/css/invoice-rtl.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="../../assets/global/css/components-rounded-rtl.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="../../assets/global/css/plugins-rtl.css" rel="stylesheet" type="text/css"/>
<link href="../../assets/admin/layout4/css/layout-rtl.css" rel="stylesheet" type="text/css"/>
<link id="style_color" href="../../assets/admin/layout4/css/themes/light-rtl.css" rel="stylesheet" type="text/css"/>
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
<body class="page-header-fixed page-sidebar-closed-hide-logo ">
<!-- BEGIN DB -->
<?php include 'views\DataBase.php';?>
<!-- END DB -->

<!-- BEGIN HEADER -->
<?php include 'views\header.php';?>
<!-- END HEADER -->

<div class="clearfix"></div>

<!-- Traffic Light ID -->
<?php
$trafficLight_id = 1 ;
?>

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
				<li class="active">
					<a href="javascript:;">
					<i class="icon-bulb"></i>
					<span class="title">רמזורים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="traffic_light_all.php">
							<i class="icon-home"></i>
							כל הרמזורים
							</a>
						</li>
						<li>
							<a href="traffic_light_add.php">
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
							<a href="crossroad_all.php">
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
							<a href="camera_all.php">
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
							<a href="reports_all.php">
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
							<a href="events_all.php">
							<i class="icon-home"></i>
							כל הארועים</a>
						</li>
						<li>
							<a href="event_new.php">
							<i class="icon-plus"></i>
							יצירת אירוע חדש</a>
						</li>
						<li>
							<a href="events_active.php">
							<i class="icon-check"></i>
							ארועים פעילים</a>
						</li>					
						<li>
							<a href="events_pending_open.php">
							<i class="fa fa-clock-o"></i>
							ארועים ממתינים לאישור</a>
						</li>						
						<li>
							<a href="events_history.php">
							<i class="fa fa-history"></i>
							ארועים היסטוריים</a>
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
							<a href="maps_live.php">
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
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>רמזור #<?php echo $trafficLight_id ?> </h1>
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
					<a href="#">ארועים</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">רמזור #<?php echo $trafficLight_id ?></a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="invoice">
						<div class="row invoice-logo">
							<div class="col-xs-2" align="center">
							<!--<img src="../../assets/admin/layout4/img/right-left2.jpg" alt=""/>-->
								<!--<img src="../../assets/admin/layout4/img/traffic-lights2.jpg" class="img-responsive" alt="" style="margin-top: 12px;" />-->
								<?php 
									if (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'RED' )
									{
										echo '<img src="../../assets/admin/layout4/img/traffic-lights-RED.jpg" class="img-responsive" alt="" />';
									}
									elseif (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'RED-YELLOW' )
									{
										echo '<img src="../../assets/admin/layout4/img/traffic-lights-RED-YELLOW.jpg" class="img-responsive" alt="" />';
									}
									elseif (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'YELLOW' )
									{
										echo '<img src="../../assets/admin/layout4/img/traffic-lights-YELLOW.jpg" class="img-responsive" alt="" />';	
									}
									elseif (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'FLASHING-YELLOW' )
									{
										echo '<img src="../../assets/admin/layout4/img/traffic-lights-FLASHING-YELLOW.gif" class="img-responsive" alt="" />';	
									}
									elseif (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'GREEN' )
									{
										echo '<img src="../../assets/admin/layout4/img/traffic-lights-GREEN.jpg" class="img-responsive" alt="" />';	
									}									
								?>								
								<br>
								<p style="text-align: center;">
<?php
									if (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'GREEN' )
									{
										echo '<a class="btn btn-lg red hidden-print margin-bottom-5" onclick="javascript;">' ;
										echo 'החלף רמזור לאדום' ;
										echo '</a>' ;
									}
									elseif (mysql_result(mysql_query("SELECT trafficLight_Status from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'RED' )
									{
										echo '<a class="btn btn-lg green hidden-print margin-bottom-5" onclick="javascript;">' ;
										echo 'החלף רמזור לירוק' ;
										echo '</a>' ;
									}									
?>
								</p>								
								
							</div>								
							<div class="col-xs-4">
								<br><br>
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-bulb"></i>פרטי רמזור
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<ul>
												<li>
													<strong>מספר רמזור: </strong> <?php echo mysql_result(mysql_query("SELECT id_trafficLight from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>
												<li>
													 <strong>כיוון: </strong> <?php echo mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>
												<li>
													 <strong>שטח שיפוט: </strong> <?php echo mysql_result(mysql_query("SELECT trafficLight_Admin from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>
												<li>
													 <strong>פרסה: </strong> <?php echo mysql_result(mysql_query("SELECT u_turn from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>
												<li>
													 <strong>רמזור להולכי רגל:  </strong> <?php echo mysql_result(mysql_query("SELECT trafficLight_Pedestrians from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>												
												<li>
													 <strong>צומת:  </strong> <?php echo mysql_result(mysql_query("SELECT id_crossRoad from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>
												<li>
													 <strong>מיקום:  </strong> <?php echo mysql_result(mysql_query("SELECT id_location from traffic_light where id_trafficLight=$trafficLight_id",$connection),0); ?>
												</li>												
										</ul>
									</div>
								</div>	
								<br>
								<p style="text-align: center;">
								<?php
								if (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ישר' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Straight.jpg" alt=""/>';
									}
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ישר או ימינה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Straight_or_Right.jpg" alt=""/>';
									}
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ישר או שמאלה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Straight_or_Left.jpg" alt=""/>';
									}		
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ימינה לפני התמרור' )
									{
										echo ' <img src="../../assets/admin/layout4/img/RightBefore.jpg" alt=""/>';
									}
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ימינה אחרי התמרור' )
									{
										echo ' <img src="../../assets/admin/layout4/img/RightAfter.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'שמאלה לפני התמרור' )
									{
										echo ' <img src="../../assets/admin/layout4/img/LeftBefore.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'שמאלה אחרי התמרור' )
									{
										echo ' <img src="../../assets/admin/layout4/img/LeftAfter.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ימינה או שמאלה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Right_or_Left.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ישר או פרסה ימינה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Straight_or_uturnRight.jpg" alt=""/>';
									}
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'ישר או פרסה שמאלה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/Straight_or_uturnLeft.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'פרסה ימינה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/uturn_Right.jpg" alt=""/>';
									}	
								elseif (mysql_result(mysql_query("SELECT trafficLight_Direction from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'פרסה שמאלה' )
									{
										echo ' <img src="../../assets/admin/layout4/img/uturn_Left.jpg" alt=""/>';
									}	
									
	
								if (mysql_result(mysql_query("SELECT u_turn from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'לא' )
									{
										echo ' <img src="../../assets/admin/layout4/img/u-turn-NO.jpg" alt="אין פרסה"/>';
									}
								if (mysql_result(mysql_query("SELECT trafficLight_Pedestrians from traffic_light where id_trafficLight=$trafficLight_id",$connection),0) == 'כן' )
									{
										echo ' <img src="../../assets/admin/layout4/img/walk-trafficLight.jpg" alt="רמזור הולכי רגל"/>';
									}								
								?>
								
								</p>
							</div>
							<div class="col-xs-6">
							<br><br>
								<!-- BEGIN GEOCODING PORTLET-->
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-pointer"></i>מיקום הרמזור
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
										<!--
										<form class="form-inline margin-bottom-10" action="#">
											<div class="input-group">
												<input type="text" class="form-control" id="gmap_geocoding_address" placeholder="חפש כתובת...">
												<span class="input-group-btn">
												<button class="btn blue" id="gmap_geocoding_btn"><i class="fa fa-search"></i>
												</span>
											</div>
										</form>
										-->
										<div id="map-canvas" class="gmaps" style="height: 300px;"></div> <!-- dolev -->
									</div>
								</div>
								<!-- END GEOCODING PORTLET-->								
							</div>								
						</div>
						<hr/>
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&language=he"></script> <!-- dolev -->
<script src="../../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>

<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/maps-google.js" type="text/javascript"></script>

<script> <!-- dolev -->
function initialize() {
  var myLatlng = new google.maps.LatLng(32.085300, 34.781768);
  var mapOptions = {
    zoom: 18,
    center: myLatlng
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

//-------------------------------------------------------
var marker=new google.maps.Marker({
  position: new google.maps.LatLng(32.085300, 34.781768),
  icon:'Traffic_L_iconRED.png'
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"רמזור 1"
  });

google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });  

//-------------------------------------------------------
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
MapsGoogle.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>