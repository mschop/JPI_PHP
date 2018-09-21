<?php

namespace App\Schema;

class ameise_importvorlageeinstellung
{
	const TABLE_NAME = 'ameise_importvorlageeinstellung';
	const kImportVorlageEinstellung = 'kImportVorlageEinstellung';
	const kImportVorlage = 'kImportVorlage';
	const kImportTypEinstellung = 'kImportTypEinstellung';
	const kImportTypEinstellungWert = 'kImportTypEinstellungWert';
	const COLUMN_NAMES = ['kImportVorlageEinstellung', 'kImportVorlage', 'kImportTypEinstellung', 'kImportTypEinstellungWert'];
	const COLUMN_TYPES = [
		'kImportVorlageEinstellung' => 'int',
		'kImportVorlage' => 'int',
		'kImportTypEinstellung' => 'int',
		'kImportTypEinstellungWert' => 'int',
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
