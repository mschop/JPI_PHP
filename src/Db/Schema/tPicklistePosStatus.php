<?php

namespace App\Db\Schema;

class tPicklistePosStatus
{
	const TABLE_NAME = 'tPicklistePosStatus';
	const kPicklistePosStatus = 'kPicklistePosStatus';
	const kPicklistePos = 'kPicklistePos';
	const kbenutzer = 'kbenutzer';
	const dZeitstempel = 'dZeitstempel';
	const nStatus = 'nStatus';
	const COLUMN_NAMES = ['kPicklistePosStatus', 'kPicklistePos', 'kbenutzer', 'dZeitstempel', 'nStatus'];
	const COLUMN_DEFINITIONS = [
		'kPicklistePosStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPicklistePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kbenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPicklistePosStatus */
	public $kPicklistePosStatus;

	/** @var int kPicklistePos */
	public $kPicklistePos;

	/** @var int kbenutzer */
	public $kbenutzer;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nStatus */
	public $nStatus;
}
