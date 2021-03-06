<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Our Common Future</title>
<!-- Style -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/landing_style.css" rel="stylesheet">

<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="css/layout-wide.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="css/skin-green.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<!-- Demo -->
<link rel="stylesheet" id="main-color" href="css/skin-green.css" media="screen"/>
<link href='//fonts.googleapis.com/css?family=Asap:400,500,600,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">

<!-- Favicon -->
<!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
<!-- IE -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>	   
    <![endif]-->
<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet">
	 <![endif]-->
</head>
<style type="text/css">
@import url(http://weloveiconfonts.com/api/?family=brandico|entypo|openwebicons|zocial);

body{
  background-color: #F2F4F7;
}

/* brandico */
[class*="brandico-"]:before {
  font-family: 'brandico', sans-serif;
}

/* entypo */
[class*="entypo-"]:before {
  font-family: 'entypo', sans-serif;
}

/* openwebicons */
[class*="openwebicons-"]:before {
  font-family: 'OpenWeb Icons', sans-serif;
}

/* zocial */
[class*="zocial-"]:before {
  font-family: 'zocial', sans-serif;
}

.form-signin{
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}


.login-input {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.login-input-pass {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}


.signup-input {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.signup-input-confirm {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}



.create-account {
  text-align: center;
  width: 100%;
  display: block;
}

.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.btn-center{
  /*width: 50%;*/
  text-align: center;
  margin: inherit;
}

.social-login-btn {
  margin: 5px;
  width: 20%;
  font-size: 250%;
  padding: 0;
}

.social-login-more {
  width: 45%;
}

.social-google {
  background-color: #da573b;
  border-color: #be5238;
}
.social-google:hover{
  background-color: #be5238;
  border-color: #9b4631;
}

.social-twitter {
  background-color: #1daee3;
  border-color: #3997ba;
}
.social-twitter:hover {
  background-color: #3997ba;
  border-color: #347b95;
}

.social-facebook {
  background-color: #4c699e;
  border-color: #47618d;
}
.social-facebook:hover {
  background-color: #47618d;
  border-color: #3c5173;
}

.social-linkedin {
  background-color: #4875B4;
  border-color: #466b99;
}
.social-linkedin:hover {
  background-color: #466b99;
  border-color: #3b5a7c;
}

a:hover{
  color:rgb(87, 168, 62);
}
</style>
<body>
	<div class="container">
      
      <script id="metamorph-1-start" type="text/x-placeholder"></script><script id="metamorph-21-start" type="text/x-placeholder"></script>

	<div class="container text-center" style="margin:10% auto">
		<h3 class="form-signin-heading" title="Our Common Future"><a href="index.php">Our Common Future</a></h3>

	    <!-- <form class="form-signin" data-ember-action="2"> -->

			<small class="text-muted">Connect Our Common Future (OCF) with your favorite social network</small>
			<br><br>

			

      <p>
      <a class="btn btn-primary social-login-btn social-linkedin" href="projects/social_login/linkedin/linkedin_login.php"><i class="fa fa-linkedin"></i></a><br>
      <a class="btn btn-primary social-login-btn social-google" href="projects/social_login/googlePlus/oauth2callback.php"><i class="fa fa-google-plus"></i></a><br>
      <a class="btn btn-primary social-login-btn social-facebook" href="projects/social_login/facebook/facebook_login.php"><i class="fa fa-facebook"></i></a><br>
      <!-- <a class="btn btn-primary social-login-btn social-twitter" href="projects/social_login/twitter/redirect.php"><i class="fa fa-twitter"></i></a> -->
      </p>

<?php 
    /*
      <div id="signInDiv" >
          <small class="text-muted">Or sign in with Our CommonFuture</small><br><br>
          <form id="loginForm" role="form" onSubmit="login(this)">
            <input class="ember-view ember-text-field form-control login-input"
            id="inputEmail" placeholder="Email Address" type="text" autofocus>
            <span class="email_error" style="display:block"></span>
            <br>
            <input class="ember-view ember-text-field form-control login-input-pass" id="inputPassword" placeholder="Password" type="password"> 
            <span class="pass_error" style="display:block"></span>
            <div class="alert alert-danger" style="display:none" id="incorrect" >Incorrect Email or Password!</div> <!-- end alert-danger -->
            <a href="#" onClick="window.open('projects/forgot.php', '_blank')" class="btn btn-link" id="alertMe">Forgot your password? Click here!</a>
            <button class="btn btn-lg btn-primary btn-block btn-center"
            data-bindattr-3="3" type="submit" onclick="$('#loginForm').submit(); return false">Sign in</button><br>
          </form>

          <small class="create-account text-muted">Dont have a Our Common
          Future or social network account? <button class=
          "ember-view btn btn-sm btn-default" id="ember363"><small class=
          "create-account text-muted">Sign Up</small></button></small>
        </div>
      </form>

      <form class="form-signin" data-ember-action="2" style="padding-top:0px">
        <div id="signUpDiv" style="display:none;">
          <small class="text-muted">Or sign up with Our CommonFuture</small><br>
          <br>
          <form id="signUpForm" >
            <input class="ember-view ember-text-field form-control login-input-pass"
            id="signup_username" placeholder="Full Name" type="text">
            <span class="name_error" style="display:block"></span>
            <input class="ember-view ember-text-field form-control login-input-pass"
            id="signup_email" placeholder="Email Address" type="text">
            <span class="email_error" style="display:block"></span>
            <input class="ember-view ember-text-field form-control login-input-pass" id=
            "signup_password" placeholder="Password" type="password"> 
            <span class="pass_error" style="display:block"></span>
            <input class="ember-view ember-text-field form-control login-input-pass" id=
            "confirmPassword" placeholder="Confirm Password" type="password" 
            onkeyup="checkPass()">
            <span id="confirmMessage" class="confirmMessage" style="display:block"></span>
            <button id="signUpButton" class="btn btn-lg btn-primary btn-block btn-center" 
            data-bindattr-3="3" type="submit" onClick="signup(this); return false">Sign Up</button><br>
            <div id="thirdPartySignUp"></div>
            <div class="alert alert-danger" style="display:none" id="alredyExist" ><strong>Sorry! Email ID already exists.</strong> </div> <!-- end alert-danger -->
            <div class="alert alert-success" style="display:none" id="userSuccess" ><strong>User successfully created!</strong></div> <!-- end alert-danger -->
          </form>
          <small class="create-account text-muted">Have a Our Common Future or
          social network account? <button class=
          "ember-view btn btn-sm btn-default" id="ember364" ><small class=
          "create-account text-muted" >Sign In</small></button></small>
        </div>

    */ ?>


      <!-- </form> -->
    </div>


</body>


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src = "script.js"></script> 

<script type="text/javascript">

$( "#ember363" ).click(function() {
  $("#signInDiv").hide();
  $("#signUpDiv").show();
  $('.email_error').html('');
  $('.pass_error').html('');
  return false;
});

$( "#ember364" ).click(function() {
  $("#signInDiv").show();
  $("#signUpDiv").hide();
  $('.email_error').html('');
  $('.pass_error').html('');
  return false;
});

</script>