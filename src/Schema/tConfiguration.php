<?php

namespace App\Schema;

class tConfiguration
{
	const TABLE_NAME = 'tConfiguration';
	const kConfig = 'kConfig';
	const kBenutzer = 'kBenutzer';
	const Arbeitsplatz = 'Arbeitsplatz';
	const Typ = 'Typ';
	const ElementID = 'ElementID';
	const Configuration = 'Configuration';
	const COLUMN_NAMES = ['kConfig', 'kBenutzer', 'Arbeitsplatz', 'Typ', 'ElementID', 'Configuration'];
	const COLUMN_TYPES = [
		'kConfig' => 'int',
		'kBenutzer' => 'int',
		'Arbeitsplatz' => 'nvarchar',
		'Typ' => 'int',
		'ElementID' => 'int',
		'Configuration' => 'nvarchar',
	];

	/** @var int kConfig */
	public $kConfig;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var resource Arbeitsplatz */
	public $Arbeitsplatz;

	/** @var int Typ */
	public $Typ;

	/** @var int ElementID */
	public $ElementID;

	/** @var resource Configuration */
	public $Configuration;
}
