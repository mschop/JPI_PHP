<?php

namespace App\Schema;

class tansprechpartner
{
	const TABLE_NAME = 'tansprechpartner';
	const kAnsprechpartner = 'kAnsprechpartner';
	const kLieferant = 'kLieferant';
	const kKunde = 'kKunde';
	const cName = 'cName';
	const cTel = 'cTel';
	const cFax = 'cFax';
	const cMail = 'cMail';
	const cAbteilung = 'cAbteilung';
	const cVorName = 'cVorName';
	const cAnrede = 'cAnrede';
	const cMobil = 'cMobil';

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cName */
	public $cName;

	/** @var string cTel */
	public $cTel;

	/** @var string cFax */
	public $cFax;

	/** @var string cMail */
	public $cMail;

	/** @var string cAbteilung */
	public $cAbteilung;

	/** @var string cVorName */
	public $cVorName;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cMobil */
	public $cMobil;
}
