<?php

namespace App\Schema;

class tEAN
{
	const TABLE_NAME = 'tEAN';
	const cEAN = 'cEAN';
	const dImportdatum = 'dImportdatum';
	const COLUMN_NAMES = ['cEAN', 'dImportdatum'];
	const COLUMN_TYPES = ['cEAN' => 'varchar', 'dImportdatum' => 'datetime'];

	/** @var string cEAN */
	public $cEAN;

	/** @var string dImportdatum */
	public $dImportdatum;
}
