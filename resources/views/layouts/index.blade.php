<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Blank | Coco - Responsive Bootstrap Admin Template</title>   
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="">
        <meta name="keywords" content="coco bootstrap template, coco admin, bootstrap,admin template, bootstrap admin,">
        <meta name="author" content="Huban Creative">

        <!-- Base Css Files -->
        <link href="../../classy/assets/libs/jqueryui/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/fontello/css/fontello.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/animate-css/animate.min.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/nifty-modal/css/component.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" /> 
        <link href="../../classy/assets/libs/ios7-switch/ios7-switch.css" rel="stylesheet" /> 
        <link href="../../classy/assets/libs/pace/pace.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/sortable/sortable-theme-bootstrap.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="../../classy/assets/libs/jquery-icheck/skins/all.css" rel="stylesheet" />
        <!-- Code Highlighter for Demo -->
        <link href="../../classy/assets/libs/prettify/github.css" rel="stylesheet" />
        
                <!-- Extra CSS Libraries Start -->
                <link href="../../classy/assets/css/style.css" rel="stylesheet" type="text/css" />
                <!-- Extra CSS Libraries End -->
        <link href="../../classy/assets/css/style-responsive.css" rel="stylesheet" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <link rel="shortcut icon" href="../../classy/assets/img/favicon.ico">
        <link rel="apple-touch-icon" href="../../classy/assets/img/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="../../classy/assets/img/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="../../classy/assets/img/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../classy/assets/img/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="../../classy/assets/img/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="../../classy/assets/img/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="../../classy/assets/img/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="../../classy/assets/img/apple-touch-icon-152x152.png" />
    </head>
    <body class="fixed-left">
        <!-- Modal Start -->
        	<!-- Modal Task Progress -->	
	<div class="md-modal md-3d-flip-vertical" id="task-progress">
		<div class="md-content">
			<h3><strong>Task Progress</strong> Information</h3>
			<div>
				<p>CLEANING BUGS</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="sr-only">80&#37; Complete</span>
				  </div>
				</div>
				<p>POSTING SOME STUFF</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
					<span class="sr-only">65&#37; Complete</span>
				  </div>
				</div>
				<p>BACKUP DATA FROM SERVER</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
					<span class="sr-only">95&#37; Complete</span>
				  </div>
				</div>
				<p>RE-DESIGNING WEB APPLICATION</p>
				<div class="progress progress-xs for-modal">
				  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
					<span class="sr-only">100&#37; Complete</span>
				  </div>
				</div>
				<p class="text-center">
				<button class="btn btn-danger btn-sm md-close">Close</button>
				</p>
			</div>
		</div>
	</div>
		
	<!-- Modal Logout -->
	<div class="md-modal md-just-me" id="logout-modal">
		<div class="md-content">
			<h3><strong>Logout</strong> Confirmation</h3>
			<div>
				<p class="text-center">Are you sure want to logout from this awesome system?</p>
				<p class="text-center">
				<button class="btn btn-danger md-close">Nope!</button>
				<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
				</p>
			</div>
		</div>
	</div>        <!-- Modal End -->	
	<!-- Begin page -->
	<div id="wrapper">
		
