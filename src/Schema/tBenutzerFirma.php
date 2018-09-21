<?php

namespace App\Schema;

class tBenutzerFirma
{
	const TABLE_NAME = 'tBenutzerFirma';
	const kBenutzer = 'kBenutzer';
	const kFirma = 'kFirma';
	const kMandant = 'kMandant';
	const COLUMN_NAMES = ['kBenutzer', 'kFirma', 'kMandant'];
	const COLUMN_TYPES = ['kBenutzer' => 'int', 'kFirma' => 'int', 'kMandant' => 'int'];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kMandant */
	public $kMandant;
}
