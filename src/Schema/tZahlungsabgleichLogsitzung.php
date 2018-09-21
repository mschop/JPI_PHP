<?php

namespace App\Schema;

class tZahlungsabgleichLogsitzung
{
	const TABLE_NAME = 'tZahlungsabgleichLogsitzung';
	const kZahlungsabgleichLogsitzung = 'kZahlungsabgleichLogsitzung';
	const nTyp = 'nTyp';
	const kBenutzer = 'kBenutzer';
	const cRechnername = 'cRechnername';
	const dStart = 'dStart';
	const dEnde = 'dEnde';
	const nStatus = 'nStatus';
	const cStatusMeldung = 'cStatusMeldung';
	const COLUMN_NAMES = [
		'kZahlungsabgleichLogsitzung',
		'nTyp',
		'kBenutzer',
		'cRechnername',
		'dStart',
		'dEnde',
		'nStatus',
		'cStatusMeldung',
	];
	const COLUMN_TYPES = [
		'kZahlungsabgleichLogsitzung' => 'int',
		'nTyp' => 'int',
		'kBenutzer' => 'int',
		'cRechnername' => 'varchar',
		'dStart' => 'datetime',
		'dEnde' => 'datetime',
		'nStatus' => 'tinyint',
		'cStatusMeldung' => 'varchar',
	];

	/** @var int kZahlungsabgleichLogsitzung */
	public $kZahlungsabgleichLogsitzung;

	/** @var int nTyp */
	public $nTyp;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var string dStart */
	public $dStart;

	/** @var string dEnde */
	public $dEnde;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cStatusMeldung */
	public $cStatusMeldung;
}
