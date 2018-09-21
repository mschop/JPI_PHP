<?php

namespace App\Schema;

class tVersandKonfigurationEigeneFelder
{
	const TABLE_NAME = 'tVersandKonfigurationEigeneFelder';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kAttribut = 'kAttribut';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kVersandKonfiguration', 'kAttribut', 'cWert'];
	const COLUMN_TYPES = ['kVersandKonfiguration' => 'int', 'kAttribut' => 'int', 'cWert' => 'varchar'];

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var string cWert */
	public $cWert;
}
