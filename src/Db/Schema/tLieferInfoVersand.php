<?php

namespace App\Db\Schema;

class tLieferInfoVersand
{
	const TABLE_NAME = 'tLieferInfoVersand';
	const kBestellung = 'kBestellung';
	const nStatus = 'nStatus';
	const nStatusEigen = 'nStatusEigen';
	const nStatusBestellt = 'nStatusBestellt';
	const nStatusEigenBestellt = 'nStatusEigenBestellt';
	const nStatusBestelltBlockiert = 'nStatusBestelltBlockiert';
	const nStatusEigenBstelltBlockiert = 'nStatusEigenBstelltBlockiert';
	const COLUMN_NAMES = [
		'kBestellung',
		'nStatus',
		'nStatusEigen',
		'nStatusBestellt',
		'nStatusEigenBestellt',
		'nStatusBestelltBlockiert',
		'nStatusEigenBstelltBlockiert',
	];
	const COLUMN_DEFINITIONS = [
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusEigen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusBestellt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusEigenBestellt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusBestelltBlockiert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusEigenBstelltBlockiert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nStatusEigen */
	public $nStatusEigen;

	/** @var int nStatusBestellt */
	public $nStatusBestellt;

	/** @var int nStatusEigenBestellt */
	public $nStatusEigenBestellt;

	/** @var int nStatusBestelltBlockiert */
	public $nStatusBestelltBlockiert;

	/** @var int nStatusEigenBstelltBlockiert */
	public $nStatusEigenBstelltBlockiert;
}
