<?php

namespace App\Schema;

class tMedienDateiSprache
{
	const TABLE_NAME = 'tMedienDateiSprache';
	const kMedienDatei = 'kMedienDatei';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kMedienDatei', 'kSprache', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kMedienDatei' => 'int', 'kSprache' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kMedienDatei */
	public $kMedienDatei;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
