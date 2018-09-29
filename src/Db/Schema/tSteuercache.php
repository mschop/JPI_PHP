<?php

namespace App\Db\Schema;

class tSteuercache
{
	const TABLE_NAME = 'tSteuercache';
	const kSteuerklasse = 'kSteuerklasse';
	const fSteuersatz = 'fSteuersatz';
	const kFirma = 'kFirma';
	const kSteuerzone = 'kSteuerzone';
	const COLUMN_NAMES = ['kSteuerklasse', 'fSteuersatz', 'kFirma', 'kSteuerzone'];
	const COLUMN_DEFINITIONS = [
		'kSteuerklasse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSteuersatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuerzone' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string fSteuersatz */
	public $fSteuersatz;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSteuerzone */
	public $kSteuerzone;
}
