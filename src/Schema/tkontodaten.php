<?php

namespace App\Schema;

class tkontodaten
{
	const TABLE_NAME = 'tkontodaten';
	const kKontoDaten = 'kKontoDaten';
	const kKunde = 'kKunde';
	const kLieferant = 'kLieferant';
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

	/** @var int kKontoDaten */
	public $kKontoDaten;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferant */
	public $kLieferant;

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
