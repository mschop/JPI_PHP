<?php

namespace App\Schema;

class tFormularAnhangDaten
{
	const TABLE_NAME = 'tFormularAnhangDaten';
	const kFormularAnhangDaten = 'kFormularAnhangDaten';
	const cDateiname = 'cDateiname';
	const bSHA1 = 'bSHA1';
	const bDaten = 'bDaten';

	/** @var int kFormularAnhangDaten */
	public $kFormularAnhangDaten;

	/** @var string cDateiname */
	public $cDateiname;

	/** @var resource bSHA1 */
	public $bSHA1;

	/** @var resource bDaten */
	public $bDaten;
}
