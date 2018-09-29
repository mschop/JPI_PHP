<?php

namespace App\Db\Schema;

class tmahnungstext
{
	const TABLE_NAME = 'tmahnungstext';
	const kMahnungsText = 'kMahnungsText';
	const cBetreff = 'cBetreff';
	const cAnrede = 'cAnrede';
	const cText = 'cText';
	const nStuffe = 'nStuffe';
	const fGebuehr = 'fGebuehr';
	const COLUMN_NAMES = ['kMahnungsText', 'cBetreff', 'cAnrede', 'cText', 'nStuffe', 'fGebuehr'];
	const COLUMN_DEFINITIONS = [
		'kMahnungsText' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cBetreff' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nStuffe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fGebuehr' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMahnungsText */
	public $kMahnungsText;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cText */
	public $cText;

	/** @var int nStuffe */
	public $nStuffe;

	/** @var string fGebuehr */
	public $fGebuehr;
}
