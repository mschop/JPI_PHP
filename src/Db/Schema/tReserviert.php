<?php

namespace App\Db\Schema;

class tReserviert
{
	const TABLE_NAME = 'tReserviert';
	const kArtikel = 'kArtikel';
	const fAnzahl = 'fAnzahl';
	const kKey = 'kKey';
	const kPlattform = 'kPlattform';
	const kBestellung = 'kBestellung';
	const fBestandReserviert = 'fBestandReserviert';
	const fBestandReserviertEigen = 'fBestandReserviertEigen';
	const COLUMN_NAMES = [
		'kArtikel',
		'fAnzahl',
		'kKey',
		'kPlattform',
		'kBestellung',
		'fBestandReserviert',
		'fBestandReserviertEigen',
	];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKey' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBestandReserviert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBestandReserviertEigen' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kKey */
	public $kKey;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string fBestandReserviert */
	public $fBestandReserviert;

	/** @var string fBestandReserviertEigen */
	public $fBestandReserviertEigen;
}
