<?php
    $form_attributes = array('class' => 'form-group col s12', 'id' => 'myform');
    $email_field = array(
        'type'          => 'email',
        'name'          => 'email_address',
        'id'            => 'email_address',
        'class'         => 'validate',
        'placeholder'   => 'Email Address',
        'required'      => 'true'
    );
    $password_field = array(
        'name'          => 'password',
        'id'            => 'password',
        'placeholder'   => 'Password',
        'class'         => 'validate',
        'required'      => 'true'
    );
    $button = array(
        'name'          => 'button',
        'id'            => 'button',
        'class'         => 'btn waves-effect waves-light',
        'value'         => 'true',
        'type'          => 'submit',
        'content'       => 'SIGN IN'
);

?>
<style type="text/css">
    .panel {
        width: 380px;
        /*position: absolute;*/
        margin: auto;
    }
</style>
<div class="panel panel-default">
  <div class="panel-body">
    <div class="row">
      <?php echo form_open(base_url().'login/authentication', $form_attributes);?>
        <div class="row">
          <div class="input-field col s12">
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
        <?php echo form_button($button);?>
      <?php echo form_close();?>
    </div>
  </div>
</div>
