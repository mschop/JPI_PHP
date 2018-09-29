<?php

namespace App\Db\Schema;

class tArtikelAbnahme
{
	const TABLE_NAME = 'tArtikelAbnahme';
	const kArtikel = 'kArtikel';
	const kKundengruppe = 'kKundengruppe';
	const fIntervall = 'fIntervall';
	const fMindestabnahme = 'fMindestabnahme';
	const COLUMN_NAMES = ['kArtikel', 'kKundengruppe', 'fIntervall', 'fMindestabnahme'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
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
		'fIntervall' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMindestabnahme' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var string fIntervall */
	public $fIntervall;

	/** @var string fMindestabnahme */
	public $fMindestabnahme;
}
