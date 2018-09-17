<?php

namespace App\Schema;

class tKundenHistorie
{
	const TABLE_NAME = 'tKundenHistorie';
	const kKunde = 'kKunde';
	const cString = 'cString';
	const dErstellt = 'dErstellt';
	const kBenutzer = 'kBenutzer';

	/** @var int kKunde */
	public $kKunde;

	/** @var string cString */
	public $cString;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kBenutzer */
	public $kBenutzer;
}
