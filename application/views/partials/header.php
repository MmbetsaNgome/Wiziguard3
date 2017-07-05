<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Wiziguard</title>
	<link rel= "stylesheet" href ="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/appcss.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
    crossorigin="anonymous"></script>
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Handlee|Patrick+Hand|Delius|Delius+Swash+Caps|Tillana:400,800' 
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome/font-awesome.min.css">
</head>
<body>
<header class="container" >
<div class="container">
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsible-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?php echo base_url();?>" class="navbar-brand" ><img class="img-responsive center-block brand-logo" 
			src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo" height="50px" width="50px"/></a>
			<!-- <a class ="navbar-brand" href ="<?php echo base_url();?>"> Wiziguard </a> -->
        </div>

	<div class="collapse navbar-collapse" id="collapsible-navbar">
        <ul class="nav navbar-nav">
        	<li  class="nav-item active "><a href="<?php echo base_url(); ?>">Home</a></li>
            <li  class="nav-item "><a href="<?php echo base_url();?>register">Sign Up</a></li>
            <li  class="nav-item "><a href="<?php echo base_url();?>login">Login</a></li>
            <li  class="nav-item "><a href="<?php echo base_url();?>about">About Us</a></li>
        </ul>
	</div>
</div>
</nav>
</header>
    

