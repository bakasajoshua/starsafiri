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
      <form class="col s12" method="post" action="<?php base_url().'signup/registration'?>">
        <div class="row">
          <div class="input-field col s6">
            <input name="first_name" id="first_name" type="text" class="validate" placeholder="First Name">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input name="last_name" id="last_name" type="text" class="validate"  placeholder="Last Name">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">location_on</i>
            <input name="location" id="location" type="text" class="validate">
            <label for="location">Location</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">person_pin</i>
            <input name="email_address" id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="password" id="password" type="password" class="validate">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input name="confirm_password" id="confirm_password" type="password" class="validate">
            <label for="confirm_password">Password</label>
          </div>
        </div>
        <button class="btn waves-effect" type="submit">Sign Up
          <i class="material-icons right">send</i>
        </button>
        <input type="submit" value="SIGN UP">
      </form>
    </div>
  </div>
</div>