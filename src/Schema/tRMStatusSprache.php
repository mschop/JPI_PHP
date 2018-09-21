<?php

namespace App\Schema;

class tRMStatusSprache
{
	const TABLE_NAME = 'tRMStatusSprache';
	const kRMStatus = 'kRMStatus';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const COLUMN_NAMES = ['kRMStatus', 'kSprache', 'cName'];
	const COLUMN_TYPES = ['kRMStatus' => 'int', 'kSprache' => 'int', 'cName' => 'varchar'];

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;
}
