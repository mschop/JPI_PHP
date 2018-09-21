<?php

namespace App\Schema;

class tkonfigitempreis
{
	const TABLE_NAME = 'tkonfigitempreis';
	const kKonfigitem = 'kKonfigitem';
	const kKundengruppe = 'kKundengruppe';
	const kSteuerklasse = 'kSteuerklasse';
	const fPreis = 'fPreis';
	const kShop = 'kShop';
	const nTyp = 'nTyp';
	const COLUMN_NAMES = ['kKonfigitem', 'kKundengruppe', 'kSteuerklasse', 'fPreis', 'kShop', 'nTyp'];
	const COLUMN_TYPES = [
		'kKonfigitem' => 'int',
		'kKundengruppe' => 'int',
		'kSteuerklasse' => 'int',
		'fPreis' => 'decimal',
		'kShop' => 'int',
		'nTyp' => 'tinyint',
	];

	/** @var int kKonfigitem */
	public $kKonfigitem;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string fPreis */
	public $fPreis;

	/** @var int kShop */
	public $kShop;

	/** @var int nTyp */
	public $nTyp;
}
