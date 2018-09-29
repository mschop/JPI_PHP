<?php

namespace App\Db\Schema;

class tWMSLagerBereich
{
	const TABLE_NAME = 'tWMSLagerBereich';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const cKuerzel = 'cKuerzel';
	const cBeschreibung = 'cBeschreibung';
	const kWarenLager = 'kWarenLager';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kWMSLagerBereich', 'cKuerzel', 'cBeschreibung', 'kWarenLager', 'nTyp'];
	const COLUMN_DEFINITIONS = [
		'kWMSLagerBereich' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKuerzel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kWarenLager' => [
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
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var string cKuerzel */
	public $cKuerzel;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int nTyp */
	public $nTyp;
}
