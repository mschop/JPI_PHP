<?php

namespace App\Db\Schema;

class pf_amazon_angebot_neu_settings
{
	const TABLE_NAME = 'pf_amazon_angebot_neu_settings';
	const kUser = 'kUser';
	const nPlattform = 'nPlattform';
	const nCondition = 'nCondition';
	const nStandard = 'nStandard';
	const cCondition1 = 'cCondition1';
	const cCondition2 = 'cCondition2';
	const cCondition3 = 'cCondition3';
	const cCondition4 = 'cCondition4';
	const cCondition5 = 'cCondition5';
	const cCondition6 = 'cCondition6';
	const cCondition7 = 'cCondition7';
	const cCondition8 = 'cCondition8';
	const cCondition9 = 'cCondition9';
	const cCondition10 = 'cCondition10';
	const cCondition11 = 'cCondition11';
	const COLUMN_NAMES = [
		'kUser',
		'nPlattform',
		'nCondition',
		'nStandard',
		'cCondition1',
		'cCondition2',
		'cCondition3',
		'cCondition4',
		'cCondition5',
		'cCondition6',
		'cCondition7',
		'cCondition8',
		'cCondition9',
		'cCondition10',
		'cCondition11',
	];
	const COLUMN_DEFINITIONS = [
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nCondition' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandard' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cCondition1' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition2' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition3' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition4' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition5' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition6' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition7' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition8' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition9' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition10' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCondition11' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kUser */
	public $kUser;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nCondition */
	public $nCondition;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cCondition1 */
	public $cCondition1;

	/** @var string cCondition2 */
	public $cCondition2;

	/** @var string cCondition3 */
	public $cCondition3;

	/** @var string cCondition4 */
	public $cCondition4;

	/** @var string cCondition5 */
	public $cCondition5;

	/** @var string cCondition6 */
	public $cCondition6;

	/** @var string cCondition7 */
	public $cCondition7;

	/** @var string cCondition8 */
	public $cCondition8;

	/** @var string cCondition9 */
	public $cCondition9;

	/** @var string cCondition10 */
	public $cCondition10;

	/** @var string cCondition11 */
	public $cCondition11;
}
