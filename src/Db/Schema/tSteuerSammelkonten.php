<?php

namespace App\Db\Schema;

class tSteuerSammelkonten
{
	const TABLE_NAME = 'tSteuerSammelkonten';
	const kSteuerSammelkonten = 'kSteuerSammelkonten';
	const cName = 'cName';
	const cSammelkonto = 'cSammelkonto';
	const COLUMN_NAMES = ['kSteuerSammelkonten', 'cName', 'cSammelkonto'];
	const COLUMN_DEFINITIONS = [
		'kSteuerSammelkonten' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSammelkonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 8,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kSteuerSammelkonten */
	public $kSteuerSammelkonten;

	/** @var string cName */
	public $cName;

	/** @var string cSammelkonto */
	public $cSammelkonto;
}
