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


<?php
$param1 = $_GET['EVT']; //GET Event id

$event_id = $param1 ;
//$event_id = 8 ;

$myvalue = mysql_result(mysql_query("SELECT startTime from events where id_event=$event_id",$connection),0);
$datetime = new DateTime($myvalue);
$event_date = $datetime->format('d/m/Y');
$event_time = $datetime->format('H:i:s');

$myvalueEnd = mysql_result(mysql_query("SELECT endTime from events where id_event=$event_id",$connection),0);
$datetimeEnd = new DateTime($myvalueEnd);
$event_dateEnd = $datetimeEnd->format('d/m/Y');
$event_timeEnd = $datetimeEnd->format('H:i:s');	

?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $Primary = 6; $Secondary = 0; include 'views\Menu.php'; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>פירוט אירוע</h1>
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
					<a href="#">פירוט אירוע</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet light">
				<div class="portlet-body">
					<div class="invoice">
						<div class="row invoice-logo">
							<div class="col-xs-1" align="center">
								<?php 
									if (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'POLICE' )
									{
										echo '<img src="../../assets/admin/layout4/img/avatar_police.jpg" class="img-responsive" alt="" style="margin-top: 12px;" />';
									}
									elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'MDA' )
									{
										echo '<img src="../../assets/admin/layout4/img/avatar_mda.jpg" class="img-responsive" alt="" style="margin-top: 12px;" />';	
									}
									elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'FIRE' )
									{
										echo '<img src="../../assets/admin/layout4/img/avatar_fire.jpg" class="img-responsive" alt="" style="margin-top: 12px;" />';	
									}
									elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'MUNICIPALITY' )
									{
										echo '<img src="../../assets/admin/layout4/img/avatar_municipality.jpg" class="img-responsive" alt="" style="margin-top: 12px;" />';	
									}
								?>
							</div>								
							<div class="col-xs-6">
								<p style="text-align: right;">
									<?php echo mysql_result(mysql_query("SELECT eventName from events where id_event=$event_id",$connection),0); ?>
									<span class="muted">
									<?php echo mysql_result(mysql_query("SELECT eventDescription from events where id_event=$event_id",$connection),0); ?>
									</span>
								</p>
							</div>
							<div class="col-xs-3">
								<p style="text-align: right;">
									מספר אירוע:
									<?php echo '#'.$event_id ; ?>
								</p>
							</div>	
							<div class="col-xs-2">
								<p style="text-align: center;">
										<?php 
											if (mysql_result(mysql_query("SELECT eventStatus from events where id_event=$event_id",$connection),0) == 'open' )
											{
												echo '<a class="btn btn-lg green hidden-print margin-bottom-5" style="opacity: 1;" disabled>' ;
												echo 'אירוע פעיל <i class="fa fa-check"></i>' ;
												echo '</a>' ;
											}
											elseif (mysql_result(mysql_query("SELECT eventStatus from events where id_event=$event_id",$connection),0) == 'pending' )
											{
												echo '<a class="btn btn-lg yellow hidden-print margin-bottom-5" style="opacity: 1;" disabled>' ;
												echo 'אירוע ממתין לאישור <i class="fa fa-clock-o"></i>' ;
												echo '</a>' ;		
											}
											elseif (mysql_result(mysql_query("SELECT eventStatus from events where id_event=$event_id",$connection),0) == 'close' )
											{
												echo '<a class="btn btn-lg red hidden-print margin-bottom-5" style="opacity: 1;" disabled>' ;
												echo 'אירוע סגור <i class="fa fa-history"></i>' ;
												echo '</a>' ;		
											}
											
										?>	
								
								<!--
									<a class="btn btn-lg green hidden-print margin-bottom-5" style="opacity: 1;" disabled>
									אירוע פעיל <i class="fa fa-check"></i>
									</a>
								-->
								</p>
							</div>								
						</div>
						<hr/>
						<div class="row">
							<div class="col-xs-4">
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>פרטי האירוע
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<ul>
												<li>
													<strong>יוזם: </strong> <?php echo mysql_result(mysql_query("SELECT eventOpenBy from events where id_event=$event_id",$connection),0); ?>
												</li>
												<li>
													 <strong>סוג: </strong> <?php echo mysql_result(mysql_query("SELECT eventType from events where id_event=$event_id",$connection),0); ?>
												</li>
												<li>
													 <strong>שעת פתיחה: </strong> <?php echo $event_time ; ?>
												</li>
												<li>
													 <strong>תאריך פתיחה: </strong> <?php echo $event_date ; ?>
												</li>
										<?php 
											if (mysql_result(mysql_query("SELECT eventStatus from events where id_event=$event_id",$connection),0) == 'close' )
											{
												echo '<li>';
												echo 	'<strong>שעת סגירה: </strong> '.$event_timeEnd ;
												echo '</li>';
												echo '<li>';
												echo 	'<strong>תאריך סגירה: </strong> '.$event_dateEnd ;
												echo '</li>';
											}
										?>	
												<li>
													 <strong>מיקום: </strong>
													<?php
														$location_id = mysql_result(mysql_query("SELECT id_location from events where id_event=$event_id",$connection),0);
														$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
														$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;
														echo '<a href="https://maps.google.com/?q='.$lat.','.$lng.'" dir="ltr" target="_blank">'.$lat.','.$lng.'</a>' ;
													 ?>		
												</li>
										</ul>
									</div>
								</div>		
								<br/>
								<p align="center">
									<a class="btn btn-lg blue hidden-print margin-bottom-5" onclick="javascript:window.print();">
									הדפס דוח אירוע <i class="fa fa-print"></i>
									</a>
									<!--
									<a class="btn btn-lg green hidden-print margin-bottom-5">
									אירוע פעיל <i class="fa fa-check"></i>
									</a>
									<a class="btn btn-lg yellow hidden-print margin-bottom-5">
									אירוע ממתין לאישור <i class="fa fa-check"></i>
									</a>
									-->
									<?php	
											if (mysql_result(mysql_query("SELECT eventStatus from events where id_event=$event_id",$connection),0) == 'open' )
											{
												echo '<br><br>' ;
												echo '<a href="query/CLOSE_EVT.php?param1='.$event_id.'&amp;param2=close" class="btn btn-lg red hidden-print margin-bottom-5" style="opacity: 1;">' ;
												echo 'סגירת אירוע <i class="fa fa-history"></i>' ;
												echo '</a>' ;
											}	
									?>
								</p>								
							</div>
							<div class="col-xs-8">
								<!-- BEGIN GEOCODING PORTLET-->
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-pointer"></i>מיקום האירוע
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

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&language=he"></script> <!-- dolev -->
<script src="../../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>

