<?php


final class jammieStop{

	//class will be called by class that will confirm their location

	private $name="name";
	private $id;
	private $lat="";
	private $long="";
	private $connection;


	public function __construct($name, $lat, $long, $id){



		$this->name=$name;
		$this->lat=$lat;
		$this->long=$long;

		if($id=="daddy"){
			
			//initialise lat and long
			require_once("connect_to_database.php");
			$this->connection=$connection;

			$this->addToDataBase();
			$this->assignId();
			
		}else{
			$this->id=$id;
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

	public function __get($name){
		return $this->$name;
	}

	public function __set($name, $value){
		$this->$name=$value;
	}

	private function addToDataBase(){

	
		$this->connection->query("INSERT INTO `jammie_stops` (name,latitude,longitude)
										 VALUES('$this->name','$this->lat','$this->long')") or die(mysqli_error());
		// mysqli_close();


	}

	public function __toString(){
		return "Well come to ".$this->name.", lat: ".$this->lat." and long: ".$this->long. ".ID: ".$this->id;
		
	}


}

$stop = new jammieStop("Tugwell Hall","-3853","34343","daddy");
echo $stop; 


?>