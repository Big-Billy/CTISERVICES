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
			<li><a href="#">Dashboard</a></li>
			<li><a href="#properties">Properties</a></li>
			<li><a href="#clients">Clients</a></li>
			<li><a href="#inspectors">Inspectors</a></li>
		</ul>
		</div> <!-- end of directory -->
			
		<div id="outputarea">
				
		<p ng-controller='dashboardController'> {{dashboardText}} </p>
		
		</div> <!-- end of outputarea -->

		
	</div> <!-- end of maincontainer -->

		<div id="footer">
		© 2018 CTI Services Inc. All Rights reserved.
		</div> <!-- end of footer --> 

</div> <!-- end of container -->
</body>

