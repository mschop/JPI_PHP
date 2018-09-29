<?php

namespace App\Db\Schema;

class tPreisDetail
{
	const TABLE_NAME = 'tPreisDetail';
	const kPreis = 'kPreis';
	const nAnzahlAb = 'nAnzahlAb';
	const fNettoPreis = 'fNettoPreis';
	const fProzent = 'fProzent';
	const COLUMN_NAMES = ['kPreis', 'nAnzahlAb', 'fNettoPreis', 'fProzent'];
	const COLUMN_DEFINITIONS = [
		'kPreis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahlAb' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNettoPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fProzent' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreis */
	public $kPreis;

	/** @var int nAnzahlAb */
	public $nAnzahlAb;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string fProzent */
	public $fProzent;
}
