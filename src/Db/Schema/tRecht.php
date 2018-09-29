<?php

namespace App\Db\Schema;

class tRecht
{
	const TABLE_NAME = 'tRecht';
	const kRecht = 'kRecht';
	const cAnzeigeName = 'cAnzeigeName';
	const cBeschreibung = 'cBeschreibung';
	const kRechtVater = 'kRechtVater';
	const nIstLabel = 'nIstLabel';
	const nSort = 'nSort';
	const COLUMN_NAMES = ['kRecht', 'cAnzeigeName', 'cBeschreibung', 'kRechtVater', 'nIstLabel', 'nSort'];
	const COLUMN_DEFINITIONS = [
		'kRecht' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAnzeigeName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kRechtVater' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nIstLabel' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRecht */
	public $kRecht;

	/** @var string cAnzeigeName */
	public $cAnzeigeName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kRechtVater */
	public $kRechtVater;

	/** @var int nIstLabel */
	public $nIstLabel;

	/** @var int nSort */
	public $nSort;
}
