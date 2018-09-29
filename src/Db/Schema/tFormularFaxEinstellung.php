<?php

namespace App\Db\Schema;

class tFormularFaxEinstellung
{
	const TABLE_NAME = 'tFormularFaxEinstellung';
	const kFormularFaxEinstellung = 'kFormularFaxEinstellung';
	const kFormular = 'kFormular';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cFaxname = 'cFaxname';
	const COLUMN_NAMES = ['kFormularFaxEinstellung', 'kFormular', 'cRechnername', 'kBenutzer', 'cFaxname'];
	const COLUMN_DEFINITIONS = [
		'kFormularFaxEinstellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormular' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFaxname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFormularFaxEinstellung */
	public $kFormularFaxEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cFaxname */
	public $cFaxname;
}
