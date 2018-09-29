<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kConfig' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Arbeitsplatz' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'UNICODE',
		],
		'Typ' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ElementID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Configuration' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
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
