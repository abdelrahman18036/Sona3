<?php
		error_reporting(0);
		session_start();
		if ($_COOKIE["auth"] != "admin_in") {header("location:"."./");}
			include("includes/connect.php");
			include("includes/data.php");
			?>
			<!DOCTYPE html>
			<html lang="en">
			<head>
<link rel="stylesheet" href="font.css">
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=0.8">
				<meta name="author" content="CodeX Egypt">

				<meta name="description" content="Admin Panel">
				<title>مؤسسة صناع الخير للتنمية</title>
				<link rel="shortcut icon" type="image/png" href="../../assets/images/logo/logo.png">
				<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-h21C2fcDk/eFsW9sC9h0dhokq5pDinLNklTKoxIZRUn3+hvmgQSffLLQ4G4l2eEr" crossorigin="anonymous">

				<!-- Custom CSS -->
				<link rel="stylesheet" href="includes/style.css">
				<link href="//cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />

				<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
				<!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
				<!--[if lt IE 9]>
					<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
					<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
				<![endif]-->
			</head>

			<body>

			<div class="wrapper">
				<!-- Sidebar Holder -->
				<nav id="sidebar" class="bg-primary">
					<div class="sidebar-header">
						<h3>
							صناع الخير<br>
						</h3>
						<strong>
							Sona3<br>
							<i id="sidebarExtend" class="glyphicon glyphicon-circle-arrow-right"></i>
						</strong>
					</div><!-- /sidebar-header -->

					<!-- start sidebar -->
					<ul class="list-unstyled components">
						<li>
							<a href="home.php" aria-expanded="false">
								<i class="glyphicon glyphicon-home"></i>
								Home
							</a>
						</li>
			<li><a href="contact.php"> <i class="glyphicon glyphicon-blackboard"></i>Contact <span class="pull-right"><?=counting("contact", "id")?></span></a></li>

			<li><a href="volunteer.php"> <i class="glyphicon glyphicon-blackboard"></i>Volunteer <span class="pull-right"><?=counting("volunteer", "id")?></span></a></li>

			<li><a href="users.php"> <i class="glyphicon glyphicon-plus"></i>Users <span class="pull-right"><?=counting("users", "id")?></span></a></li>

			<li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
				</ul>
			</nav><!-- /end sidebar -->

			<!-- Page Content Holder -->
			<div id="content">