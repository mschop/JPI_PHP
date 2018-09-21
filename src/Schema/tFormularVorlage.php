<?php

namespace App\Schema;

class tFormularVorlage
{
	const TABLE_NAME = 'tFormularVorlage';
	const kFormularVorlage = 'kFormularVorlage';
	const nTyp = 'nTyp';
	const kFormular = 'kFormular';
	const kFormularLLVorlageDaten = 'kFormularLLVorlageDaten';
	const cName = 'cName';
	const kFirma = 'kFirma';
	const kSprache = 'kSprache';
	const kKundenGruppe = 'kKundenGruppe';
	const kLieferant = 'kLieferant';
	const kWarenlager = 'kWarenlager';
	const kPlattform = 'kPlattform';
	const cMahnstufenName = 'cMahnstufenName';
	const COLUMN_NAMES = [
		'kFormularVorlage',
		'nTyp',
		'kFormular',
		'kFormularLLVorlageDaten',
		'cName',
		'kFirma',
		'kSprache',
		'kKundenGruppe',
		'kLieferant',
		'kWarenlager',
		'kPlattform',
		'cMahnstufenName',
	];
	const COLUMN_TYPES = [
		'kFormularVorlage' => 'int',
		'nTyp' => 'tinyint',
		'kFormular' => 'int',
		'kFormularLLVorlageDaten' => 'int',
		'cName' => 'varchar',
		'kFirma' => 'int',
		'kSprache' => 'int',
		'kKundenGruppe' => 'int',
		'kLieferant' => 'int',
		'kWarenlager' => 'int',
		'kPlattform' => 'int',
		'cMahnstufenName' => 'varchar',
	];

	/** @var int kFormularVorlage */
	public $kFormularVorlage;

	/** @var int nTyp */
	public $nTyp;

	/** @var int kFormular */
	public $kFormular;

	/** @var int kFormularLLVorlageDaten */
	public $kFormularLLVorlageDaten;

	/** @var string cName */
	public $cName;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cMahnstufenName */
	public $cMahnstufenName;
}
