<?php

namespace App\Schema;

class tRMStatusVerlauf
{
	const TABLE_NAME = 'tRMStatusVerlauf';
	const kRMStatusVerlauf = 'kRMStatusVerlauf';
	const kRMRetourePos = 'kRMRetourePos';
	const kRMStatus = 'kRMStatus';
	const cKommentar = 'cKommentar';
	const kBenutzer = 'kBenutzer';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kRMStatusVerlauf', 'kRMRetourePos', 'kRMStatus', 'cKommentar', 'kBenutzer', 'dErstellt'];
	const COLUMN_TYPES = [
		'kRMStatusVerlauf' => 'int',
		'kRMRetourePos' => 'int',
		'kRMStatus' => 'int',
		'cKommentar' => 'varchar',
		'kBenutzer' => 'int',
		'dErstellt' => 'datetime',
	];

	/** @var int kRMStatusVerlauf */
	public $kRMStatusVerlauf;

	/** @var int kRMRetourePos */
	public $kRMRetourePos;

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dErstellt */
	public $dErstellt;
}
