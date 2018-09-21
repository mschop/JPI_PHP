<?php

namespace App\Schema;

class tEingangsrechnungzusatzkosten
{
	const TABLE_NAME = 'tEingangsrechnungzusatzkosten';
	const kZusatzkosten = 'kZusatzkosten';
	const cName = 'cName';
	const nGLD = 'nGLD';
	const nPreis = 'nPreis';
	const COLUMN_NAMES = ['kZusatzkosten', 'cName', 'nGLD', 'nPreis'];
	const COLUMN_TYPES = ['kZusatzkosten' => 'int', 'cName' => 'varchar', 'nGLD' => 'tinyint', 'nPreis' => 'tinyint'];

	/** @var int kZusatzkosten */
	public $kZusatzkosten;

	/** @var string cName */
	public $cName;

	/** @var int nGLD */
	public $nGLD;

	/** @var int nPreis */
	public $nPreis;
}
