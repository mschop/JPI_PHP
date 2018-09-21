<?php

namespace App\Schema;

class tPreischeckArtikelIds
{
	const TABLE_NAME = 'tPreischeckArtikelIds';
	const kPreischeckArtikelIds = 'kPreischeckArtikelIds';
	const kArtikel = 'kArtikel';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const COLUMN_NAMES = ['kPreischeckArtikelIds', 'kArtikel', 'cProductId', 'nProductIdType'];
	const COLUMN_TYPES = [
		'kPreischeckArtikelIds' => 'int',
		'kArtikel' => 'int',
		'cProductId' => 'varchar',
		'nProductIdType' => 'int',
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
