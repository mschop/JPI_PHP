<?php

namespace App\Db\Schema;

class tText
{
	const TABLE_NAME = 'tText';
	const kText = 'kText';
	const cName = 'cName';
	const cText = 'cText';
	const nFontSize = 'nFontSize';
	const cFontName = 'cFontName';
	const cType = 'cType';
	const cAktiv = 'cAktiv';
	const COLUMN_NAMES = ['kText', 'cName', 'cText', 'nFontSize', 'cFontName', 'cType', 'cAktiv'];
	const COLUMN_DEFINITIONS = [
		'kText' => [
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
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nFontSize' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFontName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cType' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kText */
	public $kText;

	/** @var string cName */
	public $cName;

	/** @var string cText */
	public $cText;

	/** @var int nFontSize */
	public $nFontSize;

	/** @var string cFontName */
	public $cFontName;

	/** @var string cType */
	public $cType;

	/** @var string cAktiv */
	public $cAktiv;
}
