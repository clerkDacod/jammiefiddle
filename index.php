<!DOCTYPE html>
<html>
  <head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
       #map {
              height: 100vh;
              width: 100vw;
       	  
            }

       body{
       	 

       }
    </style>



     <script>
      function initMap() {
        function show(){
          $("#search_jam").show("slow");
        }
        window.setTimeout(show, 1000);

        var tugwell = {lat: -33.9542646, lng: 18.4714981};
        var map = new google.maps.Map(document.getElementById('map'), {
          mapTypeControl: true,
           
          streetViewControlOptions: {
              position: google.maps.ControlPosition.RIGHT_BOTTOM
          },

          mapTypeControlOptions: {
              style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
              position: google.maps.ControlPosition.LEFT_BOTTOM
          },

          draggable: false, 
          zoomControl: true, 
          scrollwheel: false, 
          disableDoubleClickZoom: false,
          zoom: 18,
          center: tugwell

        });

        var infoWindow = new google.maps.InfoWindow({map: map});


        //HTML5 Geolocation
         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        }else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }




        // var marker = new google.maps.Marker({
        //   position: uluru,
        //   map: map,
        //   animation: google.maps.Animation.DROP
        // });

      }
        
    </script>


  </head>
  <body>
    <div id="map"></div>
   
  <div class="search_group">
    <div class="container">
      <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
      <div class="search_bar">
        
        <div class="form-group">
          
          <input type="text" class="form-control" id="search_jam" placeholder="Where to?">
        </div>


      </div>
      </div>
      <div class="col-sm-2"></div>
      </div>
    </div>
   </div>
  
  <div class="results_group">
    <div class="container">
    <div class="row">
      <div class="results">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        
        <div class="results_bar"></div>

        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
   </div> 
  </div>

 <div class="whereto3column">
   <col-sm-3></col-xs-3>
   <col-sm-3></col-xs-3>
   <col-sm-3></col-xs-3>
 </div>

 <div class="results3column">
   <col-sm-3></col-xs-3>
   <col-sm-3></col-xs-3>
   <col-sm-3></col-xs-3>
 </div>

  <div class="sidenav">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
   
   

   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA-IBLs0bvwYtY8MAqXSOZNPtcg6u3cWI&callback=initMap"></script>
   <scipt>

   

      

   </scipt>

  </body>
</html>
