<?php

namespace App\Db\Schema;

class ebay_itemcompatibility
{
	const TABLE_NAME = 'ebay_itemcompatibility';
	const kItemCompatibility = 'kItemCompatibility';
	const kItem = 'kItem';
	const kType = 'kType';
	const cMarke = 'cMarke';
	const cModell = 'cModell';
	const cTyp = 'cTyp';
	const cPlattform = 'cPlattform';
	const cBaujahr = 'cBaujahr';
	const cMotor = 'cMotor';
	const cHSNTSN = 'cHSNTSN';
	const cCompatibilityNote = 'cCompatibilityNote';
	const COLUMN_NAMES = [
		'kItemCompatibility',
		'kItem',
		'kType',
		'cMarke',
		'cModell',
		'cTyp',
		'cPlattform',
		'cBaujahr',
		'cMotor',
		'cHSNTSN',
		'cCompatibilityNote',
	];
	const COLUMN_DEFINITIONS = [
		'kItemCompatibility' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kType' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMarke' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cModell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPlattform' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBaujahr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cMotor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cHSNTSN' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCompatibilityNote' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 505,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kItemCompatibility */
	public $kItemCompatibility;

	/** @var int kItem */
	public $kItem;

	/** @var int kType */
	public $kType;

	/** @var string cMarke */
	public $cMarke;

	/** @var string cModell */
	public $cModell;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var string cBaujahr */
	public $cBaujahr;

	/** @var string cMotor */
	public $cMotor;

	/** @var string cHSNTSN */
	public $cHSNTSN;

	/** @var string cCompatibilityNote */
	public $cCompatibilityNote;
}
