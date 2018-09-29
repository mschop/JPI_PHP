<?php

namespace App\Db\Schema;

class tkonfigitem
{
	const TABLE_NAME = 'tkonfigitem';
	const kKonfigitem = 'kKonfigitem';
	const kKonfiggruppe = 'kKonfiggruppe';
	const kArtikel = 'kArtikel';
	const nPosTyp = 'nPosTyp';
	const bSelektiert = 'bSelektiert';
	const bEmpfohlen = 'bEmpfohlen';
	const bName = 'bName';
	const bPreis = 'bPreis';
	const nSort = 'nSort';
	const bRabatt = 'bRabatt';
	const bZuschlag = 'bZuschlag';
	const fMin = 'fMin';
	const fMax = 'fMax';
	const fInitial = 'fInitial';
	const fStandardpreis = 'fStandardpreis';
	const bIgnoreMultiplier = 'bIgnoreMultiplier';
	const COLUMN_NAMES = [
		'kKonfigitem',
		'kKonfiggruppe',
		'kArtikel',
		'nPosTyp',
		'bSelektiert',
		'bEmpfohlen',
		'bName',
		'bPreis',
		'nSort',
		'bRabatt',
		'bZuschlag',
		'fMin',
		'fMax',
		'fInitial',
		'fStandardpreis',
		'bIgnoreMultiplier',
	];
	const COLUMN_DEFINITIONS = [
		'kKonfigitem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKonfiggruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bSelektiert' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bEmpfohlen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bName' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bPreis' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bRabatt' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bZuschlag' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fInitial' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fStandardpreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bIgnoreMultiplier' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kKonfigitem */
	public $kKonfigitem;

	/** @var int kKonfiggruppe */
	public $kKonfiggruppe;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nPosTyp */
	public $nPosTyp;

	/** @var int bSelektiert */
	public $bSelektiert;

	/** @var int bEmpfohlen */
	public $bEmpfohlen;

	/** @var int bName */
	public $bName;

	/** @var int bPreis */
	public $bPreis;

	/** @var int nSort */
	public $nSort;

	/** @var int bRabatt */
	public $bRabatt;

	/** @var int bZuschlag */
	public $bZuschlag;

	/** @var string fMin */
	public $fMin;

	/** @var string fMax */
	public $fMax;

	/** @var string fInitial */
	public $fInitial;

	/** @var string fStandardpreis */
	public $fStandardpreis;

	/** @var int bIgnoreMultiplier */
	public $bIgnoreMultiplier;
}
