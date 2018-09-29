<?php

namespace App\Db\Schema;

class tKundenGruppe
{
	const TABLE_NAME = 'tKundenGruppe';
	const kKundenGruppe = 'kKundenGruppe';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const nShopLogin = 'nShopLogin';
	const nNettoPreise = 'nNettoPreise';
	const fRabatt = 'fRabatt';
	const kKundenDrucktext = 'kKundenDrucktext';
	const COLUMN_NAMES = ['kKundenGruppe', 'cName', 'nStandard', 'nShopLogin', 'nNettoPreise', 'fRabatt', 'kKundenDrucktext'];
	const COLUMN_DEFINITIONS = [
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShopLogin' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nNettoPreise' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fRabatt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenDrucktext' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int nShopLogin */
	public $nShopLogin;

	/** @var int nNettoPreise */
	public $nNettoPreise;

	/** @var string fRabatt */
	public $fRabatt;

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;
}
