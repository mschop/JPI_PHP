<?php

namespace App\Schema;

class tEigenschaftKombiWert
{
	const TABLE_NAME = 'tEigenschaftKombiWert';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const COLUMN_NAMES = ['kEigenschaftKombi', 'kEigenschaft', 'kEigenschaftWert'];
	const COLUMN_TYPES = ['kEigenschaftKombi' => 'int', 'kEigenschaft' => 'int', 'kEigenschaftWert' => 'int'];

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;
}
