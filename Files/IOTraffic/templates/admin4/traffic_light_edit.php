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
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5-rtl.css"/>
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="../../assets/global/plugins/bootstrap-datepicker/css/datepicker.css"/>
<!-- END PAGE LEVEL SCRIPTS -->
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
$param1 = $_GET['TL']; //GET Traffic Light number
//echo "<script type='text/javascript'>alert('$param1');</script>";

$trafficLight_id = $param1 ;
//$trafficLight_id = 2 ;
$table_name = 'traffic_light' ;
$id_loc = mysql_result(mysql_query("SELECT id_location from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ;
?>

<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<?php $Primary = 2; $Secondary = 2.3; include 'views\Menu.php'; ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE HEADER-->
			<!-- BEGIN PAGE HEAD -->
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>הוספת רמזור</small></h1>
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
					<a href="#">רמזורים</a>
					<i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="#">עריכת רמזור</a>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">
									
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box blue-hoki">
						<div class="portlet-title">
							<div class="caption">
								<i class="icon-plus"></i>עריכת רמזור
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
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="query/edit_TL.php" class="form-horizontal" method="post">
								<div class="form-body">
									<div class="alert alert-danger display-hide">
										<button class="close" data-close="alert"></button>
										יש מספר טעויות. אנא בדוק את הנתונים שנית.
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">מספר הרמזור <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="tl_id" value="<?php echo mysql_result(mysql_query("SELECT id_trafficLight from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?>" readonly />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">כיוון <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="direction">
												<option><?php echo mysql_result(mysql_query("SELECT trafficLight_Direction from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?></option>
												<?php
													$enumList = get_enum_values('traffic_light', 'trafficLight_Direction') ;
													$i=0;
													while ($i < count($enumList))
													{
														if ($enumList[$i] != mysql_result(mysql_query("SELECT trafficLight_Direction from $table_name where id_trafficLight=$trafficLight_id",$connection),0))
														{
															echo '<option>'.$enumList[$i].'</option>' ;
														}
														$i++ ;
													}
												?>
											</select>
										</div>	
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">שטח שיפוט <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="admin">
												<option><?php echo mysql_result(mysql_query("SELECT trafficLight_Admin from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?></option>
												<?php
													$enumList = get_enum_values('traffic_light', 'trafficLight_Admin') ;
													$i=0;
													while ($i < count($enumList))
													{
														if ($enumList[$i] != mysql_result(mysql_query("SELECT trafficLight_Admin from $table_name where id_trafficLight=$trafficLight_id",$connection),0))
														{
														echo '<option>'.$enumList[$i].'</option>' ;
														}
														$i++ ;
													}
												?>
											</select>
										</div>	
									</div>									
									<div class="form-group">
										<label class="control-label col-md-3">שייך לצומת
										</label>
										<div class="col-md-4">
											<select class="form-control" name="crossroad">
												<option><?php echo mysql_result(mysql_query("SELECT id_CrossRoad from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?></option>

												<?php
													$i=0;
													while ($i < $num3)
													{
														if (mysql_result($result3,$i,"id_CrossRoad") != mysql_result(mysql_query("SELECT id_CrossRoad from $table_name where id_trafficLight=$trafficLight_id",$connection),0))
														{
														echo '<option>'.mysql_result($result3,$i,"id_CrossRoad").'</option>' ;
														}
														$i++;	
													}
												?>																				
											</select>
										</div>	
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">יש רמזור להולכי רגל? <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="pedestrians">
												<option><?php echo mysql_result(mysql_query("SELECT trafficLight_Pedestrians from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?></option>
												<?php
												if (mysql_result(mysql_query("SELECT trafficLight_Pedestrians from $table_name where id_trafficLight=$trafficLight_id",$connection),0) == 'כן')
												{
													echo '<option>לא</option>';
												}
												else
												{
													echo '<option>כן</option>';
												}
												?>
											</select>
										</div>	
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">פרסה? <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="u_turn">
												<option><?php echo mysql_result(mysql_query("SELECT u_turn from $table_name where id_trafficLight=$trafficLight_id",$connection),0) ?></option>
												<?php
												if (mysql_result(mysql_query("SELECT u_turn from $table_name where id_trafficLight=$trafficLight_id",$connection),0) == 'כן')
												{
													echo '<option>לא</option>';
												}
												else
												{
													echo '<option>כן</option>';
												}
												?>
											</select>
										</div>	
									</div>										
									<div class="form-group">
										<label class="control-label col-md-3">מיקום (קו אורך) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="location_lng" value="<?php echo mysql_result(mysql_query("SELECT lng from location where id_location=$id_loc",$connection),0) ?>" />
											</div>
										</div>
									</div>									
									<div class="form-group">
										<label class="control-label col-md-3">מיקום (קו רוחב) <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<div class="input-icon right">
												<i class="fa"></i>
												<input type="text" class="form-control" name="location_lat" value="<?php echo mysql_result(mysql_query("SELECT lat from location where id_location=$id_loc",$connection),0) ?>" />
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn green">שמור שינויים</button>
											<button type="button" class="btn default">ביטול</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
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
<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="../../assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL STYLES -->
<script src="../../assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="../../assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="../../assets/admin/pages/scripts/form-validation.js"></script>
<!-- END PAGE LEVEL STYLES -->
<script>
jQuery(document).ready(function() {   
   // initiate layout and plugins
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
Demo.init(); // init demo features
   FormValidation.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>