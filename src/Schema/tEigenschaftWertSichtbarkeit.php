<?php

namespace App\Schema;

class tEigenschaftWertSichtbarkeit
{
	const TABLE_NAME = 'tEigenschaftWertSichtbarkeit';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
