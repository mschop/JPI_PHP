<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kZusatzkosten' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEingangsrechnungPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fFremdFaktor' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWaehrungISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'fMwst' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
