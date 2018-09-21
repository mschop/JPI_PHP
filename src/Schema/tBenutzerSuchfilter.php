<?php

namespace App\Schema;

class tBenutzerSuchfilter
{
	const TABLE_NAME = 'tBenutzerSuchfilter';
	const kBenutzerSuchfilter = 'kBenutzerSuchfilter';
	const kBenutzer = 'kBenutzer';
	const nFilterTyp = 'nFilterTyp';
	const nModus = 'nModus';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kBenutzerSuchfilter', 'kBenutzer', 'nFilterTyp', 'nModus', 'cName', 'cValue'];
	const COLUMN_TYPES = [
		'kBenutzerSuchfilter' => 'int',
		'kBenutzer' => 'int',
		'nFilterTyp' => 'int',
		'nModus' => 'int',
		'cName' => 'varchar',
		'cValue' => 'varchar',
	];

	/** @var int kBenutzerSuchfilter */
	public $kBenutzerSuchfilter;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nFilterTyp */
	public $nFilterTyp;

	/** @var int nModus */
	public $nModus;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
