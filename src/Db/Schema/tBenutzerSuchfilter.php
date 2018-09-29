<?php

namespace App\Db\Schema;

class tBenutzerSuchfilter
{
	const TABLE_NAME = 'tBenutzerSuchfilter';
	const kBenutzerSuchfilter = 'kBenutzerSuchfilter';
	const kBenutzer = 'kBenutzer';
	const nFilterTyp = 'nFilterTyp';
	const nModus = 'nModus';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kBenutzerSuchfilter', 'kBenutzer', 'nFilterTyp', 'nModus', 'cName', 'cValue'];
	const COLUMN_DEFINITIONS = [
		'kBenutzerSuchfilter' => [
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
		'nFilterTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nModus' => [
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
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBenutzerSuchfilter */
	public $kBenutzerSuchfilter;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nFilterTyp */
	public $nFilterTyp;

	/** @var int nModus */
	public $nModus;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
