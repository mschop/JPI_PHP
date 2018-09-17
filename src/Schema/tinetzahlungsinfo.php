<?php

namespace App\Schema;

class tinetzahlungsinfo
{
	const TABLE_NAME = 'tinetzahlungsinfo';
	const kInetZahlungsInfo = 'kInetZahlungsInfo';
	const kInetBestellung = 'kInetBestellung';
	const cBankName = 'cBankName';
	const cBLZ = 'cBLZ';
	const cKontoNr = 'cKontoNr';
	const cKartenNr = 'cKartenNr';
	const cGueltigkeit = 'cGueltigkeit';
	const cCVV = 'cCVV';
	const cKartenTyp = 'cKartenTyp';
	const cInhaber = 'cInhaber';
	const kBestellung = 'kBestellung';
	const kShop = 'kShop';
	const cIBAN = 'cIBAN';
	const cBIC = 'cBIC';

	/** @var int kInetZahlungsInfo */
	public $kInetZahlungsInfo;

	/** @var int kInetBestellung */
	public $kInetBestellung;

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

	/** @var int kBestellung */
	public $kBestellung;

	/** @var int kShop */
	public $kShop;

	/** @var string cIBAN */
	public $cIBAN;

	/** @var string cBIC */
	public $cBIC;
}
