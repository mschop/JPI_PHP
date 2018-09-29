<?php

namespace App\Db\Schema;

class ameise_importvorlageeinstellung
{
	const TABLE_NAME = 'ameise_importvorlageeinstellung';
	const kImportVorlageEinstellung = 'kImportVorlageEinstellung';
	const kImportVorlage = 'kImportVorlage';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const kImportTypEinstellungWert = 'kImportTypEinstellungWert';
	const COLUMN_NAMES = ['kImportVorlageEinstellung', 'kImportVorlage', 'kImportTypEinstellung', 'kImportTypEinstellungWert'];
	const COLUMN_DEFINITIONS = [
		'kImportVorlageEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportTypEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kImportTypEinstellungWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportVorlageEinstellung */
	public $kImportVorlageEinstellung;

	/** @var int kImportVorlage */
	public $kImportVorlage;

	/** @var int kImportTypEinstellung */
	public $kImportTypEinstellung;

	/** @var int kImportTypEinstellungWert */
	public $kImportTypEinstellungWert;
}
