<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="../../favicon.ico">
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
 
      <title>Starter Template for Bootstrap</title>

      <!-- Bootstrap core CSS -->
      <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
      <link href="assets/bootstrap/css/corousel.css" rel="stylesheet">
      <!-- Custom styles for this template -->
     
      <script src="assets/js/jquery-2.1.3.min.js"></script>
      <script src="assets/js/holder.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
       <!-- jQuery -->
    
    <script>  
       
            function init_map() {
          var var_location = new google.maps.LatLng(45.430817,12.331516);
       
              var var_mapoptions = {
                center: var_location,
                zoom: 14
              };
       
          var var_marker = new google.maps.Marker({
            position: var_location,
                  map: var_map,
            title:"Venice"});
       
              var var_map = new google.maps.Map(document.getElementById("map-container"),
                  var_mapoptions);
       
          var_marker.setMap(var_map); 
       
            }
       
            google.maps.event.addDomListener(window, 'load', init_map);
       
    </script>
      <style type="text/css" media="screen">
         .fixed-panel {
              min-height: 162px;
              max-height: 162px;
              overflow-y: scroll;
        }

        .h2{
            margin: 0;     
            color: #666;
            padding-top: 90px;
            font-size: 52px;
            font-family: "trebuchet ms", sans-serif;    
        }
       .item{
            background: #333;    
            text-align: center;
            height: 300px !important;
        }
        .carousel{
            margin-top: 30px;
        }
        .bs-example{
          margin: 20px;
        }
       </style>
       <style>
          #map-canvas {
            width: 500px;
            height: 400px;
          }
       </style>
       <style>
         
          #map-outer {  height: 440px; 
                padding: 20px; 
              border: 2px solid #CCC; 
              margin-bottom: 20px; 
              background-color:#FFF }
        #map-container { height: 400px 
                    }
        @media all and (max-width: 991px) {
        #map-outer  { height: 650px;width:650px; }
        }
          .portfolio-item {
              margin-bottom: 25px;
          }

        
       </style>
</head>
   <body>
      <header>
       <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="home">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="#mymodal" data-toggle="modal" data-target="#myModal">Contact</a></li>
                <li><a href="#mymodal2" data-toggle="modal" data-target="#myModal2">Contact Us</a></li>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
        </nav>
             <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
                      </div>
                      <div class="modal-body">
                          <form class="form-horizontal" name="commentform" method="post" action="registration">
                              <div class="form-group">
                                  <label class="control-label col-md-4" for="first_name">First Name</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-4" for="last_name">Last Name</label>
                                  <div class="col-md-6">
                                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-4" for="email">Email Address</label>
                                  <div class="col-md-6 input-group">
                                  <span class="input-group-addon">@</span>
                                      <input type="email" class="form-control" id="email" name="email" placeholder="Email Address"/>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-4" for="comment">Question or Comment</label>
                                  <div class="col-md-6">
                                      <textarea rows="6" class="form-control" id="comments" name="comments" placeholder="Your question or comment here"></textarea>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <div class="col-md-6">
                                      <button type="submit" value="Submit" class="btn btn-custom pull-right">Send</button>
                                  </div>
                              </div>
                          </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
                      </div>
                      <div class="modal-body">
                            <div class="container">
                              
                                <div class="col-md-8">
                                    <div id="map-outer" class="col-md-12">
                                        <div id="address" class="col-md-4">
                                          <h2>Our Location</h2>
                                          <address>
                                          <strong>Peggy Guggenheim Collection</strong><br>
                                              Dorsoduro, 701-704<br>
                                              30123<br>
                                              Venezia<br>
                                              Italia<br>
                                              <abbr>P:</abbr> +39 041 240 5411
                                         </address>
                                        </div>
                                      <div id="map-container" class="col-md-8"></div>
                                    </div><!-- /map-outer -->
                                </div> <!-- /row -->
                              </div>
                               
                              </div><!-- /container -->
                              
                      <div class="modal-footer">
                        
                      </div>
                    </div>
                  </div>
                </div>
      </header>
       <!-- Carousel
          ================================================== -->
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="item">
                <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><!-- /.carousel -->