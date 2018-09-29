<?php

namespace App\Db\Schema;

class tUpdateInfo
{
	const TABLE_NAME = 'tUpdateInfo';
	const kUpdateInfo = 'kUpdateInfo';
	const nVorgang = 'nVorgang';
	const cKey = 'cKey';
	const cValueOld = 'cValueOld';
	const cValueNew = 'cValueNew';
	const COLUMN_NAMES = ['kUpdateInfo', 'nVorgang', 'cKey', 'cValueOld', 'cValueNew'];
	const COLUMN_DEFINITIONS = [
		'kUpdateInfo' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVorgang' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKey' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'cValueOld' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
		'cValueNew' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kUpdateInfo */
	public $kUpdateInfo;

	/** @var int nVorgang */
	public $nVorgang;

	/** @var resource cKey */
	public $cKey;

	/** @var resource cValueOld */
	public $cValueOld;

	/** @var resource cValueNew */
	public $cValueNew;
}
