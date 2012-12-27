<!DOCTYPE html>
<!-- TODO: Dynamically generate state selection dropdown menus -->
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
      
      .fakelink:hover {
        text-decoration : underline;
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
        <div class="span3 well" id="sidebar">
          <!-- side bar -->
          <h4>Welcome to Journey</h4>
          <video controls poster="resources/img/big_buck_bunny_480p_stereo.jpg"
            style="width: 100%">
            <source src="resources/video/big_buck_bunny_480p.webm" type='video/webm; codecs="vp8, vorbis"' />
            <source src="http://mirrorblender.top-ix.org/peach/bigbuckbunny_movies/big_buck_bunny_480p_stereo.ogg" 
              type='video/ogg; codecs="theora, vorbis"' />
            <source src="http://download.blender.org/peach/bigbuckbunny_movies/BigBuckBunny_320x180.mp4"
              type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
            Your browser does not support the <code>video</code> tag.
          </video>
          <small>An informative video and short description can go here.</small>
          <hr>
          <h4>Registration Progress</h4>
          <div class="progress">
            <div class="bar" style="width: 12%;"></div>
          </div>
          <div>
            <small>More information about the registration process can go
              here, including help with registering, news, and events.<br><br>
              Links to <a href="#">Terms of Service</a>,
              a <a href="#">Privacy Policy</a>, and 
              <a href="#">Tuition Rates</a> can go here too.</small>
          </div>
        </div>
        
        <!-- content -->
        <div class="span9 well">
          <h3>Guardian Information</h3>
          <form class="form-horizontal">
            <fieldset>
              <legend>Are you a new or returning member?</legend>
              <label class="radio">
                <input type="radio" name="newMember" id="newMember1" value="true" checked>
                  I am a new member and my child has never attended Journey Preschool before.
              </label>
              <label class="radio">
                <input type="radio" name="newMember" id="newMember2" value="false">
                  I am a returning member registering for the current school year.
              </label>
            </fieldset>
            
            <fieldset>
              <legend>Primary guardian <small>Inputs marked in red are required</small></legend>
              <div class="control-group">
                <label class="control-label" for="Name">Name</label>
                <div class="controls">
                  <input type="text" id="Name" placeholder="Name"
                   class="span5" name="Name" required>
                   <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="Lastname">Lastname</label>
                <div class="controls">
                  <input type="text" id="Lastname" placeholder="Lastname" 
                   class="span5" name="Lastname" required>
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="DOB">DOB</label>
                <div class="controls control-row">
                  <input type="text" id="DOB" placeholder="YYYY-MM-DD"
                   class="input-small" name="DOB" required
                   onKeyDown="return dFilter (event.keyCode, this, '####-##-##');"
                   pattern="^[12]\d{3}-(0?[1-9]|1[0-2])-([12]?[0-9]|3[01])$"
                   data-validation-pattern-message="Must be a valid ISO8601 date.">
                  <span class="help-inline" style="color: red">*</span>
                  <a class="btn btn-info" data-placement="right"
                  title="<b>Safety at Journey</b>" data-content="<small>To maintain
                  safety for your children, registered guardians are 
                  checked against PredatorBarrier™. A DOB is needed as
                  part of a positive ID.</small>" id="popover">
                  Why is this required?</a>
                </div>
              </div>

              <div class="control-group form-inline">
                <label class="control-label" for="Phone">Home Phone</label>
                <div class="controls">
                  <input type="text" id="Phone" placeholder="Phone"
                   class="input-medium" onblur="clear_phone();"
                   pattern="\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d"
                   data-validation-pattern-message="Enter a valid US phone number"
                   onKeyDown="javascript:return dFilter (event.keyCode, this, '<?php echo _("(###) ###-####"); ?>');">
                  <label class="checkbox" data-placement="right" title="Check this box if you prefer to be contacted
                      with your mobile number, or if you have no home phone." >
                    <input type="checkbox" id="noHome" name="noHome" onClick="disable_homephone();">
                    <label class="fakelink" for="noHome"> No home phone </label>
                  </label>
                </div>
              </div>
              
              <div class="control-group form-inline">
                <label class="control-label" for="Mobile">Mobile Phone</label>
                <div class="controls">
                  <input type="text" id="Mobile" placeholder="Mobile Phone"
                   class="input-medium" name="Mobile" onblur="clear_phone();"
                   pattern="\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d"
                   data-validation-pattern-message="Enter a valid US phone number"
                   onKeyDown="return dFilter (event.keyCode, this, '<?php echo _("(###) ###-####"); ?>');">
                  <label class="checkbox"  title="Enable text alerts to be notified when your
                      child is dropped off or picked up, get reminders
                      when payment is due, and be notified of closings."
                      data-placement="right">
                    <input type="checkbox" id="textAlerts" 
                    name="textAlerts" onClick="check_mobile();">
                      <label class="fakelink" for="textAlerts"> Enable text alerts </label>
                  </label>
                </div>
                <div class="alert alert-error span7" id="mobileAlert" style="margin-top: 10px">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  Please enter a valid mobile number to enable text alerts.
                </div>
              </div>
              <hr>
              <div class="control-group">
                <label class="control-label" for="Address1">Address</label>
                <div class="controls">
                  <input type="text" id="Address1" name="Address1" class="span6"
                   placeholder="Street and House Number" required>
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="Address2" name="Address2" class="span6"
                   placeholder="Apartment/Suite no.">
                </div>
              </div>
              
              <div class="control-group form-horizontal">
                <label class="control-label" for="City">City</label>
                <div class="controls">
                  <input type="text" id="City" class="span3"
                   placeholder="City" name="City" required>
                  <span class="help-inline" style="color: red">*</span>
                  <select id="State" name="State" class="span3" required>
                    <option value="">-Select State-</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AS">American Samoa</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="GU">Guam</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VI">Virgin Islands</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                    <option value="AA">A.F. America</option>
                    <option value="AE">A.F. Europe</option>
                    <option value="AP">A.F. Pacific</option>
                  </select>
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group form-inline">
                <label class="control-label" for="ZIP">ZIP</label>
                <div class="controls controls-row">
                  <input type="text" id="ZIP" class="span2"
                   placeholder="ZIP" name="ZIP" required
                   onKeyDown="return dFilter (event.keyCode, this, '##### ####');" />
                  <label class="checkbox" style="padding-left: 15px">
                     <input type="checkbox" id="BillingAddressSame" 
                      data-toggle="collapse" data-target="#billing"
                      onClick="disable_billing();" name="BillingAddressSame"
                      checked> Use this as my billing address
                  </label>
                </div>
              </div>
              
              <div class="accordion" id="billingSec">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" 
                     data-parent="#billingSec" href="#billing">
                      Billing Address
                    </a>
                  </div>
                  <div id="billing" class="accordion-body collapse">
                    <div class="accordion-inner">
                      <div class="control-group">
                        <label class="control-label" for="Billing1">Billing Address</label>
                        <div class="controls">
                          <input type="text" id="Billing1" class="span6"
                           placeholder="Street and House Number" name="Billing1">
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <div class="controls">
                          <input type="text" id="Billing2" class="span6"
                           placeholder="Apartment/Suite no." name="Billing2">
                        </div>
                      </div>
                      
                      <div class="control-group form-horizontal">
                        <label class="control-label" for="BillingCity">City</label>
                        <div class="controls">
                          <input type="text" id="BillingCity" class="span3"
                           placeholder="City" name="BillingCity">
                          <select id="BillingState" name="BillingState" class="span3">
                            <option value="">-Select State-</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AS">American Samoa</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="GU">Guam</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VI">Virgin Islands</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                            <option value="AA">A.F. America</option>
                            <option value="AE">A.F. Europe</option>
                            <option value="AP">A.F. Pacific</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="control-group">
                        <label class="control-label" for="BillingZIP">ZIP</label>
                        <div class="controls controls-row">
                          <input type="text" id="BillingZIP" class="span2"
                           placeholder="ZIP" name="BillingZIP"
                           onKeyDown="return dFilter (event.keyCode, this, '##### ####');" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset> 
            
            
            <fieldset>
              <legend>Secondary guardian <small>optional</small></legend>
              
              <div class="control-group">
                  <label class="checkbox">
                    <input type="checkbox" id="noSecondGuardian"
                     onClick="toggle_secondary_guardian();"
                     name="noSecondGuardian"> I do not wish to add a secondary guardian at this time
                  </label>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="Name_2">Name</label>
                <div class="controls">
                  <input type="text" id="Name_2" placeholder="Name"
                   class="span5" name="Name_2">
                   <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="Lastname_2">Lastname</label>
                <div class="controls">
                  <input type="text" id="Lastname_2" placeholder="Lastname" 
                   class="span5" name="Lastname_2">
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group">
                <label class="control-label" for="DOB_2">DOB</label>
                <div class="controls control-row">
                  <input type="text" id="DOB_2" placeholder="YYYY-MM-DD"
                   class="input-small" name="DOB_2"
                   onKeyDown="return dFilter (event.keyCode, this, '####-##-##');">
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>

              <div class="control-group form-inline">
                <label class="control-label" for="Phone">Home Phone</label>
                <div class="controls">
                  <input type="text" id="Phone_2" placeholder="Home Phone"
                   class="input-medium" name="Phone_2" onblur="clear_phone();"
                   pattern="\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d"
                   data-validation-pattern-message="Enter a valid US phone number"
                   onKeyDown="javascript:return dFilter (event.keyCode, this, '<?php echo _("(###) ###-####"); ?>');">
                  <label class="checkbox" data-placement="right" title="Check this box if you prefer to be contacted
                      with your mobile number, or if you have no home phone." >
                    <input type="checkbox" id="noHome_2" name="noHome_2" onClick="disable_homephone2();">
                    <label class="fakelink" for="noHome_2"> No home phone </label>
                  </label>
                </div>
              </div>
              
              <div class="control-group form-inline">
                <label class="control-label" for="Mobile">Mobile Phone</label>
                <div class="controls">
                  <input type="text" id="Mobile_2" placeholder="Mobile Phone"
                   class="input-medium" name="Mobile_2" onblur="clear_phone();"
                   pattern="\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d"
                   data-validation-pattern-message="Enter a valid US phone number"
                   onKeyDown="return dFilter (event.keyCode, this, '<?php echo _("(###) ###-####"); ?>');">
                  <label class="checkbox"  title="Enable text alerts to be notified when your
                      child is dropped off or picked up, get reminders
                      when payment is due, and be notified of closings."
                      data-placement="right">
                    <input type="checkbox" id="textAlerts_2" 
                     name="textAlerts_2" onClick="check_mobile2();">
                      <label class="fakelink" for="textAlerts"> Enable text alerts </label>
                  </label>
                </div>
                <div class="alert alert-error span7" id="mobileAlert2" style="margin-top: 10px">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  Please enter a valid mobile number to enable text alerts.
                </div>
              </div>

              <hr>
              <div class="control-group">
                <label class="control-label" for="Address1_2">Address</label>
                <div class="controls">
                  <input type="text" id="Address1_2" class="span6"
                   placeholder="Street and House Number" name="Address1_2">
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="Address2_2" class="span6"
                   placeholder="Apartment/Suit no." name="Address2_2">
                </div>
              </div>
              
              <div class="control-group form-horizontal">
                <label class="control-label" for="City_2">City</label>
                <div class="controls">
                  <input type="text" id="City_2" class="span3"
                   placeholder="City" name="City_2">
                  <span class="help-inline" style="color: red">*</span>
                  <select name="State_2" id="State_2" class="span3">
                    <option value="">-Select State-</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AS">American Samoa</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="GU">Guam</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VI">Virgin Islands</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                    <option value="AA">A.F. America</option>
                    <option value="AE">A.F. Europe</option>
                    <option value="AP">A.F. Pacific</option>
                  </select>
                  <span class="help-inline" style="color: red">*</span>
                </div>
              </div>
              
              <div class="control-group form-inline">
                <label class="control-label" for="ZIP_2">ZIP</label>
                <div class="controls controls-row">
                  <input type="text" id="ZIP_2" class="span2"
                   placeholder="ZIP" name="ZIP_2"
                   onKeyDown="return dFilter (event.keyCode, this, '##### ####');" />
                  <label class="checkbox" style="padding-left: 15px">
                     <input type="checkbox" id="AddressSame" 
                      onClick="secondary_address();" name="AddressSame"
                      checked> Same as primary guardian
                  </label>
                </div>
              </div>
              
              <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-large span4"
                 name="action">Continue <i class='icon-ok icon-white'></i></button>
                <button id="cancel" class="btn btn-large" type="button">Cancel</button>
              </div>
              
            </fieldset>
            
          </form>
        </div>
      </div>
    </div>
  
  <script src="resources/js/dFilter.js"></script>
  <script src="bootstrap/js/bootstrap-collapse.js"></script>
  <script src="bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="bootstrap/js/bootstrap-popover.js"></script>
  <script src="bootstrap/js/bootstrap-alert.js"></script>
  <script src="resources/js/jqBootstrapValidation.js"></script>
  <script>
      $(function () { $("input,select,textarea,checkbox").not("[type=submit]").jqBootstrapValidation(); } );
  </script>
  <script>
      $('#noHome, #textAlerts, #noHome_2, #textAlerts_2').parent().tooltip('hide')

      $('#tooltip').tooltip('hide');
      $('#alerttool').tooltip('hide');
      $('#tooltip2').tooltip('hide');
      $('#alerttool2').tooltip('hide');
      $(".collapse").collapse('hide');
      $('#mobileAlert').hide()
      $('#mobileAlert2').hide()
      $('#popover').popover();
      //toggle_secondary_guardian();
      
      $('#Billing1').attr('disabled', true);
      $('#Billing2').attr('disabled', true);
      $('#BillingCity').attr('disabled', true);
      $('#BillingState').attr('disabled', true);
      $('#BillingZIP').attr('disabled', true);
      
      $('#Address1_2').attr('disabled', true);
      $('#Address2_2').attr('disabled', true);
      $('#City_2').attr('disabled', true);
      $('#State_2').attr('disabled', true);
      $('#ZIP_2').attr('disabled', true);
      
      function disable_billing() {
        if ( $('#BillingAddressSame').is(':checked') ) {
          $('#Billing1').attr('disabled', true);
          $('#Billing2').attr('disabled', true);
          $('#BillingCity').attr('disabled', true);
          $('#BillingState').attr('disabled', true);
          $('#BillingZIP').attr('disabled', true);
        } else {
          $('#Billing1').attr('disabled', false);
          $('#Billing2').attr('disabled', false);
          $('#BillingCity').attr('disabled', false);
          $('#BillingState').attr('disabled', false);
          $('#BillingZIP').attr('disabled', false);
        }
        return 0;
      }
      
      function secondary_address() {
        if ( $('#AddressSame').is(':checked') ) {
          $('#Address1_2').attr('disabled', true);
          $('#Address2_2').attr('disabled', true);
          $('#City_2').attr('disabled', true);
          $('#State_2').attr('disabled', true);
          $('#ZIP_2').attr('disabled', true);
        } else {
          $('#Address1_2').attr('disabled', false);
          $('#Address2_2').attr('disabled', false);
          $('#City_2').attr('disabled', false);
          $('#State_2').attr('disabled', false);
          $('#ZIP_2').attr('disabled', false);
        }
        return 0;
      }
      
      function clear_phone() {
        if ($('#Phone').attr('value') == "() -")
              $('#Phone').attr('value', '');
        if ($('#Mobile').attr('value') == "() -")
              $('#Mobile').attr('value', '');
        if ($('#Phone_2').attr('value') == "() -")
              $('#Phone_2').attr('value', '');
        if ($('#Mobile_2').attr('value') == "() -")
              $('#Mobile_2').attr('value', '');
      }
      
      function check_mobile() {
        var re = /^\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d$/;
        if ($('#textAlerts').is(':checked') && 
           re.test($('#Mobile').attr('value'))) {
             $('#mobileAlert').hide()
             return 0;
        } else {
          $('#mobileAlert').show()
          $('#textAlerts').attr('checked', false)
        }
        if ((!$('#textAlerts').is(':checked')) && re.test($('#Mobile').attr('value')))
          $('#mobileAlert').hide();
        return 0;
      }
      
      function check_mobile2() {
        var re = /^\(\d\d\d\)\ \d\d\d\-\d\d\d\d$/;
        if ($('#textAlerts2').is(':checked') && 
           re.test($('#Mobile_2').attr('value'))) {
             $('#mobileAlert2').hide()
             return 0;
        } else {
          $('#mobileAlert2').show()
          $('#textAlerts2').attr('checked', false)
        }
        return 0;
      }
      
      function disable_homephone() {
        $('#Phone').attr('value', '');
        if ($('#noHome').is(':checked')) {
          $('#Phone').attr('disabled', true);
        } else {
          $('#Phone').attr('disabled', false);
          $('#Phone').focus();
        }
        return 0;
      }
      
      function disable_homephone2() {
        $('#Phone_2').attr('value', '');
        if ($('#noHome_2').is(':checked')) {
          $('#Phone_2').attr('disabled', true);
        } else {
          $('#Phone_2').attr('disabled', false);
          $('#Phone_2').focus();
        }
        return 0;
      }
      
      function toggle_secondary_guardian() {
        if ($('#noSecondGuardian').is(':checked')) {
          $('#Name_2').attr('disabled', true);
          //$('#Name_2').attr('required', false);
          $('#Lastname_2').attr('disabled', true);
          //$('#Lastname_2').attr('required', false);
          $('#DOB_2').attr('disabled', true);
          //$('#DOB_2').attr('required', false);
          $('#Phone_2').attr('disabled', true);
          $('#Mobile_2').attr('disabled', true);
          $('#Address1_2').attr('disabled', true);
          //$('#Address1_2').attr('required', false);
          $('#Address2_2').attr('disabled', true);
          $('#City_2').attr('disabled', true);
          //$('#City_2').attr('required', false);
          $('#State_2').attr('disabled', true);
          //$('#State_2').attr('required', false);
          $('#ZIP_2').attr('disabled', true);
          //$('#ZIP_2').attr('required', false);
          $('#AddressSame').attr('disabled', true);          
        } else {
          $('#Name_2').attr('disabled', false);
          //$('#Name_2').attr('required', true);
          $('#Lastname_2').attr('disabled', false);
          //$('#Lastname_2').attr('required', true);
          $('#DOB_2').attr('disabled', false);
          //$('#DOB_2').attr('required', true);
          $('#Phone_2').attr('disabled', false);
          $('#Mobile_2').attr('disabled', false);
          $('#Address1_2').attr('disabled', false);
          //$('#Address1_2').attr('required', true);
          $('#Address2_2').attr('disabled', false);
          $('#City_2').attr('disabled', false);
          //$('#City_2').attr('required', true);
          $('#State_2').attr('disabled', false);
          //$('#State_2').attr('required', true);
          $('#ZIP_2').attr('disabled', false);
          //$('#ZIP_2').attr('required', true);
          $('#AddressSame').attr('disabled', false);   
        }
        secondary_address(); //make sure the second address field behaves
        return 0;
      }
      
      $(function() {

          var $sidebar   = $("#sidebar"), 
              $window    = $(window),
              offset     = $sidebar.offset(),
              topPadding = 15;
      
          $window.scroll(function() {
              if ( $window.width() <= 767 ) { 
                  //do not follow scroll
                  $sidebar.stop().animate({
                      marginTop: 0
                  });
              } else {
                if ($window.scrollTop() > offset.top) {
                    $sidebar.stop().animate({
                        marginTop: $window.scrollTop() - offset.top + topPadding
                    });
                } else {
                    $sidebar.stop().animate({
                        marginTop: 0
                    });
                }
              }
          });
          
      });
    
  </script>
  </body>
</html>
