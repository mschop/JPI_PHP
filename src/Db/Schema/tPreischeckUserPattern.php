<?php

namespace App\Db\Schema;

class tPreischeckUserPattern
{
	const TABLE_NAME = 'tPreischeckUserPattern';
	const kPreischeckUserPatterns = 'kPreischeckUserPatterns';
	const kPreischeckPlattform = 'kPreischeckPlattform';
	const kArtikel = 'kArtikel';
	const cUrl = 'cUrl';
	const COLUMN_NAMES = ['kPreischeckUserPatterns', 'kPreischeckPlattform', 'kArtikel', 'cUrl'];
	const COLUMN_DEFINITIONS = [
		'kPreischeckUserPatterns' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPreischeckPlattform' => [
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
		'cUrl' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kPreischeckUserPatterns */
	public $kPreischeckUserPatterns;

	/** @var int kPreischeckPlattform */
	public $kPreischeckPlattform;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cUrl */
	public $cUrl;
}
