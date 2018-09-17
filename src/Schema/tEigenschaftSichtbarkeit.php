<?php

namespace App\Schema;

class tEigenschaftSichtbarkeit
{
	const TABLE_NAME = 'tEigenschaftSichtbarkeit';
	const kEigenschaft = 'kEigenschaft';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;
}
