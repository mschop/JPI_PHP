<?php

namespace App\Schema;

class tGebinde
{
	const TABLE_NAME = 'tGebinde';
	const kGebinde = 'kGebinde';
	const kArtikel = 'kArtikel';
	const cName = 'cName';
	const fAnzahl = 'fAnzahl';
	const cEAN = 'cEAN';
	const cUPC = 'cUPC';
	const COLUMN_NAMES = ['kGebinde', 'kArtikel', 'cName', 'fAnzahl', 'cEAN', 'cUPC'];
	const COLUMN_TYPES = [
		'kGebinde' => 'int',
		'kArtikel' => 'int',
		'cName' => 'varchar',
		'fAnzahl' => 'decimal',
		'cEAN' => 'varchar',
		'cUPC' => 'varchar',
	];

	/** @var int kGebinde */
	public $kGebinde;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cName */
	public $cName;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string cEAN */
	public $cEAN;

	/** @var string cUPC */
	public $cUPC;
}
