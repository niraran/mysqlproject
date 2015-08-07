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

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $Primary = 7; $Secondary = 7.3; include 'views\Menu.php'; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>מפת מצב רמזורים בזמן אמת</h1>
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
					<a href="#">מפות</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">מפת רמזורים</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN GEOCODING PORTLET-->
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-pointer"></i>מפת מצב רמזורים בזמן אמת
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
							<div id="map-canvas" class="gmaps" style="height: 600px;"></div> <!-- dolev -->
						</div>
					</div>
					<!-- END GEOCODING PORTLET-->
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
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!--<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>--> <!-- dolev -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&language=he"></script> <!-- dolev -->
<script src="../../assets/global/plugins/gmaps/gmaps.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
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
	$i=0;
	while ($i < $num2)
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
		$i++;
	}
		
?>	

}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

<!-- END PAGE LEVEL SCRIPTS -->
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