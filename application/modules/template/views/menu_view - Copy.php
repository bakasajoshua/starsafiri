    <!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
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
            <li><a href="#events">Upcoming Events</a></li>
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
        <li class="dropdown">
          <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#1dcb6c;"><b>Login</b> <span class="caret"></span></a> -->
          <button type="button" class="btn btn-default navbar-btn" data-toggle="dropdown" style="color:#1dcb6c;"><b>Log in</b> <span class="caret"></span></a></button>
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
        </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>