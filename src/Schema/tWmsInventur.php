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
	const COLUMN_NAMES = ['kWmsInventur', 'cKommentar', 'dAngelegt', 'kBenutzer', 'nStatus', 'kWarenlager'];
	const COLUMN_TYPES = [
		'kWmsInventur' => 'int',
		'cKommentar' => 'varchar',
		'dAngelegt' => 'datetime',
		'kBenutzer' => 'int',
		'nStatus' => 'int',
		'kWarenlager' => 'int',
	];

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
