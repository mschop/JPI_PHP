<?php

namespace App\Db\Schema;

class ameise_importdurchgang
{
	const TABLE_NAME = 'ameise_importdurchgang';
	const kImportDurchgang = 'kImportDurchgang';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kImportDurchgang', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'kImportDurchgang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kImportDurchgang */
	public $kImportDurchgang;

	/** @var string dErstellt */
	public $dErstellt;
}
