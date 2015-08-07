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
<title>IOTraffic | Smart Traffic</title>
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
	<?php $Primary = 1; $Secondary = 0; include 'views\Menu.php'; ?>
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
			</div>
			<!-- END PAGE HEAD -->

			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10">
				<a href="events_active_police.php">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-blue-sharp"><?php echo mysql_result($police_count,0); ?></h3>
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
									<a href="events_active_police.php" > צפה בהכל </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
				<a href="events_active_mda.php">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-red-haze"><?php echo mysql_result($mda_count,0); ?> </h3>
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
										 <a href="events_active_mda.php" > צפה בהכל </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
				<a href="events_active_fire.php">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-green-sharp"><?php echo mysql_result($fire_count,0); ?></h3>
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
										 <a href="events_active_fire.php" > צפה בהכל </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
				<a href="events_active_municipality.php">
					<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="dashboard-stat2">
							<div class="display">
								<div class="number">
									<h3 class="font-purple-soft"><?php echo mysql_result($municipality_count,0); ?></h3>
									<small>עיריות</small>
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
										 <a href="events_active_municipality.php" > צפה בהכל </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>

			<!-- BEGIN PAGE CONTENT-->
			<div class="tiles" style="margin-right: 60px;">
				<a href="traffic_light_all.php">
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
				</a>				
				<a href="crossroad_all.php">				
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
				</a>
				<a href="camera_all.php">
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
				</a>
				<a href="reports_all.php">
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
				</a>
				<a href="events_active.php">
					<div class="tile double bg-blue-hoki">
						<div class="tile-body">
							<i class="fa fa-bell-o"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								ארועים פעילים
							</div>
							<div class="number">
								 <?php echo mysql_result($all_open_events_count,0); ?>
							</div>
						</div>
					</div>	
				</a>				
				<a href="maps_live.php">
					<div class="tile double bg-blue-steel">
						<div class="tile-body">
							<i class="icon-pointer"></i>
						</div>
						<div class="tile-object">
							<div class="name">
								 מפת זמן אמת
							</div>
							<div class="number">
							</div>
						</div>
					</div>	
				</a>
			</div>
			<!-- END PAGE CONTENT-->			
			
			
			
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption caption-md">
								<i class="icon-bar-chart theme-font-color hide"></i>
								<span class="caption-subject theme-font-color bold uppercase">תמונת מצב</span>
								<span class="caption-helper">ארועים</span>
							</div>
							<div class="inputs">
								<div class="portlet-input input-inline input-small ">
									<div class="input-icon right">
										<i class="icon-magnifier"></i>
										<input type="text" class="form-control form-control-solid" placeholder="חפש אירוע...">
									</div>
								</div>
							</div>
						</div>
						<div class="portlet-body">
							<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
								<div class="general-item-list">

									<?php
									$i=0;
									while ($i < $num)
									{
									$eventStatus = mysql_result($result,$i,"eventStatus");
									//$eventCategory = mysql_result($result,$i,"eventCategory");
										$myvalue = mysql_result($result,$i,"startTime") ;
										$datetime = new DateTime($myvalue);
										$event_date = $datetime->format('Y-m-d');
										$event_time = $datetime->format('H:i:s');								
										//$currentTime = time() + 3600;
										//$c_time = date('H:i',$currentTime);
										
										$location_id = mysql_result($result,$i,"id_location") ;
										$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
										$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;									

									
									
									//if ($eventStatus == 'open')
									//{	
										echo '<div class="item">' ;
										echo	'<div class="item-head">' ;
										echo		'<div class="item-details">' ;
										if (mysql_result($result,$i,"eventCategory") == 'POLICE')
										{
										echo			'<img class="item-pic" src="../../assets/admin/layout4/img/avatar_police.jpg">' ;
										}
										elseif (mysql_result($result,$i,"eventCategory") == 'MDA')
										{
										echo			'<img class="item-pic" src="../../assets/admin/layout4/img/avatar_mda.jpg">' ;	
										}
										elseif (mysql_result($result,$i,"eventCategory") == 'FIRE')
										{
										echo			'<img class="item-pic" src="../../assets/admin/layout4/img/avatar_fire.jpg">' ;	
										}
										elseif (mysql_result($result,$i,"eventCategory") == 'MUNICIPALITY')
										{
										echo			'<img class="item-pic" src="../../assets/admin/layout4/img/avatar_municipality.jpg">' ;	
										}
										elseif (mysql_result($result,$i,"eventCategory") == 'OTHER')
										{
										echo			'<img class="item-pic" src="../../assets/admin/layout4/img/avatar.png">' ;	
										}
										echo			'<a href="event_single.php?EVT='.mysql_result($result,$i,"id_event").'" class="item-name primary-link"> '.mysql_result($result,$i,"eventName").'</a>' ;
										echo			'<span class="item-label">'.$event_time.'</span>' ;
										echo		'</div>' ;
										if (mysql_result($result,$i,"eventStatus") == 'open')
											{
												echo '<span class="item-status"><span class="badge badge-empty badge-success"></span> פעיל </span>' ;
											}
											elseif (mysql_result($result,$i,"eventStatus") == 'pending')
											{
												echo '<span class="item-status"><span class="badge badge-empty badge-warning"></span> ממתין לאישור </span>' ;
											}
											elseif (mysql_result($result,$i,"eventStatus") == 'close')
											{
												echo '<span class="item-status"><span class="badge badge-empty badge-danger"></span> סגור </span>' ;
											}
										echo	'</div>' ;
										echo	'<div class="item-body">' ;
										echo		 '<u>יוזם האירוע:</u> ' ;
										echo		 mysql_result($result,$i,"eventOpenBy") ;
										echo		 '<br>' ;
										echo		  '<u>תיאור האירוע:</u> ' ;
										echo		  mysql_result($result,$i,"eventDescription") ;
										echo		 '<br>' ;
										echo		  '<u>מיקום האירוע:</u> ' ;
										echo '<a href="https://maps.google.com/?q='.$lat.','.$lng.'" dir="ltr" target="_blank">'.$lat.','.$lng.'</a>' ;							
										echo	'</div>' ;
										echo '</div>' ;

									//}
									$i++;	
									}
									?>								
								</div>
							</div>
						</div>
					</div>
					<!-- END PORTLET-->
				</div>
				<div class="col-md-6 col-sm-12">
					<!-- BEGIN GEOCODING PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-pointer"></i>מפת תנועה בזמן אמת + ארועים פעילים
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
							<!--</div> --> <!-- dolev -->
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
<?php include 'views\footer.php' ;?>
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
    zoom: 14,
    center: myLatlng
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

  
<?php
	//mysql_result($result2,$i,"id_trafficLight")
	$i=0;
	//$line=1;
	while ($i < $num)
	{
		if (mysql_result($result,$i,"eventStatus") == 'open')
		{
			$location_id = mysql_result($result,$i,"id_location") ;
			$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
			$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;
			$preview = '<a href=\'event_single.php?EVT='.mysql_result($result,$i,"id_event").'\'>'.mysql_result($result,$i,"eventName").'</a>' ;
			
			if (mysql_result($result,$i,"eventCategory") == 'POLICE')
			{
			$icon =	'Policeman2.png' ;
			}
			elseif (mysql_result($result,$i,"eventCategory") == 'MDA')
			{
			$icon =	'MDAman.png' ;	
			}
			elseif (mysql_result($result,$i,"eventCategory") == 'FIRE')
			{
			$icon =	'Fireman.png' ;	
			}
			elseif (mysql_result($result,$i,"eventCategory") == 'MUNICIPALITY')
			{
			$icon =	'municipality-icon.png' ;	
			}
			elseif (mysql_result($result,$i,"eventCategory") == 'OTHER')
			{
			$icon =	'otherman.png' ;	
			}			
			
			echo 'var marker'.$i.'=new google.maps.Marker({' ;
			echo   'position: new google.maps.LatLng('.$lat.', '.$lng.'),' ;
			echo   'icon:\''.$icon.'\'' ;
			echo   '});' ;

			echo 'marker'.$i.'.setMap(map);' ;
		
			echo 'var infowindow'.$i.' = new google.maps.InfoWindow({' ;
			echo  'content:"'.$preview.'"' ;
			echo  '});' ;

			echo 'google.maps.event.addListener(marker'.$i.', \'click\', function() {' ;
			echo   'infowindow'.$i.'.open(map,marker'.$i.');' ;
			echo   '}); ' ;
		}
		$i++;
	}
		
?>	

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
<?php
mysql_close($connection);
?>
</body>
<!-- END BODY -->
</html>