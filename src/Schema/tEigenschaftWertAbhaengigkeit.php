<?php

namespace App\Schema;

class tEigenschaftWertAbhaengigkeit
{
	const TABLE_NAME = 'tEigenschaftWertAbhaengigkeit';
	const kEigenschaftWertAbhaengigkeit = 'kEigenschaftWertAbhaengigkeit';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kEigenschaftWertZiel = 'kEigenschaftWertZiel';

	/** @var int kEigenschaftWertAbhaengigkeit */
	public $kEigenschaftWertAbhaengigkeit;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kEigenschaftWertZiel */
	public $kEigenschaftWertZiel;
}
