<?php

namespace App\Db\Schema;

class tInetKundeShop
{
	const TABLE_NAME = 'tInetKundeShop';
	const kInetKunde = 'kInetKunde';
	const kShop = 'kShop';
	const kKundenGruppe = 'kKundenGruppe';
	const dKundeSeit = 'dKundeSeit';
	const cInet = 'cInet';
	const kKunde = 'kKunde';
	const nRegistriert = 'nRegistriert';
	const cShopKundenNr = 'cShopKundenNr';
	const COLUMN_NAMES = [
		'kInetKunde',
		'kShop',
		'kKundenGruppe',
		'dKundeSeit',
		'cInet',
		'kKunde',
		'nRegistriert',
		'cShopKundenNr',
	];
	const COLUMN_DEFINITIONS = [
		'kInetKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dKundeSeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 11,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRegistriert' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cShopKundenNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kInetKunde */
	public $kInetKunde;

	/** @var int kShop */
	public $kShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string dKundeSeit */
	public $dKundeSeit;

	/** @var string cInet */
	public $cInet;

	/** @var int kKunde */
	public $kKunde;

	/** @var int nRegistriert */
	public $nRegistriert;

	/** @var string cShopKundenNr */
	public $cShopKundenNr;
}
