<?php

namespace App\Db\Schema;

class tBestellungGebuehr
{
	const TABLE_NAME = 'tBestellungGebuehr';
	const kBestellungGebuehr = 'kBestellungGebuehr';
	const kBestellung = 'kBestellung';
	const kGebuehrtyp = 'kGebuehrtyp';
	const fBetrag = 'fBetrag';
	const COLUMN_NAMES = ['kBestellungGebuehr', 'kBestellung', 'kGebuehrtyp', 'fBetrag'];
	const COLUMN_DEFINITIONS = [
		'kBestellungGebuehr' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGebuehrtyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellungGebuehr */
	public $kBestellungGebuehr;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kGebuehrtyp */
	public $kGebuehrtyp;

	/** @var string fBetrag */
	public $fBetrag;
}
