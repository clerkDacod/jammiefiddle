<?php

public class Route{

 private $from;
 private $to;
 private $id;
 private $startingTime;
 private $endTime;
 private $frequences=[];

 public function __construct($from, $to, $startingTime,$endTime,$id){

 }

 public function __get($variable){
 	return $this->$variable;
 }

  public function __set($variable, $value){
 	return $this->$variable=$value;
 }

 public function addFrequency($startTime,$endTime,$frequency){

 	//connect to database, add frequency
 }


} 

 ?>

