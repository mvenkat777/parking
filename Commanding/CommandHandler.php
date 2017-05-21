<?php

/**
 * Interface CommandHandler
 * @package Parking\Core
 */
interface CommandHandler{

    /**
     * @param $command
     * @return mixed
     */
    public function handle($command);

}
