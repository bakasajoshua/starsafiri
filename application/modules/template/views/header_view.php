<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Bootstrap tags that must come first before any other tag -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- about this site -->
<meta name="description" content="A web platform that helps to expose the touring experiences.">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="Star Sarifi Tours">
<meta name="Resource-type" content="Document">
<!-- Attaching the aadverntsafaris Icon logo -->
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url() .'assets/icons/afric.jpg'?>"/>

<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<!-- dynamic files includes all the .js .css plugins-->
 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>

<!-- Here is the title of Each page Module -->
<title>Star Safiri | <?php echo $title; ?></title>

</head>

<body>

<!-- Start of the Page Contents -->
<div class="container-fluid">
<!-- <div class="hero">  -->
<!-- Floating Multiline Textfield -->
