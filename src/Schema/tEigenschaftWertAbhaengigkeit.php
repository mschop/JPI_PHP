<?php

namespace App\Schema;

class tEigenschaftWertAbhaengigkeit
{
	const TABLE_NAME = 'tEigenschaftWertAbhaengigkeit';
	const kEigenschaftWertAbhaengigkeit = 'kEigenschaftWertAbhaengigkeit';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kEigenschaftWertZiel = 'kEigenschaftWertZiel';
	const COLUMN_NAMES = ['kEigenschaftWertAbhaengigkeit', 'kEigenschaftWert', 'kEigenschaftWertZiel'];
	const COLUMN_TYPES = [
		'kEigenschaftWertAbhaengigkeit' => 'int',
		'kEigenschaftWert' => 'int',
		'kEigenschaftWertZiel' => 'int',
	];

	/** @var int kEigenschaftWertAbhaengigkeit */
	public $kEigenschaftWertAbhaengigkeit;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kEigenschaftWertZiel */
	public $kEigenschaftWertZiel;
}
