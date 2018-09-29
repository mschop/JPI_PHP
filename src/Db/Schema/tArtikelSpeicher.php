<?php

namespace App\Db\Schema;

class tArtikelSpeicher
{
	const TABLE_NAME = 'tArtikelSpeicher';
	const kArtikel = 'kArtikel';
	const cNummer = 'cNummer';
	const nID = 'nID';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['kArtikel', 'cNummer', 'nID', 'nAktiv'];
	const COLUMN_DEFINITIONS = [
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nID' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cNummer */
	public $cNummer;

	/** @var int nID */
	public $nID;

	/** @var int nAktiv */
	public $nAktiv;
}
