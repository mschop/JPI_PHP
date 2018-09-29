<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kZahlungsabgleichLogsitzung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'dStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cStatusMeldung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2048,
			'characterSetName' => 'iso_1',
		],
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
