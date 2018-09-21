<?php

namespace App\Schema;

class tbestelleigenschaft
{
	const TABLE_NAME = 'tbestelleigenschaft';
	const kBestellEigenschaft = 'kBestellEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kBestellPos = 'kBestellPos';
	const kArtikel = 'kArtikel';
	const fNettoPreis = 'fNettoPreis';
	const cWert = 'cWert';
	const cName = 'cName';
	const kEigenschaft = 'kEigenschaft';
	const COLUMN_NAMES = [
		'kBestellEigenschaft',
		'kEigenschaftWert',
		'kBestellPos',
		'kArtikel',
		'fNettoPreis',
		'cWert',
		'cName',
		'kEigenschaft',
	];
	const COLUMN_TYPES = [
		'kBestellEigenschaft' => 'int',
		'kEigenschaftWert' => 'int',
		'kBestellPos' => 'int',
		'kArtikel' => 'int',
		'fNettoPreis' => 'decimal',
		'cWert' => 'varchar',
		'cName' => 'varchar',
		'kEigenschaft' => 'int',
	];

	/** @var int kBestellEigenschaft */
	public $kBestellEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kBestellPos */
	public $kBestellPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fNettoPreis */
	public $fNettoPreis;

	/** @var string cWert */
	public $cWert;

	/** @var string cName */
	public $cName;

	/** @var int kEigenschaft */
	public $kEigenschaft;
}
