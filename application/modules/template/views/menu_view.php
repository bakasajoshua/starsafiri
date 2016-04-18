<div class="navbar-wrapper">
  <div class="container">

        <nav class="navbar navbar-default">
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
              <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
              <li><a href="" data-toggle="modal" data-target="#about">About us</a></li>
              <li><a href="" data-toggle="modal" data-target="#contact"><span class="glyphicon glyphicon-phone-alt"></span> Contact us</a></li>
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
         <!--  <li class="dropdown">
            <button type="button" class="btn btn-default navbar-btn" data-toggle="dropdown" style="color:#1dcb6c;"><span class="glyphicon glyphicon-user"></span> <b>Log in</b> <span class="caret"></span></a></button>
              <ul id="login-dp" class="dropdown-menu">
                  <li>
                       <div class="row">
                              <div class="col-md-12">
                                  Login via
                                  <div class="social-buttons">
                                      <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                      <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                  </div>
                                  or
                                   <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                          <div class="form-group">
                                               <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                               <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                          </div>
                                          <div class="form-group">
                                               <label class="sr-only" for="exampleInputPassword2">Password</label>
                                               <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
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
                                  New here ? <a href="#"><b>Join Us</b></a>
                              </div>
                       </div>
                  </li>
              </ul>
                </li> -->
        <!-- End of IF session is set -->

              <!-- if the session is set -->
                <li>
                  <div class="btn-group navbar-btn">
                    <button class="btn btn-info"><span class="glyphicon glyphicon-user"></span> <?php echo "Michael Kamau"?></button>
                    <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a href="#"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
                      <li class="divider"></li>
                      <li class="dropdown-header" style="color:#52bcdc; font-weight: bold;">Advanced Options</li>
                      <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Account Settings</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-trash"></span> Delete Account</a></li>
                    </ul>
                  </div>
                </li>
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
            <p style="text-align: justify;">Star Safiri is a place where Holiday seekers, Tour companies, travel experts and explorers can access and share information about holiday destinations, vacations and getaways for the best travel experience.</p>
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