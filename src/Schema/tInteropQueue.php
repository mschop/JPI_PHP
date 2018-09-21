<?php

namespace App\Schema;

class tInteropQueue
{
	const TABLE_NAME = 'tInteropQueue';
	const nKey1 = 'nKey1';
	const nOperation = 'nOperation';
	const nKey2 = 'nKey2';
	const cUnique = 'cUnique';
	const cData = 'cData';
	const COLUMN_NAMES = ['nKey1', 'nOperation', 'nKey2', 'cUnique', 'cData'];
	const COLUMN_TYPES = [
		'nKey1' => 'int',
		'nOperation' => 'int',
		'nKey2' => 'int',
		'cUnique' => 'varchar',
		'cData' => 'varchar',
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
