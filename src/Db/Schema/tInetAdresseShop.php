<?php

namespace App\Db\Schema;

class tInetAdresseShop
{
	const TABLE_NAME = 'tInetAdresseShop';
	const kInetAdresse = 'kInetAdresse';
	const kShop = 'kShop';
	const kAdresse = 'kAdresse';
	const COLUMN_NAMES = ['kInetAdresse', 'kShop', 'kAdresse'];
	const COLUMN_DEFINITIONS = [
		'kInetAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kInetAdresse */
	public $kInetAdresse;

	/** @var int kShop */
	public $kShop;

	/** @var int kAdresse */
	public $kAdresse;
}
