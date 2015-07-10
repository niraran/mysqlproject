<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="#">
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
						<a href="event_new.php">
						<i class="icon-docs"></i> יצירת אירוע</a>
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
						<?php echo mysql_result($police_count,0); ?> </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold"><?php echo mysql_result($police_count,0); ?> ארועי משטרה </span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<?php
									//$query="SELECT * FROM events";
									//$result=mysql_query($query);
									//$num=mysql_numrows($result);
									$i=0;
									while ($i < $num)
									{
									$eventStatus = mysql_result($result,$i,"eventStatus");
									$eventCategory = mysql_result($result,$i,"eventCategory");
									if ($eventStatus == 'open' AND $eventCategory == 'POLICE')
									{
										//$variable=mysql_result($result,$i,"eventOpenBy");
										$myvalue = mysql_result($result,$i,"startTime") ;
										$datetime = new DateTime($myvalue);
										//$date = $datetime->format('Y-m-d');
										$time = $datetime->format('H:i:s');
										
										echo '<li>' ;
										echo 	'<a href="javascript:;">' ;
										echo 	'<span class="time">'.$time.'</span>' ;
										echo	'<span class="details">' ;
										echo	'<span class="label label-sm label-icon">' ;
										echo	'<i class="fa fa-plus"></i>' ;
										echo	'</span>' ;
										echo	mysql_result($result,$i,"eventName") ;
										echo 	'</span>' ;
										echo	'</a>' ;									
										echo '</li>' ;
									}
									$i++;	
									}
									?>								
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
						<span class="badge badge-success"><?php echo mysql_result($mda_count,0); ?> </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold"><?php echo mysql_result($mda_count,0); ?> ארועי מד"א</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<?php
									$i=0;
									while ($i < $num)
									{
									$eventStatus = mysql_result($result,$i,"eventStatus");
									$eventCategory = mysql_result($result,$i,"eventCategory");
									if ($eventStatus == 'open' AND $eventCategory == 'MDA')
									{
										$myvalue = mysql_result($result,$i,"startTime") ;
										$datetime = new DateTime($myvalue);
										//$date = $datetime->format('Y-m-d');
										$time = $datetime->format('H:i:s');
										
										echo '<li>' ;
										echo 	'<a href="javascript:;">' ;
										echo 	'<span class="time">'.$time.'</span>' ;
										echo	'<span class="details">' ;
										echo	'<span class="label label-sm label-icon">' ;
										echo	'<i class="fa fa-plus"></i>' ;
										echo	'</span>' ;
										echo	mysql_result($result,$i,"eventName") ;
										echo 	'</span>' ;
										echo	'</a>' ;									
										echo '</li>' ;
									}
									$i++;	
									}
									?>
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
						<span class="badge badge-success"><?php echo mysql_result($fire_count,0); ?> </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold"><?php echo mysql_result($mda_count,0); ?> ארועי כיבוי אש</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<?php
									$i=0;
									while ($i < $num)
									{
									$eventStatus = mysql_result($result,$i,"eventStatus");
									$eventCategory = mysql_result($result,$i,"eventCategory");
									if ($eventStatus == 'open' AND $eventCategory == 'FIRE')
									{
										$myvalue = mysql_result($result,$i,"startTime") ;
										$datetime = new DateTime($myvalue);
										//$date = $datetime->format('Y-m-d');
										$time = $datetime->format('H:i:s');
										
										echo '<li>' ;
										echo 	'<a href="javascript:;">' ;
										echo 	'<span class="time">'.$time.'</span>' ;
										echo	'<span class="details">' ;
										echo	'<span class="label label-sm label-icon">' ;
										echo	'<i class="fa fa-plus"></i>' ;
										echo	'</span>' ;
										echo	mysql_result($result,$i,"eventName") ;
										echo 	'</span>' ;
										echo	'</a>' ;									
										echo '</li>' ;
									}
									$i++;	
									}
									?>
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
						<span class="badge badge-success"><?php echo mysql_result($municipality_count,0); ?> </span>
						</a>
						<ul class="dropdown-menu">
							<li class="external">
								<h3><span class="bold"><?php echo mysql_result($municipality_count,0); ?> ארועי עיריות</span></h3>
								<a href="extra_profile.html">צפה בהכל</a>
							</li>
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
									<?php
									$i=0;
									while ($i < $num)
									{
									$eventStatus = mysql_result($result,$i,"eventStatus");
									$eventCategory = mysql_result($result,$i,"eventCategory");
									if ($eventStatus == 'open' AND $eventCategory == 'MUNICIPALITY')
									{
										$myvalue = mysql_result($result,$i,"startTime") ;
										$datetime = new DateTime($myvalue);
										//$date = $datetime->format('Y-m-d');
										$time = $datetime->format('H:i:s');
										
										echo '<li>' ;
										echo 	'<a href="javascript:;">' ;
										echo 	'<span class="time">'.$time.'</span>' ;
										echo	'<span class="details">' ;
										echo	'<span class="label label-sm label-icon">' ;
										echo	'<i class="fa fa-plus"></i>' ;
										echo	'</span>' ;
										echo	mysql_result($result,$i,"eventName") ;
										echo 	'</span>' ;
										echo	'</a>' ;									
										echo '</li>' ;
									}
									$i++;	
									}
									?>
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
							<li class="divider">
							</li>
							<li>
								<a href="user_lock.php">
								<i class="icon-lock"></i> נעילת מסך </a>
							</li>
							<li>
								<a href="login.php">
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