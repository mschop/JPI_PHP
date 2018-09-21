<?php

namespace App\Schema;

class tEigenschaftWertSichtbarkeit
{
	const TABLE_NAME = 'tEigenschaftWertSichtbarkeit';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const COLUMN_NAMES = ['kEigenschaftWert', 'kKundenGruppe', 'kShop'];
	const COLUMN_TYPES = ['kEigenschaftWert' => 'int', 'kKundenGruppe' => 'int', 'kShop' => 'int'];

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
