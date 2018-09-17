<?php

namespace App\Schema;

class tEigenschaftKombiWert
{
	const TABLE_NAME = 'tEigenschaftKombiWert';
	const kEigenschaftKombi = 'kEigenschaftKombi';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';

	/** @var int kEigenschaftKombi */
	public $kEigenschaftKombi;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;
}
