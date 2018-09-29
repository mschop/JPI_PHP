<?php

namespace App\Db\Schema;

class tPreischeckArtikelIds
{
	const TABLE_NAME = 'tPreischeckArtikelIds';
	const kPreischeckArtikelIds = 'kPreischeckArtikelIds';
	const kArtikel = 'kArtikel';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const COLUMN_NAMES = ['kPreischeckArtikelIds', 'kArtikel', 'cProductId', 'nProductIdType'];
	const COLUMN_DEFINITIONS = [
		'kPreischeckArtikelIds' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cProductId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nProductIdType' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreischeckArtikelIds */
	public $kPreischeckArtikelIds;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cProductId */
	public $cProductId;

	/** @var int nProductIdType */
	public $nProductIdType;
}
