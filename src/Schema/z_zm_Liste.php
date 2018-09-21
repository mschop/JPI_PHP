<?php

namespace App\Schema;

class z_zm_Liste
{
	const TABLE_NAME = 'z_zm_Liste';
	const kListe = 'kListe';
	const cKey = 'cKey';
	const cDesc = 'cDesc';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kListe', 'cKey', 'cDesc', 'nStatus'];
	const COLUMN_TYPES = ['kListe' => 'int', 'cKey' => 'varchar', 'cDesc' => 'varchar', 'nStatus' => 'tinyint'];

	/** @var int kListe */
	public $kListe;

	/** @var string cKey */
	public $cKey;

	/** @var string cDesc */
	public $cDesc;

	/** @var int nStatus */
	public $nStatus;
}
