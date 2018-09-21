<?php

namespace App\Schema;

class tIntervallZahlungsInfo
{
	const TABLE_NAME = 'tIntervallZahlungsInfo';
	const kIntervall = 'kIntervall';
	const cBankName = 'cBankName';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';
	const cKartenNr = 'cKartenNr';
	const cGueltigkeit = 'cGueltigkeit';
	const cCVV = 'cCVV';
	const cKartenTyp = 'cKartenTyp';
	const cInhaber = 'cInhaber';
	const cIBAN = 'cIBAN';
	const cBIC = 'cBIC';
	const COLUMN_NAMES = [
		'kIntervall',
		'cBankName',
		'cBLZ',
		'cKontoNr',
		'cKartenNr',
		'cGueltigkeit',
		'cCVV',
		'cKartenTyp',
		'cInhaber',
		'cIBAN',
		'cBIC',
	];
	const COLUMN_TYPES = [
		'kIntervall' => 'int',
		'cBankName' => 'varchar',
		'cBLZ' => 'varchar',
		'cKontoNr' => 'varchar',
		'cKartenNr' => 'varchar',
		'cGueltigkeit' => 'varchar',
		'cCVV' => 'varchar',
		'cKartenTyp' => 'varchar',
		'cInhaber' => 'varchar',
		'cIBAN' => 'varchar',
		'cBIC' => 'varchar',
	];

	/** @var int kIntervall */
	public $kIntervall;

	/** @var string cBankName */
	public $cBankName;

	/** @var string cBLZ */
	public $cBLZ;

	/** @var string cKontoNr */
	public $cKontoNr;

	/** @var string cKartenNr */
	public $cKartenNr;

	/** @var string cGueltigkeit */
	public $cGueltigkeit;

	/** @var string cCVV */
	public $cCVV;

	/** @var string cKartenTyp */
	public $cKartenTyp;

	/** @var string cInhaber */
	public $cInhaber;

	/** @var string cIBAN */
	public $cIBAN;

	/** @var string cBIC */
	public $cBIC;
}
