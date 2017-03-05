<?php


final class jammieStop{

	//class will be called by class that will confirm their location

	private $name="";
	private $id;
	private $lat="";
	private $long="";
	private $connection;
	private $distancesArray= array();


	public fucniton __construct(){

	}


	public function getNearestStop($lat, $long){

		$retult=$connection->query("SELECT * FROM jammie_stops");

		while ($jammieStop= $result->fetch_object()) {
			
			$this->distancesArray[$jammieStop->id] = vincentyGreatCircleDistance($lat,$long, $jammieStop->latitude, $jammieStop->longitude);

		}

		


		//arrange associate array from lowest to highest
		arsot($this->distancesArray);
		$slicedArray= array_slice($this->distancesArray,0,1);

		foreach ( $slicedArray as $key = > $value ) {

			$nearestJammieStopToReturn = new self();
			$nearestJammieStopToReturn->setUpFromId($key);
			return $nearestJammieStopToReturn;

		}
		//create nearestJammieStop object
		//return nearestJammieStop object



	}

	

	public function setUpFromId($id){

		$retult=$connection->query("SELECT * FROM jammie_stops");
		while ($jammieStop= $result->fetch_object()) {
				$this->id=$jammieStop->id;
				$this->name=$jammieStop->name;
				$this->latitude=$jammieStop->latitude;
				$this->longitude=$jammieStop->longitude;
		}

		

	}

	private function assignId(){

		
		
		$result=$this->connection->query("SELECT `id` FROM `jammie_stops` WHERE `name`='$this->name' ");

		if(mysqli_num_rows($result)>0){

			while($obj=$result->fetch_object()){
				$this->id=$obj->id;
			}
		}

		// mysqli_close();
	}

	public function __get($variableName){
		return $this->$variableName;
	}

	public function __set($variableName, $value){
		$this->$variableName=$value;
	}


	//back-end functions

	private function addToDataBase(){

	
		$this->connection->query("INSERT INTO `jammie_stops` (name,latitude,longitude)
										 VALUES('$this->name','$this->lat','$this->long')") or die(mysqli_error());
		


	}//end of back end function
	

	//find the distance between any two given points in the world
	function vincentyGreatCircleDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
	{
  // convert from degrees to radians
	  $earthRadius = 6371000;
	  $latFrom = deg2rad($latitudeFrom);
	  $lonFrom = deg2rad($longitudeFrom);
	  $latTo = deg2rad($latitudeTo);
	  $lonTo = deg2rad($longitudeTo);

	  $lonDelta = $lonTo - $lonFrom;
	  $a = pow(cos($latTo) * sin($lonDelta), 2) +
	    pow(cos($latFrom) * sin($latTo) - sin($latFrom) * cos($latTo) * cos($lonDelta), 2);
	  $b = sin($latFrom) * sin($latTo) + cos($latFrom) * cos($latTo) * cos($lonDelta);

	  $angle = atan2(sqrt($a), $b);
	  $distanceInKm = ($angle * $earthRadius)/1000;
	  return $distanceInKm;
	}


}

$stop = new jammieStop();
echo $stop; 


?>