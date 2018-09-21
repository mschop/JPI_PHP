<?php

namespace App\Schema;

class tEingangsrechnungPosZusatzkosten
{
	const TABLE_NAME = 'tEingangsrechnungPosZusatzkosten';
	const kZusatzkosten = 'kZusatzkosten';
	const kEingangsrechnungPos = 'kEingangsrechnungPos';
	const dWert = 'dWert';
	const fFremdFaktor = 'fFremdFaktor';
	const cWaehrungISO = 'cWaehrungISO';
	const fMwst = 'fMwst';
	const COLUMN_NAMES = ['kZusatzkosten', 'kEingangsrechnungPos', 'dWert', 'fFremdFaktor', 'cWaehrungISO', 'fMwst'];
	const COLUMN_TYPES = [
		'kZusatzkosten' => 'int',
		'kEingangsrechnungPos' => 'int',
		'dWert' => 'decimal',
		'fFremdFaktor' => 'decimal',
		'cWaehrungISO' => 'varchar',
		'fMwst' => 'decimal',
	];

	/** @var int kZusatzkosten */
	public $kZusatzkosten;

	/** @var int kEingangsrechnungPos */
	public $kEingangsrechnungPos;

	/** @var string dWert */
	public $dWert;

	/** @var string fFremdFaktor */
	public $fFremdFaktor;

	/** @var string cWaehrungISO */
	public $cWaehrungISO;

	/** @var string fMwst */
	public $fMwst;
}
