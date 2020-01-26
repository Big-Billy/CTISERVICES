<html ng-app='mainModule'>

<title> 
Admin Dashboard
</title>

<head> 
<link rel="stylesheet" type="text/css" href="ctiintrastyle.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
<script src="mainmodule.js"></script>
<script src="https://code.angularjs.org/1.7.8/angular-route.min.js"></script>
</head>

<body> 
<div id="container">

	<div id="header">
		Administrator Portal
		<!-- company logo UPDATE WITH JAVA WHEN POSSIBLE -->
		<img id="ctilogo" src="/CTI/ctilogo_drk.gif">
	</div> <!-- end of header -->

	<div id="maincontainer">
		
		<div id="directory">
		<ul>
			<li><a href="adminlanding.php?clicked=1">Dashboard</a></li>
			<li><a href="adminlanding.php?clicked=2">Properties</a></li>
			<li><a href="adminlanding.php?clicked=3">Clients</a></li>
			<li><a href="adminlanding.php?clicked=4">Inspectors</a></li>
		</ul>
		</div> <!-- end of directory -->
			
		<div id="outputarea">
		
		
		<?php 
		
		function menuselect() {
			if ($_GET['clicked'] == 1){
				include 'includes/dashboard.php';
			} else if ($_GET['clicked'] == 2) {
				include 'includes/propertiesmainview.php';
			} else if ($_GET['clicked'] == 3) {
				include 'includes/clientsmainview.php';
			} else if ($_GET['clicked'] == 4) {
				include 'includes/inspectorsmainview.php';
			} else {
				include 'includes/dashboard.php';
			}
		}
		
		menuselect();
		
		?>
		
		<p ng-controller='dashboardController'> {{dashboardText}} </p>
		
		</div> <!-- end of outputarea -->

		
	</div> <!-- end of maincontainer -->

		<div id="footer">
		© 2018 CTI Services Inc. All Rights reserved.
		</div> <!-- end of footer --> 

</div> <!-- end of container -->
</body>

