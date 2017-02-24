<?php


final class jammieStop{

	//class will be called by class that will confirm their location

	private $name="";
	private $id;
	private $lat="";
	private $long="";
	private $connection;
	private $distancesArray= array();

	// public function __construct($name, $lat, $long, $id){



	// 	$this->name=$name;
	// 	$this->lat=$lat;
	// 	$this->long=$long;

	// 	if($id=="empty"){
			
	// 		//initialise lat and long
	// 		require_once("connect_to_database.php");
	// 		$this->connection=$connection;

	// 		$this->addToDataBase();
	// 		$this->assignId();
			
	// 	}else{
	// 		$this->id=$id;
	// 	}
		
	// }

	public fucniton __construct(){

	}


	public function getNearestStop($lat, $long){

		$retult=$con->query("SELECT * FROM jammie_stops");

		while ($jammieStop= $result->fetch_object()) {
			
			$this->distancesArray[$jammieStop->id] = vincentyGreatCircleDistance($lat,$long, $jammieStop->latitude, $jammieStop->longitude);

		}

		//arrange associate array from lowest to highest
		//create nearestJammieStop object
		//return nearestJammieStop object

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