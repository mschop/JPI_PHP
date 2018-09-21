<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kFormularEMailVorlageAnhang' => 'int',
		'kFormularVorlage' => 'int',
		'cName' => 'varchar',
		'nTyp' => 'tinyint',
		'kFormularAnhangDaten' => 'int',
		'nKindElement' => 'int',
		'nFormular' => 'int',
		'nAusgabetyp' => 'tinyint',
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
