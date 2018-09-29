<?php

namespace App\Db\Schema;

class tRMStatus
{
	const TABLE_NAME = 'tRMStatus';
	const kRMStatus = 'kRMStatus';
	const kRMStatusParent = 'kRMStatusParent';
	const nPos = 'nPos';
	const nAktiv = 'nAktiv';
	const nStatusTyp = 'nStatusTyp';
	const nVisibleMode = 'nVisibleMode';
	const COLUMN_NAMES = ['kRMStatus', 'kRMStatusParent', 'nPos', 'nAktiv', 'nStatusTyp', 'nVisibleMode'];
	const COLUMN_DEFINITIONS = [
		'kRMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMStatusParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nVisibleMode' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kRMStatusParent */
	public $kRMStatusParent;

	/** @var int nPos */
	public $nPos;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nStatusTyp */
	public $nStatusTyp;

	/** @var int nVisibleMode */
	public $nVisibleMode;
}
