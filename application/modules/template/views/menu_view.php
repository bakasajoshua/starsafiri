<div class="navbar-wrapper">
  <div class="container">

        <nav class="navbar navbar-default" style="border-radius: 0; background-color: rgba(255,255,255,.85);">
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
              if ($_SERVER['REQUEST_URI'] == '' || $_SERVER['REQUEST_URI'] == '/starsafiri/home' || $_SERVER['REQUEST_URI'] == '/starsafiri' || $_SERVER['REQUEST_URI'] == '/starsafiri/' || $_SERVER['REQUEST_URI'] == '/starsafiri/home/'){
                $homeclass = 'active';
              }
            ?>
              <li class="<?php echo $homeclass; ?>"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <?php
              $postclass = '';
              if ($_SERVER['REQUEST_URI'] == '' || $_SERVER['REQUEST_URI'] == '/home' || $_SERVER['REQUEST_URI'] == '/starsafiri' || $_SERVER['REQUEST_URI'] == '/starsafiri/'){
                    $postclass = 'active';
                }
              if($this->session->userdata('is_logged_in')) {
              ?>
              <li class="<?php echo $postclass; ?>"><a href="<?php echo base_url();?>post">Posts</a></li>
            <?php } ?>
              <!-- <li><a href="#events">Upcoming Events</a></li> -->
              <li><a href="#about" data-toggle="modal" data-target="#about">About us</a></li>
              <li><a href="#contact" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
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
        <!-- If session is Not Set -->
            <?php
              if(!$this->session->userdata('is_logged_in')){
            ?>
          <li class="dropdown">
            <button type="button" class="btn btn-info navbar-btn" data-toggle="dropdown" style="border-radius: 0; "><span class="glyphicon glyphicon-user"></span><a href="#"> <b>Log in</b> <span class="caret"></span></a></button>
              <ul id="login-dp" class="dropdown-menu">
                  <li>
                       <div class="row">
                              <div class="col-md-12">
                                  Login via
                                  <div class="social-buttons">
                                      <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                      <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                  </div>
                                  or<div id="result" style="color:red;margin-left:4px;"></div>
                                   <form class="form" role="form" method="post" action="<?php echo base_url();?>login/authentication" accept-charset="UTF-8" id="loginForm">
                                          <div class="form-group">
                                               <label class="sr-only" for="email_address">Email address</label>
                                               <input type="email" class="form-control" name="email_address" id="email_address" placeholder="Email address" required>
                                          </div>
                                          <div class="form-group">
                                               <label class="sr-only" for="password">Password</label>
                                               <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                               <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                          </div>
                                          <div class="form-group">
                                               <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                          </div>
                                          <div class="checkbox">
                                               <label>
                                               <input type="checkbox"> keep me logged-in
                                               </label>
                                          </div>
                                   </form>
                              </div>
                              <div class="bottom text-center">
                                  New here ? <a href="<?php echo base_url();?>signup"><b>Join Us</b></a>
                              </div>
                       </div>
                  </li>
              </ul>
                </li>
        <!-- End of IF session is set -->
            <?php }else {?>
              <!-- if the session is set -->
                <li>
                  <div class="btn-group navbar-btn">
                    <button class="btn btn-info"><span class="glyphicon glyphicon-user"></span> <?php echo $details['first_name']." ".$details['last_name']?></button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url();?>login/logout"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header" style="color:#52bcdc; font-weight: bold;">Advanced Options</li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Manage my Account</a></li>
                      <!-- <li><a href="#"><span class="glyphicon glyphicon-trash"></span> Delete Account</a></li> -->
                    </ul>
                  </div>
                </li>
                <?php }?>
              <!-- End of if session is Set -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>

      </div>
</div>
<!-- HomePage Modals -->

<!-- Contact -->
  <div class="modal fade" id="contact" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact us </h4>
        </div>
        <div class="modal-body">
          <!-- <div class="container"> -->
        <div class="row-fluid">
         
            <div class="span4">
            <h3><span class="glyphicon glyphicon-earphone"></span> 0202400185</h3>
            <address>
              <span class="glyphicon glyphicon-envelope"></span> starsafiri@gmail.com<br><br>
              <span class="glyphicon glyphicon-earphone"></span> Mobile/WhatsApp: 0721799630 | 0713988098<br><br>
              <a href="https://www.facebook.com/StarWanderers/?fref=ts" class="social facebook"
               data-name="facebook" data-type="" target="_blank" 
               data-prefix="social" data-utf="E031">Facebook: Star Adventures and Safaris</a><br><br>
               <a href="https://twitter.com/starsafiri" class="social facebook"
               data-name="facebook" data-type="" target="_blank" 
               data-prefix="social" data-utf="E031">Twitter: Star Safiri</a>
              </address>
          </div>
        </div>
<!-- </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- About -->
  <div class="modal fade" id="about" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">About us </h4>
        </div>
        <div class="modal-body">
          <!-- <div class="container"> -->
        <div class="row-fluid">
         
            <div class="span4">
            <p style="text-align: justify;">StarSafiri is aimed at connecting Travel enthusiasts, Holiday seekers, explorers & adventurers and Tours & Travel organisers.<br>
            At Starsafiri you can access and share information about holiday destinations, vacations and getaways for the best travel experience.<br><br>
             Our Motto is: Travel Have fun and make a difference wherever you go.</p>
          </div>
        </div>
<!-- </div> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script type="text/javascript">
$(document).ready(function() {
    // Attach a submit handler to the form
    $( "#loginForm" ).submit(function( event ) {
         
        // Stop form from submitting normally
        event.preventDefault();
        
        // Get some values from elements on the page:
        var $form = $( this ),
        em = $form.find( "input[name='email_address']" ).val(),
        pass = $form.find( "input[name='password']" ).val(),
        url = $form.attr( "action" );
     
        // Send the data using post
        var posting = $.post( url, { email_address: em, password: pass } );
     
        // Put the results in a div
        posting.done(function( data ) {
          console.log(data);
            if (data=='true') {
              // console.log('Right stuff provided');
              window.location.replace('<?php echo base_url();?>');
            } else {
              // console.log('Not Right stuff provided');
              $( "#result" ).empty().append('Wrong email or password entered');
            }
            
        });
    });
  });
</script>
