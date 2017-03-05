
n getEstimatesForUserLocation(latitude,longitude) {
  $.ajax({
    url: "https://api.uber.com/v1/estimates/price",
    headers: {
        Authorization: "Token "  uberServerToken
    },
    data: {
      start_latitude: latitude,
      start_longitude: longitude,
      end_latitude: partyLatitude,
      end_longitude: partyLongitude
    },
    success: function(result) {
      console.log(result);
    }
  });
}
