<?php

namespace App\Schema;

class tLizenz
{
	const TABLE_NAME = 'tLizenz';
	const cAuthId = 'cAuthId';
	const cAuthToken = 'cAuthToken';
	const bLizenzen = 'bLizenzen';
	const bSignatur = 'bSignatur';
	const dDatum = 'dDatum';

	/** @var string cAuthId */
	public $cAuthId;

	/** @var string cAuthToken */
	public $cAuthToken;

	/** @var resource bLizenzen */
	public $bLizenzen;

	/** @var resource bSignatur */
	public $bSignatur;

	/** @var string dDatum */
	public $dDatum;
}
