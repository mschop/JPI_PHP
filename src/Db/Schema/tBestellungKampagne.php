<?php

namespace App\Db\Schema;

class tBestellungKampagne
{
	const TABLE_NAME = 'tBestellungKampagne';
	const kBestellung = 'kBestellung';
	const cKampagne = 'cKampagne';
	const cKampagneWert = 'cKampagneWert';
	const cUserAgent = 'cUserAgent';
	const cGeraet = 'cGeraet';
	const COLUMN_NAMES = ['kBestellung', 'cKampagne', 'cKampagneWert', 'cUserAgent', 'cGeraet'];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKampagne' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
		'cKampagneWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
		'cUserAgent' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
		'cGeraet' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cKampagne */
	public $cKampagne;

	/** @var string cKampagneWert */
	public $cKampagneWert;

	/** @var string cUserAgent */
	public $cUserAgent;

	/** @var string cGeraet */
	public $cGeraet;
}
