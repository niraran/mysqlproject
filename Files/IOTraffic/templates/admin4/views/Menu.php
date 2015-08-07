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
				<li class="start <?php if ($Primary == 1) {echo 'active' ;} ?> ">
					<a href="index.php">
					<i class="icon-home"></i>
					<span class="title">מסך הבית</span>
					</a>
				</li>
				<li <?php if ($Primary == 2) {echo 'class="active open"' ;} ?> >
					<a href="javascript:;">
					<i class="icon-bulb"></i>
					<span class="title">רמזורים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 2.1) {echo 'class="active"' ;} ?> >
							<a href="traffic_light_all.php">
							<i class="icon-home"></i>
							כל הרמזורים
							</a>
						</li>
						<li <?php if ($Secondary == 2.2) {echo 'class="active"' ;} ?> >
							<a href="traffic_light_add.php">
							<i class="icon-plus"></i>
							הוספת רמזור</a>
						</li>
						<li <?php if ($Secondary == 2.3) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת רמזור
							</a>
						</li>
						<li <?php if ($Secondary == 2.4) {echo 'class="active"' ;} ?> >
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת רמזור
							</a>
						</li>
					</ul>
				</li>
				<li <?php if ($Primary == 3) {echo 'class="active open"' ;} ?> >
					<a href="javascript:;">
					<i class="icon-target"></i>
					<span class="title">צמתים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 3.1) {echo 'class="active"' ;} ?>>
							<a href="crossroad_all.php">
							<i class="icon-home"></i>
							כל הצמתים</a>
						</li>
						<li <?php if ($Secondary == 3.2) {echo 'class="active"' ;} ?>>
							<a href="crossroad_add.php">
							<i class="icon-plus"></i>
							הוספת צומת</a>
						</li>
						<li <?php if ($Secondary == 3.3) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת צומת
							</a>
						</li>
						<li <?php if ($Secondary == 3.4) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת צומת
							</a>
						</li>					
					</ul>
				</li>
				<li <?php if ($Primary == 4) {echo 'class="active open"' ;} ?> >
					<a href="javascript:;">
					<i class="icon-camcorder"></i>
					<span class="title">מצלמות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 4.1) {echo 'class="active"' ;} ?>>
							<a href="camera_all.php">
							<i class="icon-home"></i>
							כל המצלמות</a>
						</li>
						<li <?php if ($Secondary == 4.2) {echo 'class="active"' ;} ?>>
							<a href="camera_add.php">
							<i class="icon-plus"></i>
							הוספת מצלמה</a>
						</li>
						<li <?php if ($Secondary == 4.3) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="icon-pencil"></i>
							עריכת מצלמה
							</a>
						</li>
						<li <?php if ($Secondary == 4.4) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="fa fa-trash-o"></i>
							מחיקת מצלמה
							</a>
						</li>
					</ul>
				</li>
				<li <?php if ($Primary == 5) {echo 'class="active open"' ;} ?> >
					<a href="javascript:;">
					<i class="fa fa-bar-chart-o"></i>
					<span class="title">דוחות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 5.1) {echo 'class="active"' ;} ?>>
							<a href="reports_all.php">
							<i class="icon-home"></i>
							כל הדוחות</a>
						</li>
						<li <?php if ($Secondary == 5.2) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח ארועים</a>
						</li>	
						<li <?php if ($Secondary == 5.3) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח טיפול בעומסים</a>
						</li>	
						<li <?php if ($Secondary == 5.4) {echo 'class="active"' ;} ?>>
							<a href="#">
							<i class="fa fa-bar-chart-o"></i>
							דו"ח זמני עומסים</a>
						</li>							
					</ul>
				</li>
				<li <?php if ($Primary == 6) {echo 'class="active open"' ;} ?> >
					<a href="javascript:;">
					<i class="icon-bell"></i>
					<span class="title">ארועים</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 6.1) {echo 'class="active"' ;} ?>>
							<a href="events_all.php">
							<i class="icon-home"></i>
							כל הארועים</a>
						</li>
						<li <?php if ($Secondary == 6.2) {echo 'class="active"' ;} ?>>
							<a href="event_new.php">
							<i class="icon-plus"></i>
							יצירת אירוע חדש</a>
						</li>
						<li <?php if ($Secondary == 6.3) {echo 'class="active"' ;} ?>>
							<a href="events_active.php">
							<i class="icon-check"></i>
							ארועים פעילים</a>
						</li>					
						<li <?php if ($Secondary == 6.4) {echo 'class="active"' ;} ?>>
							<a href="events_pending_open.php">
							<i class="fa fa-clock-o"></i>
							ארועים ממתינים לאישור</a>
						</li>						
						<li <?php if ($Secondary == 6.5) {echo 'class="active"' ;} ?>>
							<a href="events_history.php">
							<i class="fa fa-history"></i>
							ארועים היסטוריים</a>
						</li>							
					</ul>
				</li>				
				<li class="last <?php if ($Primary == 7) {echo 'active open' ;} ?>">
					<a href="javascript:;">
					<i class="icon-pointer"></i>
					<span class="title">מפות</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li <?php if ($Secondary == 7.1) {echo 'class="active"' ;} ?>>
							<a href="maps_live.php">
							מפת תנועה</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>