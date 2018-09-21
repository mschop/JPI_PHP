<?php

namespace App\Schema;

class tMedienDateiAttribut
{
	const TABLE_NAME = 'tMedienDateiAttribut';
	const kMediendateiAttribut = 'kMediendateiAttribut';
	const kMedienDatei = 'kMedienDatei';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kMediendateiAttribut', 'kMedienDatei', 'kSprache', 'cName', 'cWert'];
	const COLUMN_TYPES = [
		'kMediendateiAttribut' => 'int',
		'kMedienDatei' => 'int',
		'kSprache' => 'int',
		'cName' => 'varchar',
		'cWert' => 'varchar',
	];

	/** @var int kMediendateiAttribut */
	public $kMediendateiAttribut;

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
