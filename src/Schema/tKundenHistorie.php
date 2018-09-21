<?php

namespace App\Schema;

class tKundenHistorie
{
	const TABLE_NAME = 'tKundenHistorie';
	const kKunde = 'kKunde';
	const cString = 'cString';
	const dErstellt = 'dErstellt';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kKunde', 'cString', 'dErstellt', 'kBenutzer'];
	const COLUMN_TYPES = ['kKunde' => 'int', 'cString' => 'varchar', 'dErstellt' => 'datetime', 'kBenutzer' => 'int'];

	/** @var int kKunde */
	public $kKunde;

	/** @var string cString */
	public $cString;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kBenutzer */
	public $kBenutzer;
}
