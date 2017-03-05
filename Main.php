<?php 

class Main{

	private $user;
	private $max;
	private $getNearestStop;
	private $activeRoute;
	private $time=strtotime(date('G:i'));

    private $time= strtotime(now());
	public funtion __construct($user){

		$this->user=$user;

		$jammieStop = new JammieStop();
		$this->getNearestStop = $jammieStop->getNearestStop($this->user->lat, $this->user->long);

		$route = new Route();
		$this->activeRoute= $route->getRoute($this->time, $this->getNearestStop, $this->user->destion)

		$this->max = $route->getTimeTillArrival($activeRoute);


	}


}



require_once("user/user.php");

if(isset($_GET['lat']) && isset($_GET['long']) && isset($_GET['destination']){

	new $user = User($_GET['lat'], $_GET['long'],$_GET['destination']);

	$Main = new Main($user);


	//return time till arrival $Main->max;
	//return destination destination=jammieStop-setupfromId(id);
}


 ?>





