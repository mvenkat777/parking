<?php

//require("../../Commanding/CommandHandler.php");

class TestCommandHandler
{
 
    /**
     * @param  CreateCustomerCommand
     * @return mixed
     */
    public function handle($command)
    {   
      
        die(var_dump($command));
        
    }

    
}

