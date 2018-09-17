<?php

namespace App\Schema;

class tPreischeckWaehrung
{
	const TABLE_NAME = 'tPreischeckWaehrung';
	const kPreischeckWaehrung = 'kPreischeckWaehrung';
	const cISO3 = 'cISO3';
	const fFaktor = 'fFaktor';
	const dErstellt = 'dErstellt';

	/** @var int kPreischeckWaehrung */
	public $kPreischeckWaehrung;

	/** @var string cISO3 */
	public $cISO3;

	/** @var string fFaktor */
	public $fFaktor;

	/** @var string dErstellt */
	public $dErstellt;
}
