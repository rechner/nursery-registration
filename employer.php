 <?php
 header("Access-Control-Allow-Origin: *");
 ?>
 
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

  <body onload="initialize()">
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
          <h3>Employers <small>Guardian Information (continued)</small></h3>
          
          <form class="form-horizontal">
            <fieldset>
              <legend>Guardian 1
              <small>Type the name of your workplace and hit
              Go! to find the address and phone number automatically
              </small></legend>
              <div class="control-group">
                <label class="control-label" for="employer_1">Employer Name</label>
                <div class="controls">
                  <div class="input-append">
                    <input type="text" id="employer_1" 
                     name="employer_1" placeholder="Acme Corp Prattville">
                    <a href="#myModal" role="button" class="btn"
                      data-toggle="modal" onClick="search_employer(1);">Go!</a>
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="address_1">Address</label>
                <div class="controls">
                  <input type="text" id="address_1" name="address_1" class="span7"
                   placeholder="Street Address, City, State">
                </div>
              </div>
              <div class="control-group form-inline">
                <label class="control-label" for="phone_1">Phone</label>
                <div class="controls">
                  <input type="text" id="phone_1" placeholder="Phone"
                   class="input-medium">
                </div>
              </div>
            </fieldset>
            
            <fieldset>
              <legend>Guardian 2</legend>
              <div class="control-group">
                <label class="control-label" for="employer_2">Employer Name</label>
                <div class="controls">
                  <div class="input-append">
                    <input type="text" id="employer_2" 
                     name="employer_1" placeholder="Acme Corp Prattville">
                    <a href="#myModal" role="button" class="btn"
                      data-toggle="modal" onClick="search_employer(2);">Go!</a>
                  </div>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="address_2">Address</label>
                <div class="controls">
                  <input type="text" id="address_2" name="address_2" class="span7"
                   placeholder="Street Address, City, State">
                </div>
              </div>
              <div class="control-group form-inline">
                <label class="control-label" for="phone_2">Phone</label>
                <div class="controls">
                  <input type="text" id="phone_2" placeholder="Phone"
                   class="input-medium">
                </div>
              </div>
            </fieldset>
          </form>  
          
        </div> <!-- /content -->
      </div>
    </div>
  
  <!-- Modal -->
  <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h3 id="myModalLabel">Employer search result</h3>
    </div>
    <div class="modal-body">
      <p>We found the following information relating to "<span id="modal_query"></span>":
      <br><br>
      <strong>Address: </strong> <span id="modal_address"></span><br>
      <strong>Phone:</strong> <span id="modal_phone"></span><br><br>
      Is this information correct?</p>
      <div id="map_canvas" style="width: 300px; height:200px"></div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-primary">Yes</button>
      <button class="btn" data-dismiss="modal" aria-hidden="true">No</button>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap-modal.js"></script>
  <script src="bootstrap/js/bootstrap-transition.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyArk6u-tK-mOpmpF1YA-jYUkVJe7WpfIjU&libraries=places&sensor=false"></script>
  <script>
    
    function search_employer(index) {
      
        query = document.getElementById('employer_'+index).value
        if (query == '') return false;
        
        document.getElementById('modal_query').innerHTML = 
          query;
        service.textSearch({query: query}, callback);
      
    }
      
    var map;
    var service;
    
      
    function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
        
        service = new google.maps.places.PlacesService(map);
        window.map = map;
      }
      
      function callback(results, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            var place = results[i];
            //createMarker(results[i]);
            //console.log(results[i]);
          }
          //console.log(results[0]['geometry']);
          window.map.panTo(results[0]['geometry']['location']);
          document.getElementById('modal_address').innerHTML = 
            results[0]['formatted_address'];
          service.getDetails({ reference: results[0]['reference'] },
            details_callback);
        }
      }
      
      function details_callback(place, status) {
        if (status == google.maps.places.PlacesServiceStatus.OK) {
          document.getElementById('modal_phone').innerHTML = 
            place['formatted_phone_number'];
        }
      }
      
      $("#employer_1").keyup(function(event){
          if(event.keyCode == 13){
              $("#id_of_button").click();
          }
      });
          
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