<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/maps-google.js" type="text/javascript"></script>

<script> <!-- dolev -->
function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $lat.','.$lng ?>);
  var mapOptions = {
    zoom: 18,
    center: myLatlng
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

	<?php
	if (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'POLICE')
		{
		$icon =	'Policeman2.png' ;
		}
		elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'MDA')
		{
		$icon =	'MDAman.png' ;	
		}
		elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'FIRE')
		{
		$icon =	'Fireman.png' ;	
		}
		elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'MUNICIPALITY')
		{
		$icon =	'municipality-icon.png' ;	
		}
		elseif (mysql_result(mysql_query("SELECT eventCategory from events where id_event=$event_id",$connection),0) == 'OTHER')
		{
		$icon =	'otherman.png' ;	
		}			

	$preview = 'אירוע #'.$event_id ;
	?>	 
  
  
//-------------------------------------------------------
var marker1=new google.maps.Marker({
  position: new google.maps.LatLng(<?php echo $lat.','.$lng ?>),
  icon:'<?php echo $icon ?>'
  });

marker1.setMap(map);

var infowindow1 = new google.maps.InfoWindow({
  content:"<?php echo $preview ?>"
  });

google.maps.event.addListener(marker1, 'click', function() {
  infowindow1.open(map,marker1);
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