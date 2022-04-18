<!DOCTYPE html>
<html lang="en">

	<head>
		
		<meta charset="utf-8">
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  		<title><?php echo $pageTitle ?></title>

  		<!-- FONTS FILE -->
  		<link href="http://localhost/cShare/css/all.min.css" rel="stylesheet" type="text/css">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  		<!-- Nunito FONT FAMILY FILE -->
  		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  		<!-- CSS FILES -->
  		<link href="css/sb-admin-2.css" rel="stylesheet">
  		<link href="css/main.css" rel="stylesheet">
		
	</head>

	<body id="page-top">

  		<!-- Page Wrapper -->
  		<div id="wrapper">
		
			<!-- Sidebar -->
			<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

		  		<!-- Sidebar - Brand -->
		  		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
					<div class="sidebar-brand-icon rotate-n-15">
			  			<i class="bs bs-scissors-1"></i>
					</div>
					<div class="sidebar-brand-text mx-3">C-Share</div>
		  		</a>

		  		<!-- Divider -->
		  		<hr class="sidebar-divider my-0">

			  	<!-- Nav Item - Dashboard -->
			  	<li class="nav-item active">
					<a class="nav-link" href="dashboard.php">
				  		<i class="fas fa-fw fa-tachometer-alt"></i>
				  		<span>Dashboard</span>
				  	</a>
			  	</li>

	  			<!-- Divider -->
	  			<hr class="sidebar-divider">

	  			<!-- Heading -->
	  			<div class="sidebar-heading">
					CARS
	  			</div>

	  			<!-- Nav Item - Pages Collapse Menu -->
	  			<li class="nav-item">
					<a class="nav-link" href="car-info.php">
						<i class="far fa-copyright"></i>
		  				<span>Car Info</span>
		  			</a>
	  			</li>
			  	

	  			<!-- Divider -->
	  			<hr class="sidebar-divider">

	  			<!-- Heading -->
	  			<div class="sidebar-heading">
					CLIENTS & STAFF
	  			</div>

	  			<!-- Nav Item - Charts -->
	  			<li class="nav-item">
					<a class="nav-link" href="drivers.php">
		  				<i class="far fa-address-card"></i>
		  				<span>Drivers</span>
		  			</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="users.php">
		  				<i class="fas fa-user icon-ver"></i>
		  				<span>Users</span>
		  			</a>
	  			</li>
	  
	  			<!-- Divider -->
	  			<hr class="sidebar-divider d-none d-md-block">

	  			<!-- Sidebar Toggler (Sidebar) -->
	  			<div class="text-center d-none d-md-inline">
					<button class="rounded-circle border-0" id="sidebarToggle"></button>
	  			</div>
			</ul>
			
			<!-- End of Sidebar -->

			<!-- Content Wrapper -->
			<div id="content-wrapper" class="d-flex flex-column">
			  
			  	<!-- Main Content -->
			  	<div id="content">
					
					<!-- Topbar -->
					<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					  
					 	<!-- Sidebar Toggle (Topbar) -->
					  	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
							<i class="fa fa-bars"></i>
					  	</button>

					  	<!-- Topbar Navbar -->
					  	<ul class="navbar-nav ml-auto">
							<li class="nav-item">
		              			<a class="nav-link" href="../" target="_blank">
		              				<i class="far fa-eye"></i>
		                			<span style="margin-left: 5px;">View website</span>
		              			</a>
		          			</li>
							<div class="topbar-divider d-none d-sm-block"></div>

							<!-- Nav Item - User Information -->
							<!-- <li class="nav-item dropdown no-arrow">
					  			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="mr-2 d-none d-lg-inline text-gray-600 small">
										<?php echo $_SESSION['username']; ?>
									</span>
									<i class="fas fa-caret-down"></i>
								</a>
							  	
							  	 Dropdown - User Information -->
							  <!--	<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
									<a class="dropdown-item" href="#">
								  		<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Profile
									</a>
									<a class="dropdown-item" href="#">
								  		<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Settings
									</a>
									<a class="dropdown-item" href="#">
								  		<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Activity Log
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
								  		<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
								  		Logout
									</a>
							  	</div>
							</li> -->
				  		</ul>
					</nav>
					<!-- End of Topbar -->

	