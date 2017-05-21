<?php 

class ParkingRepo{

	//static private $rn;

	public function vehicleEntry($n){
		echo "Entry logged <hr>";
		//$n = $n-1;
		return $n-1;
	}

	
	public function getCarsAvailableInside($n,$totalSpaces){
		return ($totalSpaces) - ($n);
	}

	public function getSpacesAvailableInside(){
		return $n;
	}

	public function checkCarsLimit($n,$totalSpaces){
		//echo $n.$totalSpaces;
		return ($n > $totalSpaces)?"YES MORE THAN $totalSpaces":"NOT MORE THAN $totalSpaces";
	}

	public function checkParkingAvailability($n){ //echo "COMING";
		if($n == 0){
			return "<B>PARKING FULL , GATES CLOSED</B> <hr>";
		}else{
			return "PARKING AVAILABLE : $n <hr>";
		}
	}

	public function vehicleExit($n){
		echo "Exit logged <hr>";
		return $n = $n+1;
	}

}

?>