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
	const COLUMN_NAMES = [
		'kAnsprechpartner',
		'kLieferant',
		'kKunde',
		'cName',
		'cTel',
		'cFax',
		'cMail',
		'cAbteilung',
		'cVorName',
		'cAnrede',
		'cMobil',
	];
	const COLUMN_TYPES = [
		'kAnsprechpartner' => 'int',
		'kLieferant' => 'int',
		'kKunde' => 'int',
		'cName' => 'varchar',
		'cTel' => 'varchar',
		'cFax' => 'varchar',
		'cMail' => 'varchar',
		'cAbteilung' => 'varchar',
		'cVorName' => 'varchar',
		'cAnrede' => 'varchar',
		'cMobil' => 'varchar',
	];

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
