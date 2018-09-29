<?php

namespace App\Db\Schema;

class tZAVorlage
{
	const TABLE_NAME = 'tZAVorlage';
	const kZAVorlage = 'kZAVorlage';
	const cName = 'cName';
	const nZeilen = 'nZeilen';
	const nTrenner = 'nTrenner';
	const nPosDatum = 'nPosDatum';
	const nPosVorgang = 'nPosVorgang';
	const nPosVerwendung = 'nPosVerwendung';
	const nPosVorname = 'nPosVorname';
	const nPosName = 'nPosName';
	const nPosUmsatz = 'nPosUmsatz';
	const nSpalten = 'nSpalten';
	const cZahlungsArt = 'cZahlungsArt';
	const nPosVerwendung2 = 'nPosVerwendung2';
	const nPosVerwendung3 = 'nPosVerwendung3';
	const nPosVerwendung4 = 'nPosVerwendung4';
	const nPosVerwendung5 = 'nPosVerwendung5';
	const nPosVerwendung6 = 'nPosVerwendung6';
	const COLUMN_NAMES = [
		'kZAVorlage',
		'cName',
		'nZeilen',
		'nTrenner',
		'nPosDatum',
		'nPosVorgang',
		'nPosVerwendung',
		'nPosVorname',
		'nPosName',
		'nPosUmsatz',
		'nSpalten',
		'cZahlungsArt',
		'nPosVerwendung2',
		'nPosVerwendung3',
		'nPosVerwendung4',
		'nPosVerwendung5',
		'nPosVerwendung6',
	];
	const COLUMN_DEFINITIONS = [
		'kZAVorlage' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nZeilen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTrenner' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosDatum' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVorgang' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVerwendung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVorname' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosName' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosUmsatz' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSpalten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZahlungsArt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPosVerwendung2' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVerwendung3' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVerwendung4' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVerwendung5' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPosVerwendung6' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kZAVorlage */
	public $kZAVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nZeilen */
	public $nZeilen;

	/** @var int nTrenner */
	public $nTrenner;

	/** @var int nPosDatum */
	public $nPosDatum;

	/** @var int nPosVorgang */
	public $nPosVorgang;

	/** @var int nPosVerwendung */
	public $nPosVerwendung;

	/** @var int nPosVorname */
	public $nPosVorname;

	/** @var int nPosName */
	public $nPosName;

	/** @var int nPosUmsatz */
	public $nPosUmsatz;

	/** @var int nSpalten */
	public $nSpalten;

	/** @var string cZahlungsArt */
	public $cZahlungsArt;

	/** @var int nPosVerwendung2 */
	public $nPosVerwendung2;

	/** @var int nPosVerwendung3 */
	public $nPosVerwendung3;

	/** @var int nPosVerwendung4 */
	public $nPosVerwendung4;

	/** @var int nPosVerwendung5 */
	public $nPosVerwendung5;

	/** @var int nPosVerwendung6 */
	public $nPosVerwendung6;
}
