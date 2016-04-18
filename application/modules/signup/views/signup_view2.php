<div class="container">

  <form class="form-signin" method="post" action="<?php echo base_url();?>signup/registration">
    <h2 class="form-signin-heading">Please sign in</h2>
    <label for="first_name" class="sr-only">First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required autofocus>
    <label for="last_name" class="sr-only">Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required >
    <label for="location" class="sr-only">Location</label>
    <input type="text" name="location" id="location" class="form-control" placeholder="Location" required >
    <label for="email_address" class="sr-only">Email address</label>
    <input type="email" name="email_address" id="email_address" class="form-control" placeholder="Email address" required><span id="error"></span>
    <label for="password" class="sr-only">Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
    <label for="confirm_password" class="sr-only">Confirm Password</label>
    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required><span id="message"></span>
    <!-- <div class="checkbox">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <button id="button" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  </form>

</div> <!-- /container -->
<script type="text/javascript">
    $(document).ready(function(){
      $('#message').hide();
      $('#button').prop('disabled', true);
      
      $('#email_address').focusout(function()
          {
            val = $(this).val();
            $.get('<?php echo base_url();?>signup/checkemail/'+val, function(data){
              if (data==1) {
                $('#email_address').val('');
                $('#error').html('It appears this email is already being used!').css('color', 'red');
              }
            });
          });
      $('#confirm_password').keyup(function()
          {
            $('#message').show();
            if ($('#password').val()!=$('#confirm_password').val()) {
                $('#button').prop('disabled', true);
                $('#message').html('Not matching').css('color', 'red');
            } else {
                $('#button').prop('disabled', false);
                $('#message').html('Matching').css('color', 'green');
            }
          });
      $('#password').keyup(function()
          {
            $('#message').show();
            if ($('#password').val()!=$('#confirm_password').val()) {
                $('#button').prop('disabled', true);
                $('#message').html('Not matching').css('color', 'red');
            } else if ($('#password').empty()) {
                $('#button').prop('disabled', true);
            }else {
                $('#button').prop('disabled', false);
                $('#message').html('Matching').css('color', 'green');
            }
          });
        
        
    });
</script>