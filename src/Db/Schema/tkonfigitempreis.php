<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kKonfigitem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuerklasse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
