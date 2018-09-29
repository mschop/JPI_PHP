<?php

namespace App\Db\Schema;

class tPreischeckPlattform
{
	const TABLE_NAME = 'tPreischeckPlattform';
	const kPreischeckPlattform = 'kPreischeckPlattform';
	const cName = 'cName';
	const cURL = 'cURL';
	const cLandISO = 'cLandISO';
	const cColor = 'cColor';
	const cParseRegEx = 'cParseRegEx';
	const nAktiv = 'nAktiv';
	const nShowPlattform = 'nShowPlattform';
	const COLUMN_NAMES = [
		'kPreischeckPlattform',
		'cName',
		'cURL',
		'cLandISO',
		'cColor',
		'cParseRegEx',
		'nAktiv',
		'nShowPlattform',
	];
	const COLUMN_DEFINITIONS = [
		'kPreischeckPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'UNICODE',
		],
		'cURL' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'UNICODE',
		],
		'cLandISO' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'UNICODE',
		],
		'cColor' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 7,
			'characterSetName' => 'iso_1',
		],
		'cParseRegEx' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'nAktiv' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nShowPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreischeckPlattform */
	public $kPreischeckPlattform;

	/** @var resource cName */
	public $cName;

	/** @var resource cURL */
	public $cURL;

	/** @var resource cLandISO */
	public $cLandISO;

	/** @var string cColor */
	public $cColor;

	/** @var resource cParseRegEx */
	public $cParseRegEx;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nShowPlattform */
	public $nShowPlattform;
}
