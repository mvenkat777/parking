<?php
require("CommandBus.php");
require("CommandTranslator.php");

class DefaultCommandBus implements CommandBus
{

    //private $app;
    protected $commandTranslator;

    function __construct()
    {
        //$this->app = $app;
        $this->commandTranslator =  new CommandTranslator;

    }

    public function execute($command)
    {
        $handler = $this->commandTranslator->toCommandHandler($command);
        return (new $handler)->handle($command);
    }

}
