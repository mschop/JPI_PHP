<?php

namespace App\Db\Schema;

class tintervall
{
	const TABLE_NAME = 'tintervall';
	const kIntervall = 'kIntervall';
	const kBestellung = 'kBestellung';
	const dStartdatum = 'dStartdatum';
	const dEnddatum = 'dEnddatum';
	const nAlleXTage = 'nAlleXTage';
	const nAlleXMonate = 'nAlleXMonate';
	const AmMonatsende = 'AmMonatsende';
	const nAlleXJahre = 'nAlleXJahre';
	const kLieferAdresse = 'kLieferAdresse';
	const kRechnungsAdresse = 'kRechnungsAdresse';
	const COLUMN_NAMES = [
		'kIntervall',
		'kBestellung',
		'dStartdatum',
		'dEnddatum',
		'nAlleXTage',
		'nAlleXMonate',
		'AmMonatsende',
		'nAlleXJahre',
		'kLieferAdresse',
		'kRechnungsAdresse',
	];
	const COLUMN_DEFINITIONS = [
		'kIntervall' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dStartdatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dEnddatum' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleXTage' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleXMonate' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'AmMonatsende' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAlleXJahre' => [
			'type' => 'smallint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechnungsAdresse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string dStartdatum */
	public $dStartdatum;

	/** @var string dEnddatum */
	public $dEnddatum;

	/** @var int nAlleXTage */
	public $nAlleXTage;

	/** @var int nAlleXMonate */
	public $nAlleXMonate;

	/** @var int AmMonatsende */
	public $AmMonatsende;

	/** @var int nAlleXJahre */
	public $nAlleXJahre;

	/** @var int kLieferAdresse */
	public $kLieferAdresse;

	/** @var int kRechnungsAdresse */
	public $kRechnungsAdresse;
}
