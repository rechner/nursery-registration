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
            <div class="bar" style="width: 66%;"></div>
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
          <h3>Child Information</h3>
          <form class="form">
            <fieldset class="form-inline">
              <legend>Has your child previously attended Outfitters or Explorers
              at Journey Church?</legend>
              <span class="label label-info">Info</span>
              Knowing this makes it easier for us to keep both systems up to date
                with the latest information.<br><br>
              <label class="radio offset1">
                <input type="radio" name="churchMember" id="churchMember1" value="true">
                  <strong>Yes</strong>
              </label>
              <label class="radio offset1">
                <input type="radio" name="churchMember" id="newMember2" value="false" checked>
                  <strong>No</strong>
              </label>
            </fieldset>
            
            <hr>
            
            <ul class="nav nav-tabs" id="children">
              <li class="active"><a href="#child1" id="link1">Child 1</a></li>
              <li id="addButton"><button type="button" class="btn btn-success"
                  onClick="add_child();" style="margin-left: 5px">
                  Add Child <i class=" icon-plus icon-white"></i></button></li>
            </ul>
             
            <div class="tab-content">
              <div class="tab-pane active" id="child1">
                <!-- begin form -->
                <fieldset class="form-horizontal">
                  <small>Inputs marked in red are required</small>
                  <div class="control-group">
                    <label class="control-label" for="Name">Name</label>
                    <div class="controls">
                      <input type="text" id="Name" placeholder="Name"
                       class="span5" name="Name" onkeydown="update_tab(1);" required>
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
                    <label class="control-label" for="Nickname">Name child is known by</label>
                    <div class="controls">
                      <input type="text" id="Nickname" placeholder="Nickname" 
                       class="span5" name="Nickname">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="DOB1">DOB</label>
                    <div class="controls control-row">
                      <input type="text" id="DOB1" placeholder="YYYY-MM-DD"
                       class="input-small" name="DOB1" required
                       onKeyDown="return dFilter (event.keyCode, this, '####-##-##');"
                       onkeyup="showAge(1);"
                       pattern="^[12]\d{3}-(0?[1-9]|1[0-2])-([012]?[0-9]|3[01])$"
                       data-validation-pattern-message="Must be a valid ISO8601 date.">
                       <span class="help-inline" style="color: red">*</span>
                       <span class="help-inline" id="age1">Age: ?</span>
                    </div>
                  </div>
                </fieldset>
                
                <fieldset class="form-horizontal">
                  <legend>Medical <small>Required</small></legend>
                  <small>List any medical
                        conditions or considerations, as well as names
                        and dosages of any medications.</small>
                  <div class="control-group" style="margin-top: 20px">
                    <label class="control-label" for="Medical">Medical</label>
                    <div class="controls">
                      <textarea name="Medical" id="Medical" rows="2" class="span5"></textarea>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" for="Allergies">Food allergies</label>
                    <div class="controls">
                      <input type="text" id="Allergies" placeholder="Allergies"
                        class="span5" name="Allergies">
                      <span class="help-inline">e.g. Peanuts</span>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <label class="control-label" for="DoctorName">Name of child's doctor</label>
                    <div class="controls">
                      <input type="text" id="DoctorName" placeholder="Dr. John Smith"
                        class="span5" name="DoctorName">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="DoctorAddress">Address</label>
                    <div class="controls">
                      <input type="text" id="DoctorAddress" placeholder="Street Address, City, State"
                        class="span5" name="DoctorAddress">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="DoctorPhone">Phone</label>
                    <div class="controls">
                      <input type="text" id="DoctorPhone" placeholder="Phone"
                        class="span5" name="DoctorPhone"
                        pattern="\([2-9]\d\d\)\ [2-9]\d\d\-\d\d\d\d"
                        data-validation-pattern-message="Enter a valid US phone number"
                        onKeyDown="javascript:return dFilter (event.keyCode, this, '<?php echo _("(###) ###-####"); ?>');">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="EmergencyAuthorization">Emergency Authorization</label>
                    <div class="controls">
                      <label class="radio">
                        <input type="radio" id="EmergencyAuthorization"
                          name="EmergencyAuthorization" value="true" required>
                        <span style="color: red">*</span>
                        I give permission for the
                        <a href="#" title="Journey Preschool" data-placement="top">child care</a>
                        facility to obtain emergency<br>medical treatment, 
                        including emergency transportation, for my<br>
                        child if I cannot be reached immediately. 
                        I agree to be responsible<br>for any emergency
                        medical expenses incurred.
                      </label>
                      <label class="radio">
                        <input type="radio" id="EmergencyAuthorization2"
                          name="EmergencyAuthorization" value="false">
                        I <strong>DO NOT</strong> give permission to the
                        child care facility to obtain emergency<br>medical
                        treatment for my child, and instead request 
                        that the following<br>procedures be followed in an 
                        emergency:
                      </label>
                      <textarea name="EmergencyInstructions" rows=3 class="span8"></textarea>
                    </div>
                  </div>
                  
                  <div class="control-group" style="margin-top: 20px">
                    <label class="control-label" for="SpecialNeeds">Special needs &amp; instructions</label>
                    <div class="controls">
                      <textarea name="SpecialNeeds" id="SpecialNeeds" rows="2" class="span5"></textarea>
                    </div>
                  </div>
                  
                </fieldset>
                
                <hr>
                <h4>I give permission for my child to participate in:</h4>
                <fieldset class="form-inline offset1">
                  <legend>Activities away from the facility</legend>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesAway" id="Away1" value="true" required>
                      <strong>Yes</strong>
                  </label>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesAway" id="Away2" value="false">
                      <strong>No</strong>
                  </label>
                </fieldset>
                
                <fieldset class="form-inline offset1">
                  <legend>Transportation provided by the facility</legend>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesTransit" id="Transit1" value="true" required>
                      <strong>Yes</strong>
                  </label>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesTransit" id="Transit2" value="false">
                      <strong>No</strong>
                  </label>
                </fieldset>
                
                <fieldset class="form-inline offset1">
                  <legend>Swimming/wading activities provided by the facility</legend>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesSwimming" id="Swimming1" value="true" required>
                      <strong>Yes</strong>
                  </label>
                  <label class="radio offset1">
                    <input type="radio" name="activitiesSwimming" id="Swimming2" value="false">
                      <strong>No</strong>
                  </label>
                </fieldset>
                <fieldset class="form-inline">
                  <legend>Agreement</legend>
                  Please read the following carefully<br><br>
                  <label class="checkbox offset1">
                    <input type="checkbox" name="TripRelease" id="TripRelease" required>
                      <strong><span class="label label-important">Important</span>
                      <span>By checking this box, I understand that the 
                        Department of Human Resources does not inspect 
                        activities away from the child care facility 
                        (home or center). The licensee of the child
                        care facility assumes full responsibility for such 
                        activities.</span></strong>
                  </label>
                </fieldset>
                <!-- end form -->
              </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-large span4"
                 name="action">Continue <i class='icon-ok icon-white'></i></button>
                 <button type="button" class="btn btn-large btn-success"
                  onClick="add_child();" style="margin-left: 5px">
                  Add Child <i class=" icon-plus icon-white"></i></button>
                <button id="cancel" class="btn btn-large" type="button">Cancel</button>
              </div>
          </form>
          
        </div><!-- /content -->
      </div>
    </div>
  
  <script src="resources/js/dFilter.js"></script>
  <script src="bootstrap/js/bootstrap-collapse.js"></script>
  <script src="bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="bootstrap/js/bootstrap-popover.js"></script>
  <script src="bootstrap/js/bootstrap-alert.js"></script>
  <script src="bootstrap/js/bootstrap-tab.js"></script>
  <script src="resources/js/jqBootstrapValidation.js"></script>
  <script>
      $(function () { $("input,select,textarea,checkbox").not("[type=submit]").jqBootstrapValidation(); } );
      $('#EmergencyAuthorization').parent().tooltip('hide')
  </script>

  <script>
    
      var record_count = 1;
      
      //maniuplate the DOM to add a new child record
      function add_child() {

        record_count++;  //incrament the record counter
        var parent = document.getElementById('children');
        var button = document.getElementById('addButton');
        
        //remove the button
        parent.removeChild(button);
        
        //create and add the new tab
        $('.nav-tabs').append('<li><a href="#child'+record_count+
          '">Child '+record_count+'</a>');
        
        //add the button back
        parent.appendChild(button);
        
        //add the content section
        $('.tab-content').append('<div class="tab-pane" id="child'+
          record_count+'">new....'+record_count+'</div>');

        //switch to the tab
        $('#children a[href="#child'+record_count+'"]').tab('show');
        
        //return to the top of the page
        window.scrollTo(0,0);
        
        return 0;
      }

      // callback for the tabs
      $("#children").on("click", "a", function(e){
          e.preventDefault();
          $(this).tab('show');
        });
        
        
      function update_tab(tabnumber) {
        var name = $('#Name').attr('value');
        var surname = $('#Lastname').attr('value');
        
        if ((name != "") || (surname != ""))
          document.getElementById('link'+tabnumber).innerHTML = name //+ ' ' + surname;
      }
      
      function showAge(ind) {
        
          document.getElementById('age1').innerHTML = "Age: "+
            getAge($('#DOB'+ind).attr('value'));
            
      }
      
      var getAge = function(a) {
        a = new Date(Date.parse(a.replace(/-/g, "/")));
        var b = new Date, 
          years  = b.getYear () - a.getYear (),
          months = b.getMonth() - a.getMonth(),
          days   = b.getDate () - a.getDate ();
        if (b <= a) return "Invalid DOB."
        b.getMonth() < a.getMonth() && (years --, months +  12);
        b.getDate () < a.getDate () && (months--, days   += 31);
        0 > months && (years--, months = 11);
        a = [], b = function(b, c) {
          0 < b && a.push(b + c + (1 < b ? "s" : "")) }
        b(years , " year" );
        b(months, " month");
        b(days  , " day"  );
        1 < a.length && (a[a.length - 1] = "and " + a[a.length - 1]);
        return(!a.length ? "0 days" : "" ) +
          a.join(2 < a.length ? ", " : " ") + " old."
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
