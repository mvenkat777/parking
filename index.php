<?php require("conf.php"); 
require("Model/ParkingRepo.php");
require_once("Commanding/DefaultCommandBus.php");
require_once("Commands/EntryCommand.php");
require_once("Commands/ExitCommand.php");

$defaultCommandBus =  new DefaultCommandBus();

/*Testcases for entries */
$one = $defaultCommandBus->execute(new EntryCommand(TOTAL_PARKING_SPACES));
$two = $defaultCommandBus->execute(new EntryCommand($one));
$three = $defaultCommandBus->execute(new EntryCommand($two));
$four = $defaultCommandBus->execute(new EntryCommand($three));

/*Testcases for exit */
$five = $defaultCommandBus->execute(new ExitCommand($four));
$six = $defaultCommandBus->execute(new ExitCommand($five));

$repoInstance = new ParkingRepo();
echo "<B>TOTAL CARS INSIDE</B> : ".$repoInstance->getCarsAvailableInside($six,TOTAL_PARKING_SPACES);
echo "<hr> <B>CHECK FOR NOT MORE THAN ".TOTAL_PARKING_SPACES." CARS </B> : ".$repoInstance->checkCarsLimit($six,TOTAL_PARKING_SPACES);

echo "<hr>";
$seven = $defaultCommandBus->execute(new EntryCommand($six));
$eight = $defaultCommandBus->execute(new EntryCommand($seven));
$nine = $defaultCommandBus->execute(new EntryCommand($eight));
$ten = $defaultCommandBus->execute(new EntryCommand($nine));
$eleven = $defaultCommandBus->execute(new EntryCommand($ten));
$twelve = $defaultCommandBus->execute(new EntryCommand($eleven));
$thirteen = $defaultCommandBus->execute(new EntryCommand($twelve));
$fourteen = $defaultCommandBus->execute(new EntryCommand($thirteen));

?>