<?php

namespace App\Db\Schema;

class tnummern
{
	const TABLE_NAME = 'tnummern';
	const kBestellung = 'kBestellung';
	const kAngebot = 'kAngebot';
	const kRechnung = 'kRechnung';
	const kKunde = 'kKunde';
	const cInet = 'cInet';
	const COLUMN_NAMES = ['kBestellung', 'kAngebot', 'kRechnung', 'kKunde', 'cInet'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAngebot' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kAngebot */
	public $kAngebot;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cInet */
	public $cInet;
}
