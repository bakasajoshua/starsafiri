<?php?>
<!DOCTYPE html>
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
<!-- dynamic files includes all the .js .css plugins-->
 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>

<!-- Here is the title of Each page Module -->
<title>Star Safiri | <?php echo $title; ?></title>

</head>
<style type="text/css">
	body {
	  min-height: 500px;
	  background-color: #e7e7e7;
	}

	.navbar-static-top {
	  margin-bottom: 19px;
	}
</style>
<body>
    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img style="max-height: 100%; object-fit: contain; max-width: auto; margin: 0;" src="assets/logo/afric_main.png">
          </a>
        </div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php
              $homeclass = '';
              if ($_SERVER['REQUEST_URI'] == '' || $_SERVER['REQUEST_URI'] == '/home' || $_SERVER['REQUEST_URI'] == '/starsafiri' || $_SERVER['REQUEST_URI'] == '/starsafiri/'){
                $homeclass = 'active';
              }
            ?>
              <li class="<?php echo $homeclass; ?>"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            
              <?php
                $postclass = '';
                if ($_SERVER['REQUEST_URI'] == '/post' || $_SERVER['REQUEST_URI'] == '/starsafiri/post' || $_SERVER['REQUEST_URI'] == '/starsafiri/post/'){
                    $postclass = 'active';
                    }
                if($this->session->userdata('is_logged_in')) {
                  
              ?>
              <li class="<?php echo $postclass;?>"><a href="<?php echo base_url();?>post">Posts</a></li>
              <?php } ?>
				<!-- <li><a href="#events">Upcoming Events</a></li> -->
				<li><a href="#about">About us</a></li>
				<li><a href="#contact"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#1dcb6c; font-weight: bold;">Advertise + <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Request to Advertise</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> View all Adverts</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header" style="color:#1dcb6c; font-weight: bold;">Advert Accounts</li>
						<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Manage my Account</a></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
                  <div class="btn-group navbar-btn">
                    <button class="btn btn-info"><span class="glyphicon glyphicon-user"></span> <?php echo $details['first_name']." ".$details['last_name']?></button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url();?>login/logout"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header" style="color:#52bcdc; font-weight: bold;">Advanced Options</li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Manage my Account</a></li>
                    </ul>
                  </div>
                </li>
                
			</ul>
		</div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container kv-main">
	    <?php
	    	$this->load->view($content_view);
	    ?>
    </div>

    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <!--Start of Footer  -->
    <footer class="footer" style="background-color: #f0f0f0">
      <div class="container">
        <p class="text-muted"><center>&copy Starsafaris.com</center></p>
      </div>
    </footer>

<!-- jQuery files that make the site run faster -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>