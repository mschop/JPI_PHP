<?php

namespace App\Db\Schema;

class tAbrechnungEinzelnachweis
{
	const TABLE_NAME = 'tAbrechnungEinzelnachweis';
	const kAbrechnungEinzelnachweis = 'kAbrechnungEinzelnachweis';
	const kAbrechnung = 'kAbrechnung';
	const kAbrechnungPos = 'kAbrechnungPos';
	const fAnzahl = 'fAnzahl';
	const nObjekt = 'nObjekt';
	const kObjektPk = 'kObjektPk';
	const dErstellt = 'dErstellt';
	const cHinweis = 'cHinweis';
	const COLUMN_NAMES = [
		'kAbrechnungEinzelnachweis',
		'kAbrechnung',
		'kAbrechnungPos',
		'fAnzahl',
		'nObjekt',
		'kObjektPk',
		'dErstellt',
		'cHinweis',
	];
	const COLUMN_DEFINITIONS = [
		'kAbrechnungEinzelnachweis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAbrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAbrechnungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nObjekt' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kObjektPk' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'nvarchar',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 4000,
			'characterSetName' => 'UNICODE',
		],
	];

	/** @var int kAbrechnungEinzelnachweis */
	public $kAbrechnungEinzelnachweis;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var int kAbrechnungPos */
	public $kAbrechnungPos;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int nObjekt */
	public $nObjekt;

	/** @var int kObjektPk */
	public $kObjektPk;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var resource cHinweis */
	public $cHinweis;
}
