<?php

namespace App\Db\Schema;

class pf_amazon_group
{
	const TABLE_NAME = 'pf_amazon_group';
	const kGroup = 'kGroup';
	const cName = 'cName';
	const kPlattform = 'kPlattform';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['kGroup', 'cName', 'kPlattform', 'nAktiv'];
	const COLUMN_DEFINITIONS = [
		'kGroup' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'kPlattform' => [
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
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kGroup */
	public $kGroup;

	/** @var string cName */
	public $cName;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int nAktiv */
	public $nAktiv;
}
