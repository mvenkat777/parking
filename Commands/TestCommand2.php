<?php

class TestCommand
{

	/**
	 * @var string
	 */
	public $n;
	
    /**
	 * @var string
	 */
	public $totalSpaces;
	
	/**
	 * @var string
	 */
	public $x;

	
	function __construct($n,$x)
    {	
    	$this->n =  $n;
    	$this->totalSpaces =  $n;    	
    	$this->x =  $x;
    	
    } 
}