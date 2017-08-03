<?php
namespace Mit;

abstract class AbstractModel 
{
	public $qb;

	public function __construct($qb)
	{
		$this->qb = $qb;
	}
}