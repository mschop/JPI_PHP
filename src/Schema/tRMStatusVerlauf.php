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
