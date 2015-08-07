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
$param1 = $_GET['CR']; //GET Cross Road id

$crossroad_id = $param1 ;
//$crossroad_id = 1 ;
?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $Primary = 3; $Secondary = 0; include 'views\Menu.php'; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>צומת #<?php echo $crossroad_id ?> </h1>
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
					<a href="crossroad_all.php">צמתים</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">צומת #<?php echo $crossroad_id ?></a>
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
								<br><br>
								<img src="../../assets/admin/layout4/img/Crossroad.jpg" class="img-responsive" alt="" />
							</div>								
							<div class="col-xs-4">
								<br><br>
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-target"></i>פרטי הצומת
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
										</div>
									</div>
									<div class="portlet-body">
										<ul>
												<li>
													<strong>מספר הצומת: </strong> <?php echo mysql_result(mysql_query("SELECT id_CrossRoad from crossroad where id_CrossRoad=$crossroad_id",$connection),0); ?>
												</li>
												<li>
													 <strong>שם הצומת: </strong> <?php echo mysql_result(mysql_query("SELECT crossroadName from crossroad where id_CrossRoad=$crossroad_id",$connection),0); ?>
												</li>
												<li>
													 <strong>מספר יציאות: </strong> <?php echo mysql_result(mysql_query("SELECT numOfWays from crossroad where id_CrossRoad=$crossroad_id",$connection),0); ?>
												</li>
												<li>
													 <strong>מספר רמזורים: </strong> <?php echo mysql_result(mysql_query("SELECT count(*) from traffic_light where id_CrossRoad=$crossroad_id",$connection),0); ?>
												</li>
												<li>
													<strong>רמזור/ים בצומת: </strong>
											<?php
												$i=0;
												while ($i < $num2)
													{
														if (mysql_result($result2,$i,"id_crossRoad") == $crossroad_id)
															{
																
																echo '<a href="traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'">' ;
																echo ' | ' ;
																echo mysql_result($result2,$i,"id_trafficLight") ;
																echo ' | ' ;
																echo '</a>' ;
																
															}
													$i++;	
													}
											?>	
												</li>												
												<?php
													if(mysql_result(mysql_query("SELECT count(*) from camera where id_CrossRoad=$crossroad_id",$connection),0) >0 )
													{
														echo '<li>' ;
														echo 	'<strong>מספר מצלמות:  </strong> '.mysql_result(mysql_query("SELECT count(*) from camera where id_CrossRoad=$crossroad_id",$connection),0) ;
														echo '</li>' ;
														echo '<li>' ;
														echo 	'<strong>מצלמה/ות בצומת:  </strong>' ;
														$i=0;
															while ($i < $num4)
																{
																	if (mysql_result($result4,$i,"id_crossRoad") == $crossroad_id)
																		{
																			
																			echo '<a href="camera_single.php?CAM='.mysql_result($result4,$i,"id_camera").'">' ;
																			echo ' | ' ;
																			echo mysql_result($result4,$i,"id_camera") ;
																			echo ' | ' ;
																			echo '</a>' ;
																			
																		}
																$i++;	
																}
															echo '</li>' ;
													}
												?>
										
											
												<li>
													 <strong>מיקום:  </strong>
													<?php
													$location_id = mysql_result(mysql_query("SELECT id_location from crossroad where id_CrossRoad=$crossroad_id",$connection),0);
													$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
													$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;
													echo '<a href="https://maps.google.com/?q='.$lat.','.$lng.'" dir="ltr" target="_blank">'.$lat.','.$lng.'</a>' ;
													 ?>
													
													
												</li>												
										</ul>
									</div>
								</div>
								
								<?php
								$ppp = mysql_result(mysql_query("SELECT count(*) from traffic_light where id_CrossRoad=$crossroad_id",$connection),0);
								if ($ppp != 0)
								{
									echo '<div class="portlet box blue-hoki">' ;
									echo '<div class="portlet-title">' ;
									echo	'<div class="caption">' ;
									echo		'<i class="icon-bulb"></i>רמזורים בצומת' ;
									echo	'</div>' ;
									echo	'<div class="tools">' ;
									echo		'<a href="javascript:;" class="collapse">' ;
									echo		'</a>' ;
									echo	'</div>' ;
									echo '</div>' ;
									echo '<div class="portlet-body" align="center">' ;							

									$i=0;
									while ($i < $num2)
										{
											if (mysql_result($result2,$i,"id_crossRoad") == $crossroad_id)
												{
													echo '<a href="traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'">' ;
													if (mysql_result($result2,$i,"trafficLight_Status") == 'GREEN')
													{
													echo '<img src="../../assets/admin/layout4/img/traffic-lights-GREEN.jpg" alt="'.mysql_result($result2,$i,"id_trafficLight").'" style="width:80px;"/>' ;
													}
													elseif (mysql_result($result2,$i,"trafficLight_Status") == 'RED')
													{
													echo '<img src="../../assets/admin/layout4/img/traffic-lights-RED.jpg" alt="'.mysql_result($result2,$i,"id_trafficLight").'" style="width:80px;"/>' ;
													}
													elseif (mysql_result($result2,$i,"trafficLight_Status") == 'RED-YELLOW')
													{														
													echo '<img src="../../assets/admin/layout4/img/traffic-lights-RED-YELLOW.jpg" alt="'.mysql_result($result2,$i,"id_trafficLight").'" style="width:80px;"/>' ;
													}
													elseif (mysql_result($result2,$i,"trafficLight_Status") == 'YELLOW')
													{											
													echo '<img src="../../assets/admin/layout4/img/traffic-lights-YELLOW.jpg" alt="'.mysql_result($result2,$i,"id_trafficLight").'" style="width:80px;"/>' ;
													}
													elseif (mysql_result($result2,$i,"trafficLight_Status") == 'FLASHING-YELLOW')
													{											
													echo '<img src="../../assets/admin/layout4/img/traffic-lights-FLASHING-YELLOW.gif" alt="'.mysql_result($result2,$i,"id_trafficLight").'" style="width:80px;"/>' ;
													}															
													echo '</a>' ;
													
												}
											$i++;	
										}
									echo '</div>' ;
									echo '</div>' ;
								}
								?>
											<?php

												$i=0;
												while ($i < $num4)
													{
														if (mysql_result($result4,$i,"id_CrossRoad") == $crossroad_id)
															{
																echo '<div class="portlet box blue-hoki">' ;
																echo	'<div class="portlet-title">' ;
																echo		'<div class="caption">' ;
																echo			'<i class="icon-bulb"></i>מצלמה #'.mysql_result($result4,$i,"id_camera").' לכיוון '.mysql_result($result4,$i,"camera_direction") ;
																echo		'</div>' ;
																echo		'<div class="tools">' ;
																echo			'<a href="javascript:;" class="collapse"></a>' ;
																echo		'</div>' ;
																echo	'</div>' ;
																echo	'<div class="portlet-body" style="height: 340px;">' ;
																echo 		'<object type="text/html" data="'.mysql_result($result4,$i,"camera_URL").'" width="100%" height="100%" ></object>' ;
																echo	'</div>' ;
																echo '</div>' ;	
															}
													$i++;	
													}		
											?>									
	
							</div>
							<div class="col-xs-6">
							<br><br>
								<!-- BEGIN GEOCODING PORTLET-->
								<div class="portlet box blue-hoki">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-pointer"></i>מיקום הצומת
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
										<div id="map-canvas" class="gmaps" style="height: 500px;"></div> <!-- dolev -->
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
    zoom: 20,
    center: myLatlng
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var trafficLayer = new google.maps.TrafficLayer();
  trafficLayer.setMap(map);

	<?php
		//Traffic Lights
		$MarkCNT = 0;
		$i=0;
		while ($i < $num2)
		{

			if (mysql_result($result2,$i,"id_crossRoad") == $crossroad_id)
			{
				$location_id = mysql_result($result2,$i,"id_location") ;
				$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
				$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;

				if (mysql_result($result2,$i,"trafficLight_Direction") == 'ישר' )
					{
						$direction_sign = 'Straight.jpg' ;
					}
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ישר או ימינה' )
					{
						$direction_sign = 'Straight_or_Right.jpg' ;
					}
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ישר או שמאלה' )
					{
						$direction_sign = 'Straight_or_Left.jpg' ;
					}		
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ימינה לפני התמרור' )
					{
						$direction_sign = 'RightBefore.jpg' ;
					}
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ימינה אחרי התמרור' )
					{
						$direction_sign = 'RightAfter.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'שמאלה לפני התמרור' )
					{
						$direction_sign = 'LeftBefore.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'שמאלה אחרי התמרור' )
					{
						$direction_sign = 'LeftAfter.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ימינה או שמאלה' )
					{
						$direction_sign = 'Right_or_Left.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ישר או פרסה ימינה' )
					{
						$direction_sign = 'Straight_or_uturnRight.jpg' ;
					}
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'ישר או פרסה שמאלה' )
					{
						$direction_sign = 'Straight_or_uturnLeft.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'פרסה ימינה' )
					{
						$direction_sign = 'uturn_Right.jpg' ;
					}	
				elseif (mysql_result($result2,$i,"trafficLight_Direction") == 'פרסה שמאלה' )
					{
						$direction_sign = 'uturn_Left.jpg' ;
					}	

				if (mysql_result($result2,$i,"trafficLight_Direction") == 'כל הכיוונים' )
					{
						$preview = '<h2><a href=\'traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'\'><u>רמזור #'.mysql_result($result2,$i,"id_trafficLight").'</u></a></h2><b><u>פרטי רמזור</u></b><br><u>כיוון:</u> '.mysql_result($result2,$i,"trafficLight_Direction").'<br><u>פרסה:</u> '.mysql_result($result2,$i,"u_turn").'<br><u>רמזור להולכי רגל:</u> '.mysql_result($result2,$i,"trafficLight_Pedestrians").'<br><u>גורם אחראי:</u> '.mysql_result($result2,$i,"trafficLight_Admin").'<br><a href=\'traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'\'>מידע נוסף...</a>' ;
					}
					else
					{
						$preview = '<h2><a href=\'traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'\'><u>רמזור #'.mysql_result($result2,$i,"id_trafficLight").'</u></a></h2><br><img src=\'../../assets/admin/layout4/img/'.$direction_sign.'\' /><br><br><b><u>פרטי רמזור</u></b><br><u>כיוון:</u> '.mysql_result($result2,$i,"trafficLight_Direction").'<br><u>פרסה:</u> '.mysql_result($result2,$i,"u_turn").'<br><u>רמזור להולכי רגל:</u> '.mysql_result($result2,$i,"trafficLight_Pedestrians").'<br><u>גורם אחראי:</u> '.mysql_result($result2,$i,"trafficLight_Admin").'<br><a href=\'traffic_light_single.php?TL='.mysql_result($result2,$i,"id_trafficLight").'\'>מידע נוסף...</a>' ;
					}
						
				if (mysql_result($result2,$i,"trafficLight_Status") == 'RED' )
				{
					$icon = 'Traffic_L_iconRED.png' ;
				}
				elseif (mysql_result($result2,$i,"trafficLight_Status") == 'RED-YELLOW' )
				{
					$icon = 'Traffic_L_iconRED-YELLOW.png' ;
				}
				elseif (mysql_result($result2,$i,"trafficLight_Status") == 'YELLOW' )
				{
					$icon = 'Traffic_L_iconYELLOW.png' ;	
				}
				elseif (mysql_result($result2,$i,"trafficLight_Status") == 'FLASHING-YELLOW' )
				{
					$icon = 'Traffic_L_iconYELLOW.png' ;
				}
				elseif (mysql_result($result2,$i,"trafficLight_Status") == 'GREEN' )
				{
					$icon = 'Traffic_L_iconGREEN.png' ;
				}			
				
				echo 'var marker'.$MarkCNT.'=new google.maps.Marker({' ;
				echo   'position: new google.maps.LatLng('.$lat.', '.$lng.'),' ;
				echo   'icon:\''.$icon.'\'' ;
				echo   '});' ;

				echo 'marker'.$MarkCNT.'.setMap(map);' ;

				echo 'var infowindow'.$MarkCNT.' = new google.maps.InfoWindow({' ;
				echo  'content:"'.$preview.'"' ;
				echo  '});' ;

				echo 'google.maps.event.addListener(marker'.$MarkCNT.', \'click\', function() {' ;
				echo   'infowindow'.$MarkCNT.'.open(map,marker'.$MarkCNT.');' ;
				echo   '}); ' ;
			}	
					
			$i++;
			$MarkCNT++;
		}	
	?>
	
	<?php
	//Cameras
	$i=0;
	while ($i < $num4)
	{
		if (mysql_result($result4,$i,"id_crossRoad") == $crossroad_id)
		{
			$location_id = mysql_result($result4,$i,"id_location") ;
			$lat = mysql_result(mysql_query("SELECT lat from location where id_location=$location_id",$connection),0) ;
			$lng = mysql_result(mysql_query("SELECT lng from location where id_location=$location_id",$connection),0) ;
			$preview = '<h2><a href=\'camera_single.php?CAM='.mysql_result($result4,$i,"id_camera").'\'><u>מצלמה #'.mysql_result($result4,$i,"id_camera").'</u></a></h2><br><img src=\'https://maps.googleapis.com/maps/api/streetview?size=200x120&amp;location='.$lat.', '.$lng.'&amp;fov=90&amp;heading=235&amp;pitch=10\' width=\'200\' height=\'120px\'><br><br><b><u>פרטי מצלמה</u></b><br><u>מיקום:</u> '.mysql_result($result4,$i,"camera_LocationName").'<br><u>כיוון מצלמה:</u> '.mysql_result($result4,$i,"camera_Direction").'<br><u>גורם אחראי:</u> '.mysql_result($result4,$i,"camera_Admin").'<br><a href=\'camera_single.php?CAM='.mysql_result($result4,$i,"id_camera").'\'>מידע נוסף...</a>' ;
			$icon = 'Camera.png' ;
			
			echo 'var marker'.$MarkCNT.'=new google.maps.Marker({' ;
			echo   'position: new google.maps.LatLng('.$lat.', '.$lng.'),' ;
			echo   'icon:\''.$icon.'\'' ;
			echo   '});' ;

			echo 'marker'.$MarkCNT.'.setMap(map);' ;

			echo 'var infowindow'.$MarkCNT.' = new google.maps.InfoWindow({' ;
			echo  'content:"'.$preview.'"' ;
			echo  '});' ;

			echo 'google.maps.event.addListener(marker'.$MarkCNT.', \'click\', function() {' ;
			echo   'infowindow'.$MarkCNT.'.open(map,marker'.$MarkCNT.');' ;
			echo   '}); ' ;
		}
		$i++;
		$MarkCNT++ ;		
	}
		
?>	
	
  

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