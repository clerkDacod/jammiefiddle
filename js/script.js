

	console.log("whlfajas");

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
          zoom: 18
          //center: tugwell

        });

        


        //HTML5 Geolocation
         if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            map.setCenter(pos);

            var infoWindow = new google.maps.InfoWindow({map: map});

            infoWindow.setPosition(pos);
            infoWindow.setContent('You are here.');
            
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


