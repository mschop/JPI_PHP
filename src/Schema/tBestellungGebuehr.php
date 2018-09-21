<?php

namespace App\Schema;

class tBestellungGebuehr
{
	const TABLE_NAME = 'tBestellungGebuehr';
	const kBestellungGebuehr = 'kBestellungGebuehr';
	const kBestellung = 'kBestellung';
	const kGebuehrtyp = 'kGebuehrtyp';
	const fBetrag = 'fBetrag';
	const COLUMN_NAMES = ['kBestellungGebuehr', 'kBestellung', 'kGebuehrtyp', 'fBetrag'];
	const COLUMN_TYPES = [
		'kBestellungGebuehr' => 'int',
		'kBestellung' => 'int',
		'kGebuehrtyp' => 'int',
		'fBetrag' => 'decimal',
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
