<?php

namespace App\Schema;

class tPreischeckWaehrung
{
	const TABLE_NAME = 'tPreischeckWaehrung';
	const kPreischeckWaehrung = 'kPreischeckWaehrung';
	const cISO3 = 'cISO3';
	const fFaktor = 'fFaktor';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kPreischeckWaehrung', 'cISO3', 'fFaktor', 'dErstellt'];
	const COLUMN_TYPES = [
		'kPreischeckWaehrung' => 'int',
		'cISO3' => 'varchar',
		'fFaktor' => 'decimal',
		'dErstellt' => 'datetime',
	];

	/** @var int kPreischeckWaehrung */
	public $kPreischeckWaehrung;

	/** @var string cISO3 */
	public $cISO3;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string dErstellt */
	public $dErstellt;
}
