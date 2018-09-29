<?php

namespace App\Db\Schema;

class tArtikelEpid
{
	const TABLE_NAME = 'tArtikelEpid';
	const kArtikelEpid = 'kArtikelEpid';
	const kArtikel = 'kArtikel';
	const kSiteId = 'kSiteId';
	const cEpid = 'cEpid';
	const COLUMN_NAMES = ['kArtikelEpid', 'kArtikel', 'kSiteId', 'cEpid'];
	const COLUMN_DEFINITIONS = [
		'kArtikelEpid' => [
			'type' => 'bigint',
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
		'kSiteId' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cEpid' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 38,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kArtikelEpid */
	public $kArtikelEpid;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kSiteId */
	public $kSiteId;

	/** @var resource cEpid */
	public $cEpid;
}
