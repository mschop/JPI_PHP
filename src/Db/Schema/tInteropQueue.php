<?php

namespace App\Db\Schema;

class tInteropQueue
{
	const TABLE_NAME = 'tInteropQueue';
	const nKey1 = 'nKey1';
	const nOperation = 'nOperation';
	const nKey2 = 'nKey2';
	const cUnique = 'cUnique';
	const cData = 'cData';
	const COLUMN_NAMES = ['nKey1', 'nOperation', 'nKey2', 'cUnique', 'cData'];
	const COLUMN_DEFINITIONS = [
		'nKey1' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nOperation' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKey2' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUnique' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cData' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int nKey1 */
	public $nKey1;

	/** @var int nOperation */
	public $nOperation;

	/** @var int nKey2 */
	public $nKey2;

	/** @var string cUnique */
	public $cUnique;

	/** @var string cData */
	public $cData;
}
