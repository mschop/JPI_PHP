<?php

namespace App\Schema;

class tSteuercache
{
	const TABLE_NAME = 'tSteuercache';
	const kSteuerklasse = 'kSteuerklasse';
	const fSteuersatz = 'fSteuersatz';
	const kFirma = 'kFirma';
	const kSteuerzone = 'kSteuerzone';
	const COLUMN_NAMES = ['kSteuerklasse', 'fSteuersatz', 'kFirma', 'kSteuerzone'];
	const COLUMN_TYPES = ['kSteuerklasse' => 'int', 'fSteuersatz' => 'decimal', 'kFirma' => 'int', 'kSteuerzone' => 'int'];

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string fSteuersatz */
	public $fSteuersatz;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSteuerzone */
	public $kSteuerzone;
}
