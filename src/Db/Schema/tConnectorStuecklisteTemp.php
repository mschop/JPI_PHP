<?php

namespace App\Db\Schema;

class tConnectorStuecklisteTemp
{
	const TABLE_NAME = 'tConnectorStuecklisteTemp';
	const kStueckliste = 'kStueckliste';
	const cVaterID = 'cVaterID';
	const kArtikelKind = 'kArtikelKind';
	const fAnzahl = 'fAnzahl';
	const COLUMN_NAMES = ['kStueckliste', 'cVaterID', 'kArtikelKind', 'fAnzahl'];
	const COLUMN_DEFINITIONS = [
		'kStueckliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cVaterID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'kArtikelKind' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStueckliste */
	public $kStueckliste;

	/** @var string cVaterID */
	public $cVaterID;

	/** @var int kArtikelKind */
	public $kArtikelKind;

	/** @var string fAnzahl */
	public $fAnzahl;
}
