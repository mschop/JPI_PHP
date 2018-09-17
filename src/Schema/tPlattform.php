<?php

namespace App\Schema;

class tPlattform
{
	const TABLE_NAME = 'tPlattform';
	const nPlattform = 'nPlattform';
	const cID = 'cID';
	const cName = 'cName';
	const nInet = 'nInet';
	const cWaehrung = 'cWaehrung';

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cID */
	public $cID;

	/** @var string cName */
	public $cName;

	/** @var int nInet */
	public $nInet;

	/** @var string cWaehrung */
	public $cWaehrung;
}
