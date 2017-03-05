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
        
        <div class="results_bar"> <?php echo date("G:i:s");?></div>

        </div>
        <div class="col-sm-2"></div>
      </div>
    </div>
   </div> 
  </div>

 

  <div class="sidenav" style="display: none;">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
   
   
  <script src="js/script.js"></script>

   <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA-IBLs0bvwYtY8MAqXSOZNPtcg6u3cWI&callback=initMap"></script>
   <scipt>

   

      

   </scipt>

  </body>
</html>
