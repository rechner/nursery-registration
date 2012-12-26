<!DOCTYPE html>
<html lang="en">
  <head>
    <script src="bootstrap/js/jquery.js"></script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Journey Church Preschool Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Register for Journey Preschool">
    <meta name="author" content="Journey Church">

    <!-- Le styles -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      
      img.icon {
        height: 32px; width: 32px;
        margin-top: 12px;
      }
    </style>
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="resources/img/favicon.ico" />
    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144" href="bootstrap/ico/apple-touch-icon-144-precomposed.png"> -->
    <!--<link rel="apple-touch-icon-precomposed" sizes="114x114" href="bootstrap/ico/apple-touch-icon-114-precomposed.png"> -->
    <!--<link rel="apple-touch-icon-precomposed" sizes="72x72" href="bootstrap/ico/apple-touch-icon-72-precomposed.png"> -->
    <link rel="apple-touch-icon-precomposed" href="resources/img/apple-touch-icon-57-optimized.png">
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Journey Preschool</a>
           <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Registration</a></li>
            </ul>
            </div>
        </div>
      </div>
    </div>
    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3 well">
          <!-- side bar -->
          <p><h4>Journey Preschool Registration</h4>
            In order to serve you better, we provide this online
            system to register your children, make payments,
            and add or remove authorised guardians.<br/><br/>
            
            While an account is not required for registration, creating
            one will allow you to make online payments after registration.
            <br/></br>
            
            If you already have a Google, Facebook, Yahoo!, or similar
            <a href="http://openid.net/" rel="tooltip" id="tooltip" 
            title="OpenID providers allow you to register and sign-in to
            other websites using an existing account.">OpenID</a>
            provider, making an account couldn't be easier!  
            Simply click <strong>&ldquo;Select Your Account&rdquo;</strong>
            to begin.
          </p>
        </div>
        
        <div class="span9 well">
          <h2>2013 Registration</h2>
          
          <div class="span5 well">
            <p>Creating an account will allow you to keep Journey
              Preschool's information about your child up to date
              and enable features  such as online weekly payments.</p>
              
              <form style="text-align: center">
                <input type="text" id="inputEmail" placeholder="Email">
                <input type="password" id="inputPassword" placeholder="Password">
                <input type="password" id="confirmPassword" placeholder="Confirm Password">
                <!--<div class="alert alert-error">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong>Warning!</strong> Passwords don't match
                </div>-->
                <div class="control-group">
                  <div class="controls">
                    <button class="btn btn-primary btn-large btn-block"
                    type="button" onClick="parent.location='preschool-registration2.php'">
                      Create Account
                    </button>
                    <hr/>
                    <p><strong>Already have an account?</strong></p>
                    <button class="btn btn-large btn-block" type="button">
                      Sign In
                    </button>
                  </div>
                </div>
              </form>
          </div>
          
          <div class="span5 well">
            <p><strong>Sign in using an existing provider.</strong><br/>
              Too many accounts to keep track of?
              Sign in using your Google, Facebook, or Yahoo! account.</p>
            <button class="btn btn-large btn-block" type="button"
              onClick="parent.location='preschool/sso.php'">
              <i class="icon-user"></i> Select Your Account</button>
              <div class="row">
                <div class="span5"></div>
                <div class="span5" style="display: block; margin-left: auto; margin-right: auto">
                  <img src="resources/img/Facebook.png" class="icon left">
                  <img src="resources/img/Twitter.png" class="icon">
                  <img src="resources/img/Github.png" class="icon right">
                </div>
              </div>
          </div>
          <div class="span5 well">
            <p><strong>Don't want to register?</strong><br/>
              You can still register your child without an account.</p>
            <button class="btn btn-large btn-block" type="button"
             onClick="parent.location='register.php'">
              Continue Without an Account <i class="icon-arrow-right"></i></button>
          </div>
          <!-- content -->
        </div>
      </div>
    </div>
    
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-tooltip.js"></script>
    <script>
      $('#tooltip').tooltip('hide')
    </script>

  </body>
  
</html>
