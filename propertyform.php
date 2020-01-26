<html>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<title> 
Admin Dashboard
</title>

<head> 
<link rel="stylesheet" type="text/css" href="/CTI/propertyformstyle.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
			<li><a href="#">Properties</a></li>
			<li><a href="#">Clients</a></li>
			<li><a href="#">Inspectors</a></li>
		</ul>
		</div> <!-- end of directory -->
			
		<div id="outputarea">
		
		
		<?php
		// display property input form
		include 'includes/newPropertyInputForm.php';
		?>
		
		</div> <!-- end of outputarea -->

		
	</div> <!-- end of maincontainer -->

		<div id="footer">
		© 2018 CTI Services Inc. All Rights reserved.
		</div> <!-- end of footer --> 

</div> <!-- end of container -->
</body>

