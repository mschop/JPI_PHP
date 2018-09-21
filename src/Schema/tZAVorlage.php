<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kZAVorlage' => 'int',
		'cName' => 'varchar',
		'nZeilen' => 'int',
		'nTrenner' => 'tinyint',
		'nPosDatum' => 'tinyint',
		'nPosVorgang' => 'tinyint',
		'nPosVerwendung' => 'tinyint',
		'nPosVorname' => 'tinyint',
		'nPosName' => 'tinyint',
		'nPosUmsatz' => 'tinyint',
		'nSpalten' => 'int',
		'cZahlungsArt' => 'varchar',
		'nPosVerwendung2' => 'tinyint',
		'nPosVerwendung3' => 'tinyint',
		'nPosVerwendung4' => 'tinyint',
		'nPosVerwendung5' => 'tinyint',
		'nPosVerwendung6' => 'tinyint',
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
