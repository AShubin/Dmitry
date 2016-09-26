<?php require_once "header.php"; ?>

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Contacts</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Contacts</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--google map start-->
     <div class="contact-map">
         <div id="map-canvas" style="width: 100%; height: 400px"></div>
     </div>
     <!--google map end-->

     <!--container start-->
    <div class="container">


        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <h4>New Yourk</h4>
                <p>
                    Jonathon Smith <br/>
                    Street Address 228 Park Avenue South New York, <br/>
                    NY 10003-1502.
                </p>
                <br>
                <br>
                <br>
                <p>
                    Phone <br/>
                    <span class="muted">(212) 210-2100</span><br/>
                    Fax <br/>
                    <span class="muted">212-995-4794.</span><br/>
                    Email <br/>
                    <span class="muted">info@domain.com</span>
                </p>
            </div>
            <div class="col-lg-7 col-sm-7 address">
                <h4>Send a Message</h4>
                <div class="contact-form">
                    <form role="form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" placeholder="" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Message</label>
                            <textarea placeholder="" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <!--container end-->

     <!--footer start-->
     <footer class="footer">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-sm-3">
                     <h1>contact info</h1>
                     <address>
                         <p>Address: No.28-63877 street</p>
                         <p>lorem ipsum city, Country</p>

                         <p>Phone : (123) 456-7890</p>
                         <p>Fax : (123) 456-7890</p>
                         <p>Email : <a href="javascript:;">support@vectorlab.com</a></p>
                     </address>
                 </div>
                 <div class="col-lg-5 col-sm-5">
                     <h1>latest tweet</h1>
                     <div class="tweet-box">
                         <i class="fa fa-twitter"></i>
                         <em>Please follow <a href="javascript:;">@nettus</a> for all future updates of us! <a href="javascript:;">twitter.com/vectorlab</a></em>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                     <h1>stay connected</h1>
                     <ul class="social-link-footer list-unstyled">
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                         <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-skype"></i></a></li>
                         <li><a href="#"><i class="fa fa-github"></i></a></li>
                         <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
     <!--footer end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>


  <script>

      //google map
      function initialize() {
          var myLatlng = new google.maps.LatLng(-37.815207, 144.963937);
          var mapOptions = {
              zoom: 15,
              scrollwheel: false,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
          });
      }
      google.maps.event.addDomListener(window, 'load', initialize);



  </script>

  </body>
</html>
