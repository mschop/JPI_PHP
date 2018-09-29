<?php

namespace App\Db\Schema;

class tMailVorlage
{
	const TABLE_NAME = 'tMailVorlage';
	const kMailVorlage = 'kMailVorlage';
	const kSprache = 'kSprache';
	const nType = 'nType';
	const kPlattform = 'kPlattform';
	const nStandard = 'nStandard';
	const cVorlagenname = 'cVorlagenname';
	const cSubject = 'cSubject';
	const cText = 'cText';
	const nHTML = 'nHTML';
	const cHTML = 'cHTML';
	const COLUMN_NAMES = [
		'kMailVorlage',
		'kSprache',
		'nType',
		'kPlattform',
		'nStandard',
		'cVorlagenname',
		'cSubject',
		'cText',
		'nHTML',
		'cHTML',
	];
	const COLUMN_DEFINITIONS = [
		'kMailVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStandard' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVorlagenname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSubject' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 511,
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
		'nHTML' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHTML' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kMailVorlage */
	public $kMailVorlage;

	/** @var int kSprache */
	public $kSprache;

	/** @var int nType */
	public $nType;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int nStandard */
	public $nStandard;

	/** @var string cVorlagenname */
	public $cVorlagenname;

	/** @var string cSubject */
	public $cSubject;

	/** @var string cText */
	public $cText;

	/** @var int nHTML */
	public $nHTML;

	/** @var string cHTML */
	public $cHTML;
}
