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

        var uluru = {lat: -33.9542646, lng: 18.4714981};
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
          center: uluru

        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          animation: google.maps.Animation.DROP
        });

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
   
   

   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA-IBLs0bvwYtY8MAqXSOZNPtcg6u3cWI&callback=initMap"></script>
   <scipt>

   

      

   </scipt>

  </body>
</html>
