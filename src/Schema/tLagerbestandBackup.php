<?php

namespace App\Schema;

class tLagerbestandBackup
{
	const TABLE_NAME = 'tLagerbestandBackup';
	const kArtikel = 'kArtikel';
	const fLagerbestand = 'fLagerbestand';
	const dErstellt = 'dErstellt';
	const cVersion = 'cVersion';
	const COLUMN_NAMES = ['kArtikel', 'fLagerbestand', 'dErstellt', 'cVersion'];
	const COLUMN_TYPES = [
		'kArtikel' => 'int',
		'fLagerbestand' => 'decimal',
		'dErstellt' => 'datetime',
		'cVersion' => 'varchar',
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fLagerbestand */
	public $fLagerbestand;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cVersion */
	public $cVersion;
}
