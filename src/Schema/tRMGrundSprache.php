<?php

namespace App\Schema;

class tRMGrundSprache
{
	const TABLE_NAME = 'tRMGrundSprache';
	const kRMGrund = 'kRMGrund';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kRMGrund', 'kSprache', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kRMGrund' => 'int', 'kSprache' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
