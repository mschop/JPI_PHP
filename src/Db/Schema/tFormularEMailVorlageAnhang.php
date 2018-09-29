<?php

namespace App\Db\Schema;

class tFormularEMailVorlageAnhang
{
	const TABLE_NAME = 'tFormularEMailVorlageAnhang';
	const kFormularEMailVorlageAnhang = 'kFormularEMailVorlageAnhang';
	const kFormularVorlage = 'kFormularVorlage';
	const cName = 'cName';
	const nTyp = 'nTyp';
	const kFormularAnhangDaten = 'kFormularAnhangDaten';
	const nKindElement = 'nKindElement';
	const nFormular = 'nFormular';
	const nAusgabetyp = 'nAusgabetyp';
	const COLUMN_NAMES = [
		'kFormularEMailVorlageAnhang',
		'kFormularVorlage',
		'cName',
		'nTyp',
		'kFormularAnhangDaten',
		'nKindElement',
		'nFormular',
		'nAusgabetyp',
	];
	const COLUMN_DEFINITIONS = [
		'kFormularEMailVorlageAnhang' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularVorlage' => [
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
			'characterMaximumLength' => 128,
			'characterSetName' => 'iso_1',
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularAnhangDaten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nKindElement' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFormular' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAusgabetyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFormularEMailVorlageAnhang */
	public $kFormularEMailVorlageAnhang;

	/** @var int kFormularVorlage */
	public $kFormularVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nTyp */
	public $nTyp;

	/** @var int kFormularAnhangDaten */
	public $kFormularAnhangDaten;

	/** @var int nKindElement */
	public $nKindElement;

	/** @var int nFormular */
	public $nFormular;

	/** @var int nAusgabetyp */
	public $nAusgabetyp;
}
