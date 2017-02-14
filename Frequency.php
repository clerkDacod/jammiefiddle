 <?php

 final class Frequency{

 	private $startTime;
 	private $endTime;
 	private $routeId;
 	private $increment;

 	public function __construct($start, $end, $routeId,$increment){

 		$this->startTime=$start;
 		$this->endTime=$end;
 		$this->increment=$increment;
 		$this->routeId=$routeId;

 	}

 	public function __get($variable){
 		return variable;
 	}

 	public function add(){
 		//adds to database
 	}

 	public function remove(){
 		//remove from database
 	}

 }


 ?>