<?php

public class Route{

 private $from;
 private $to;
 private $id;
 private $startingTime;
 private $endTime;


 // public function __construct($from, $to, $startingTime,$endTime,$id){

 // }

 public function __construct(){

 }


 public function getRoute($time, $depatureStation, $destion){

 	//searches for active route.
 	//creates object route
 	//returns object route



 	$routeQuery = $this->connection->quirey("SELECT * FROM `routes` WHERE `startTime` <= '$this->time' and `endTime` > '$this->time' and `from` == '$depatureStation->id' and `to` == '$destination->id' ");

 	if(mysqli_num_rows($routeQuery) > 0){

 		//The route exists and is active

 		$routeToReturn =  new self();
 		while ($objectRoute= $routeQuery->fetch_object()){
 			$routeToReturn->id= $objectRoute->id;
 			$routeToReturn->from= $objectRoute->from;
 			$routeToReturn->to= $objectRoute->to;
 			$routeToReturn->startingTime=$objectRoute->startingTime;
 			$routeToReturn->endTime=$objectRoute->endTime;
 		}

 		return $routeToReturn;

 	}else{

 		//the route iether doesn't exist or is not active -> look into having some of your time checking code inside this block to know exactly which one it is 
 		//and report consinsely
 	}



 }



 public function getTimeTillArrival($routeObject){
 	//interacts with frequency class and gets the time till arrival

 	$frequency = getFrequency($time, $routeObject->id);

 	$timeDifference = ($time - ($frequency->startTime)) / 60 ;

 	if($timeDifference===0){

 		return 0;
 	}else{

 		$remainder = $timeDifference % $frequency->incriment;
 		$minutesTillArrival = $frequency->incriment - $remainder;

 		return $minutesTillArrival;
		}
 }



 public function __get($variable){
 	return $this->$variable;
 }

  public function __set($variable, $value){
 	return $this->$variable=$value;
 }



//back end function
 public function addFrequency($startTime,$endTime,$frequency){

 	//connect to database, add frequency
 }


} 

 ?>