<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="../../classy/assets/img/logo.png" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
        <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav hidden-xs">
                    <li class="dropdown">
                        <a href="#"><i class="icon-th"></i></a>
                    </li>
                    <li class="language_bar dropdown hidden-xs">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="#">German</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right top-navbar">
                <li class="dropdown iconify hide-phone"><a href="#" onclick="javascript:toggle_fullscreen()"><i class="icon-resize-full-2"></i></a></li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="rounded-image topbar-profile-image"><img src="../../classy/images/users/user-35.jpg"></span> Jane <strong>Doe</strong> <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Change Password</a></li>
                            <li><a href="#">Account Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="icon-help-2"></i> Help</a></li>
                            <li><a href="lockscreen.html"><i class="icon-lock-1"></i> Lock me</a></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->
		    <!-- Left Sidebar Start -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
               <!-- Search form -->
                <form role="search" class="navbar-form">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                        <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="clearfix"></div>
                <!--- Profile -->
                <div class="profile-info">
                    <div class="col-xs-4">
                      <a href="profile.html" class="rounded-image profile-image"><img src="../../classy/images/users/user-100.jpg"></a>
                    </div>
                    <div class="col-xs-8">
                        <div class="profile-text">Welcome <b>Jane</b></div>
                        <div class="profile-buttons">
                        </div>
                    </div>
                </div>
                <!--- Divider -->
                <div class="clearfix"></div>
                <hr class="divider" />
                <div class="clearfix"></div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>><li class='has_sub'><a href='#'><i class='icon-feather'></i><span>TypeUsers</span><span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='/TypeUsers/create'><span>create</span></a></li><li><a href='/edit'><span>update</span></a></li><li><a href='/TypeCustomers'><span>show</span></a></li></ul><li class='has_sub'><a href='#'><i class='icon-pencil-3'></i><span>Customers</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='Customers/create'><span>create</span></a></li><li><a href='advanced-forms.html'><span>update</span></a></li><li><a href='form-wizard.html'><span>show</span></a></li></ul></li><li class='has_sub'><a href='#'><i class='fa fa-table'></i><span>Products</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='tables.html'><span>create</span></a></li><li><a href='datatables.html'><span>update</span></a></li><li><a href='datatables.html'><span>show</span></a></li></ul></li><li class='has_sub'><a href='#'><i class='fa fa-map-marker'></i><span>Sales</span> <span class="pull-right"><i class="fa fa-angle-down"></i></span></a><ul><li><a href='google-maps.html'><span>create</span></a></li><li><a href='vector-maps.html'><span>update</span></a></li><li><a href='vector-maps.html'><span>show</span></a></li></ul></li></ul></li></ul>                 
                       <div class="clearfix"></div>
                </div>
            
        </div>
        </div>
        <!-- Left Sidebar End -->		    <!-- Right Sidebar Start -->
    
    <!-- Right Sidebar End -->		
		<!-- Start right content -->
        @yield('content')
		<!-- End right content -->
<footer>
                Huban Creative &copy; 2014
                <div class="footer-links pull-right">
                    <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
	</div>
	<!-- End of page -->
		<!-- the overlay modal element -->
	<div class="md-overlay"></div>
	<!-- End of eoverlay modal -->
	<script>
		var resizefunc = [];
	</script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../../classy/assets/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="../../classy/assets/libs/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../classy/assets/libs/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="../../classy/assets/libs/jquery-ui-touch/jquery.ui.touch-punch.min.js"></script>
	<script src="../../classy/assets/libs/jquery-detectmobile/detect.js"></script>
	<script src="../../classy/assets/libs/jquery-animate-numbers/jquery.animateNumbers.js"></script>
	<script src="../../classy/assets/libs/ios7-switch/ios7.switch.js"></script>
	<script src="../../classy/assets/libs/fastclick/fastclick.js"></script>
	<script src="../../classy/assets/libs/jquery-blockui/jquery.blockUI.js"></script>
	<script src="../../classy/assets/libs/bootstrap-bootbox/bootbox.min.js"></script>
	<script src="../../classy/assets/libs/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="../../classy/assets/libs/jquery-sparkline/jquery-sparkline.js"></script>
	<script src="../../classy/assets/libs/nifty-modal/js/classie.js"></script>
	<script src="../../classy/assets/libs/nifty-modal/js/modalEffects.js"></script>
	<script src="../../classy/assets/libs/sortable/sortable.min.js"></script>
	<script src="../../classy/assets/libs/bootstrap-fileinput/bootstrap.file-input.js"></script>
	<script src="../../classy/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="../../classy/assets/libs/bootstrap-select2/select2.min.js"></script>
	<script src="../../classy/assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script> 
	<script src="../../classy/assets/libs/pace/pace.min.js"></script>
	<script src="../../classy/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../../classy/assets/libs/jquery-icheck/icheck.min.js"></script>

	<!-- Demo Specific JS Libraries -->
	<script src="../../classy/assets/libs/prettify/prettify.js"></script>

	<script src="../../classy/assets/js/init.js"></script>
    <script src="../../classy/assets/libs/jquery-datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../classy/assets/libs/jquery-datatables/js/dataTables.bootstrap.js"></script>
    <script src="../../classy/assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="../../classy/assets/js/pages/datatables.js"></script>
	</body>
</html>