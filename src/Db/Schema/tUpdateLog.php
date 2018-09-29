<?php

namespace App\Db\Schema;

class tUpdateLog
{
	const TABLE_NAME = 'tUpdateLog';
	const kUpdateLog = 'kUpdateLog';
	const cModul = 'cModul';
	const dZeitstempel = 'dZeitstempel';
	const nSchweregrad = 'nSchweregrad';
	const kBenutzer = 'kBenutzer';
	const cMeldung = 'cMeldung';
	const COLUMN_NAMES = ['kUpdateLog', 'cModul', 'dZeitstempel', 'nSchweregrad', 'kBenutzer', 'cMeldung'];
	const COLUMN_DEFINITIONS = [
		'kUpdateLog' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cModul' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchweregrad' => [
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
		'cMeldung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUpdateLog */
	public $kUpdateLog;

	/** @var string cModul */
	public $cModul;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nSchweregrad */
	public $nSchweregrad;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cMeldung */
	public $cMeldung;
}
