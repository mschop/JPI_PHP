<?php

namespace App\Db\Schema;

class tUmlagerung
{
	const TABLE_NAME = 'tUmlagerung';
	const kUmlagerung = 'kUmlagerung';
	const kQuellLager = 'kQuellLager';
	const kZielLager = 'kZielLager';
	const kStreckenLager = 'kStreckenLager';
	const kBestellung = 'kBestellung';
	const kLieferantenBestellung = 'kLieferantenBestellung';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = [
		'kUmlagerung',
		'kQuellLager',
		'kZielLager',
		'kStreckenLager',
		'kBestellung',
		'kLieferantenBestellung',
		'nStatus',
	];
	const COLUMN_DEFINITIONS = [
		'kUmlagerung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kQuellLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZielLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStreckenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferantenBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
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
	];

	/** @var int kUmlagerung */
	public $kUmlagerung;

	/** @var int kQuellLager */
	public $kQuellLager;

	/** @var int kZielLager */
	public $kZielLager;

	/** @var int kStreckenLager */
	public $kStreckenLager;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kLieferantenBestellung */
	public $kLieferantenBestellung;

	/** @var int nStatus */
	public $nStatus;
}
