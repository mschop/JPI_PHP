<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kFormularVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularLLVorlageDaten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMahnstufenName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
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
