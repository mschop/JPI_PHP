<?php

namespace App\Db\Schema;

class tFeldTyp
{
	const TABLE_NAME = 'tFeldTyp';
	const kFeldTyp = 'kFeldTyp';
	const cName = 'cName';
	const nDatenTyp = 'nDatenTyp';
	const cRegEx = 'cRegEx';
	const COLUMN_NAMES = ['kFeldTyp', 'cName', 'nDatenTyp', 'cRegEx'];
	const COLUMN_DEFINITIONS = [
		'kFeldTyp' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 300,
			'characterSetName' => 'UNICODE',
		],
		'nDatenTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRegEx' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kFeldTyp */
	public $kFeldTyp;

	/** @var resource cName */
	public $cName;

	/** @var int nDatenTyp */
	public $nDatenTyp;

	/** @var resource cRegEx */
	public $cRegEx;
}
