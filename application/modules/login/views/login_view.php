<?php
	$form_attributes = array('class' => 'form-group', 'id' => 'myform');
	$email_field = array(
		'type'			=> 'email',
        'name'          => 'email_address',
        'id'            => 'email_address',
        'placeholder'   => 'Email Address',
        'required'		=> 'true'
	);
	$password_field = array(
		'name'          => 'password',
        'id'            => 'password',
        'placeholder'   => 'Password',
        'required'		=> 'true'
	);
	$button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'button',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN IN'
);

?>
<div>
	<?php echo form_open(base_url().'login/authentication', $form_attributes);?>
		<?php echo form_input($email_field); ?>
		<?php echo form_password($password_field); ?>
		<?php echo form_button($button);?>
	<?php echo form_close();?>
</div>
<?//cyrus_authenticate(connection)?>
<!-- <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-0.4.7/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.4.7/js/mui.min.js"></script>
    <script src="//cdn.muicss.com/mui-0.4.7/webcomponents/mui-webcomponents.js"></script>
    <style>
     /* Tutorial CSS goes here */
    </style>
  </head>
  <body>
    <form>
	  <mui-textfield type="text" placeholder="Placeholder 1"></mui-textfield>
	  <mui-textfield type="text" placeholder="Placeholder 2"></mui-textfield>
	  <mui-btn style="raised">Submit</mui-btn>
	</form>
  </body>
</html> -->