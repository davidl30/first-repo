<?php

Class Toto
{
	public $toto1;
	public $toto2;

	public function __construct()
	{
		$this->toto1 = 'titi';
		$this->toto2 = 'tata';
	}
  
  public function plus()
  {
    return '0 + 0 = la tête à toto';
  }
}
