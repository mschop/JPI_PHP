<?php

namespace App\Schema;

class pf_synccheckboxen
{
	const TABLE_NAME = 'pf_synccheckboxen';
	const kSyncCheckbox = 'kSyncCheckbox';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kSyncCheckbox', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kSyncCheckbox' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kSyncCheckbox */
	public $kSyncCheckbox;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
