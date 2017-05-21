<?php
//use Exception;

class CommandTranslator
{
    public function toCommandHandler($command)
    {
        //die(get_class($command));
        $handler = get_class($command) . 'Handler';
        //die($handler);
        require_once("Handlers/Commands/".$handler.".php");
        if (! class_exists($handler)) {
            $message = "Command handler [$handler] does not exist.";
            die($message);
            //throw new Exception($message);
        }
        return $handler;
    }

    /*public function toValidator($command)
    {
        $validator = str_replace('Commands', 'Validators\Commands', get_class($command). 'Validator');
        if (! class_exists($validator)) {
            return false;
        }
        return $validator;
    }*/
}
