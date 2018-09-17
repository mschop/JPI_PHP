<?php

namespace App\Schema;

class tVersandKonfigurationEigeneFelder
{
	const TABLE_NAME = 'tVersandKonfigurationEigeneFelder';
	const kVersandKonfiguration = 'kVersandKonfiguration';
	const kAttribut = 'kAttribut';
	const cWert = 'cWert';

	/** @var int kVersandKonfiguration */
	public $kVersandKonfiguration;

	/** @var int kAttribut */
	public $kAttribut;

	/** @var string cWert */
	public $cWert;
}
