<?php

namespace App\Schema;

class tKundenGruppeAttribute
{
	const TABLE_NAME = 'tKundenGruppeAttribute';
	const kKundenGruppeAttribute = 'kKundenGruppeAttribute';
	const kKundenGruppe = 'kKundenGruppe';
	const cName = 'cName';
	const cValue = 'cValue';

	/** @var int kKundenGruppeAttribute */
	public $kKundenGruppeAttribute;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
