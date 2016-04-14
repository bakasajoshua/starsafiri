<div class="header">
	<div class="logo_cover" style="height: auto;">
    	<div class="logo">
        	<div class="real_logo">
                <a href="<?php echo base_url()?>home"><img src="<?php echo base_url() .'assets/logo/logo_web.png'?>" style="height:50px; width:189px; margin-top:0px;"/></a>
            </div>
            <div class="search_box">
	            <form>
	           		<input type="text" class="top_text" placeholder="Search"/>
	            </form>
            </div>
        </div>
    </div>
              
    <nav class="navbar navbar-default" style="border-radius: 0;">
    	<div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#"></a> -->
              </div>
<!-- Menu items contained here -->
        	<div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
        			<li>
        				<a href="<?php echo base_url('home')?>" 
                            <?php if ($_SERVER['REQUEST_URI'] == ' '):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/adverntsafaris/home'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/adverntsafaris'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/adverntsafaris/'):?> id="active"
                            <?php endif; ?>>Home
                        </a>
        			</li>
                    <?php if($this->session->userdata('is_logged_in')){?>
                    <li>
                        <a href="<?php echo base_url('post')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/adverntsafaris/post'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/post'):?>
                            <?php endif; ?>>Posts
                        </a>
                    </li>
                    <?php } ?>
        			<li>
        				<a href="<?php echo base_url('news')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/adverntsafaris/news'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/news'):?>
                            <?php endif; ?>>Upcoming Events
                        </a>
        			</li>
        			<li>
        				<a href="<?php echo base_url('profiles')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/adverntsafaris/profiles'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/profiles'):?>
                            <?php endif; ?>>about us
                        </a>
        			</li>
        			<li>
        				<a href="<?php echo base_url('contact')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/adverntsafaris/contact'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/contact'):?>
                            <?php endif; ?>>Contact Us
                        </a>
        			</li>
                    <!-- include the adverts that the companies want done here -->
                    <li>
                        <a href="<?php echo base_url('contact')?>"
                            <?php if ($_SERVER['REQUEST_URI'] == '/adverntsafaris/contact'):?> id="active"
                            <?php elseif ($_SERVER['REQUEST_URI'] == '/contact'):?>
                            <?php endif; ?>><font style="color:#1dcb6c;">Advertise +</font>
                        </a>
                    </li>
                    <!-- End of the adverts section -->
		       </ul>
               <ul class="nav navbar-nav navbar-right">
                    <?php 
                        if(!$this->session->userdata('is_logged_in')){?>
                            <!-- <li>
                                <a href="<?php echo base_url('signup')?>">
                                    <input type="submit" class="submit_top" value="sign up"/>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('login')?>">    
                                    <input type="submit" class="submit_top" value="Sign In"/>
                                </a>
                            </li> -->
                           <?php } 

                        else { ?>
                            <li>
                                <div class="session-box">
                                 <?php  echo $this->session->userdata('f_name').' '.$this->session->userdata('l_name'); ?>
                                </div>
                            </li>
                    <?php  } ?>
                </ul>
            </div>

<!-- End of the menu column -->

<!-- Beggining of the login section|class -->
        	
<!-- End of the loggin section|class -->
        </div>
    </nav>
        
</div>