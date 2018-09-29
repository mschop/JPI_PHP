<?php

namespace App\Db\Schema;

class tEigenschaftWertAbhaengigkeit
{
	const TABLE_NAME = 'tEigenschaftWertAbhaengigkeit';
	const kEigenschaftWertAbhaengigkeit = 'kEigenschaftWertAbhaengigkeit';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kEigenschaftWertZiel = 'kEigenschaftWertZiel';
	const COLUMN_NAMES = ['kEigenschaftWertAbhaengigkeit', 'kEigenschaftWert', 'kEigenschaftWertZiel'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftWertAbhaengigkeit' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWertZiel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEigenschaftWertAbhaengigkeit */
	public $kEigenschaftWertAbhaengigkeit;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kEigenschaftWertZiel */
	public $kEigenschaftWertZiel;
}
