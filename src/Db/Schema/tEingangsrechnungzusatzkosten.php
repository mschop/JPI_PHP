<?php

namespace App\Db\Schema;

class tEingangsrechnungzusatzkosten
{
	const TABLE_NAME = 'tEingangsrechnungzusatzkosten';
	const kZusatzkosten = 'kZusatzkosten';
	const cName = 'cName';
	const nGLD = 'nGLD';
	const nPreis = 'nPreis';
	const COLUMN_NAMES = ['kZusatzkosten', 'cName', 'nGLD', 'nPreis'];
	const COLUMN_DEFINITIONS = [
		'kZusatzkosten' => [
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
		'nGLD' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZusatzkosten */
	public $kZusatzkosten;

	/** @var string cName */
	public $cName;

	/** @var int nGLD */
	public $nGLD;

	/** @var int nPreis */
	public $nPreis;
}
