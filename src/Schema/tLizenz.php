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
	const COLUMN_NAMES = ['cAuthId', 'cAuthToken', 'bLizenzen', 'bSignatur', 'dDatum'];
	const COLUMN_TYPES = [
		'cAuthId' => 'varchar',
		'cAuthToken' => 'varchar',
		'bLizenzen' => 'varbinary',
		'bSignatur' => 'varbinary',
		'dDatum' => 'datetime',
	];

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
