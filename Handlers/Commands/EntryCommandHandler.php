<?php

//require("../../Repository/ParkingModel.php");

class EntryCommandHandler
{
 
    /**
     * @var parkingRepo
     */
    private $parkingRepo;
    
    public function __construct()
    {
        $this->parkingRepo = new ParkingRepo();
    }

    /**
     * @param  EntryCommand
     * @return mixed
     */
    public function handle($command)
    {    //die(var_dump($command));
    	$value = $this->parkingRepo->vehicleEntry($command->n);
    	//die(var_dump($value));
        echo $this->parkingRepo->checkParkingAvailability($value);
        return $value;
        
    }

    
}

