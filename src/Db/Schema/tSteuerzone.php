<?php

namespace App\Db\Schema;

class tSteuerzone
{
	const TABLE_NAME = 'tSteuerzone';
	const kSteuerzone = 'kSteuerzone';
	const kFirma = 'kFirma';
	const cName = 'cName';
	const cLandISO = 'cLandISO';
	const COLUMN_NAMES = ['kSteuerzone', 'kFirma', 'cName', 'cLandISO'];
	const COLUMN_DEFINITIONS = [
		'kSteuerzone' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cName */
	public $cName;

	/** @var string cLandISO */
	public $cLandISO;
}
