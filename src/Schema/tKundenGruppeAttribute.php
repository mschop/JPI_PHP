<?php

namespace App\Schema;

class tKundenGruppeAttribute
{
	const TABLE_NAME = 'tKundenGruppeAttribute';
	const kKundenGruppeAttribute = 'kKundenGruppeAttribute';
	const kKundenGruppe = 'kKundenGruppe';
	const cName = 'cName';
	const cValue = 'cValue';
	const COLUMN_NAMES = ['kKundenGruppeAttribute', 'kKundenGruppe', 'cName', 'cValue'];
	const COLUMN_TYPES = [
		'kKundenGruppeAttribute' => 'int',
		'kKundenGruppe' => 'int',
		'cName' => 'varchar',
		'cValue' => 'varchar',
	];

	/** @var int kKundenGruppeAttribute */
	public $kKundenGruppeAttribute;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
