<?php

namespace App\Db\Schema;

class POS_BonICWarenLager
{
	const TABLE_NAME = 'POS_BonICWarenLager';
	const kBonICWarenLager = 'kBonICWarenLager';
	const kBonIC = 'kBonIC';
	const kWarenLager = 'kWarenLager';
	const COLUMN_NAMES = ['kBonICWarenLager', 'kBonIC', 'kWarenLager'];
	const COLUMN_DEFINITIONS = [
		'kBonICWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBonIC' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBonICWarenLager */
	public $kBonICWarenLager;

	/** @var int kBonIC */
	public $kBonIC;

	/** @var int kWarenLager */
	public $kWarenLager;
}
