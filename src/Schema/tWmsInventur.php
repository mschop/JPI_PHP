<?php

namespace App\Schema;

class tWmsInventur
{
	const TABLE_NAME = 'tWmsInventur';
	const kWmsInventur = 'kWmsInventur';
	const cKommentar = 'cKommentar';
	const dAngelegt = 'dAngelegt';
	const kBenutzer = 'kBenutzer';
	const nStatus = 'nStatus';
	const kWarenlager = 'kWarenlager';

	/** @var int kWmsInventur */
	public $kWmsInventur;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var string dAngelegt */
	public $dAngelegt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kWarenlager */
	public $kWarenlager;
}
