<?php
	$form_attributes = array('class' => 'form-group', 'id' => 'myform');
	$first_name = array(
        'name'          => 'first_name',
        'id'            => 'first_name',
        'placeholder'   => 'First Name',
        'required'	=> 'true',
        'class'         => 'validate'
	);
	$last_name = array(
        'name'          => 'last_name',
        'id'            => 'last_name',
        'placeholder'   => 'Last Name',
        'required'	=> 'true',
        'class'         => 'validate'
	);
        $location = array(
        'name'          => 'location',
        'id'            => 'location',
        'placeholder'   => 'Town',
        'required'      => 'true',
        'class'         => 'validate'
        );
	$email_field = array(
	'type'		=> 'email',
        'name'          => 'email_address',
        'id'            => 'email_address',
        'placeholder'   => 'Email Address',
        'required'		=> 'true',
        'class'         => 'validate'
	);
	$password_field = array(
	'name'          => 'password',
        'id'            => 'password',
        'placeholder'   => 'Password',
        'required'	=> 'true',
        'class'         => 'validate'
	);
	$confirm_password = array(
	'name'          => 'confirm_password',
        'id'            => 'confirm_password',
        'placeholder'   => 'Confirm Password',
        'required'	=> 'true',
        'class'         => 'validate'
	);
	$button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'btn waves-effect',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN UP'
);

?>
<style type="text/css">
   
    .panel {
        width: 380px;
        margin: auto;
        -webkit-border-radius:0px;
        -moz-border-radius:0px;
        -o-border-radius:0px;
        border-radius:0px;
    }
</style>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
    	<?php echo form_open(base_url().'signup/registration', $form_attributes);?>
		<div class="row">
                        <div class="input-field col s6">
                                <?php echo form_input($first_name); ?>
                                <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">          
        	               <?php echo form_input($last_name); ?>
                               <label for="last_name">Last Name</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                                <i class="material-icons prefix">location_on</i>
                                <?php echo form_input($location); ?>
                                <label for="location">Location</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
                              <i class="material-icons prefix">person_pin</i>
        		      <?php echo form_input($email_field); ?>
                              <label for="email_address">Email</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
        		      <?php echo form_password($password_field); ?>
                              <label for="password">Password</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
        		      <?php echo form_password($confirm_password); ?>
                              <label for="confirm_password">Confirm Password</label>
                        </div>
                </div>
                <div class="row">
                        <div class="input-field col s12">
        		      <?php echo form_button($button);?>
                        </div>
                </div>
	<?php echo form_close();?>
    </div>
  </div>
</div>