<?php 

class parking{

	private $n; //total spaces
	private $totalSpaces; // just backup var as n gets modified eventually
	private $x; // total entries

	function __construct($n, $x) {
   		$this->n = $n;
   		$this->totalSpaces = $n;
   		$this->x = $x;
	}
	
	public function vehicleEntry(){
		//echo "Entry logged";
		return $this->n--;
	}

	
	public function getCarsAvailableInside(){
		return ($this->totalSpaces) - ($this->n);
	}

	public function getSpacesAvailableInside(){
		return $this->n;
	}

	public function checkCarsLimit(){
		return $this->n > $this->totalSpaces;
	}

	public function checkParkingAvailability(){
		if($this->n == 0){
			return "PARKING FULL";
		}else{
			return "PARKING AVAILABLE ".$this->n;
		}
	}

	public function vehicleExit(){
		//echo "Exit tracked";
		return $this->n++;
	}

}

?>