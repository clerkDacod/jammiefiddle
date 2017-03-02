//connects with route, //frequency and Jammie Stop as per the information given by user.js
//uses calculate distance to find nearest stop
//directs user

<?php

require_once("../jammieStop");


class User{

	private $lat;
	private $long;
	private $destination;

	public function __contruct($lat, $long, $destinationId){

		$this->lat=$lat;
		$this->long=$long;
		$this->destination= new jammieStop();
		$this->destination->setUpFromId($destinationId);


	}


	public function __get($value){

		return $this->$value;
	}

} 

 ?>