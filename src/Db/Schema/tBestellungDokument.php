<?php

namespace App\Db\Schema;

class tBestellungDokument
{
	const TABLE_NAME = 'tBestellungDokument';
	const kBestellungDokument = 'kBestellungDokument';
	const kBestellung = 'kBestellung';
	const bDokument = 'bDokument';
	const nDokumentTyp = 'nDokumentTyp';
	const nDateigroesse = 'nDateigroesse';
	const cDateierweiterung = 'cDateierweiterung';
	const dErstellt = 'dErstellt';
	const dAenderung = 'dAenderung';
	const COLUMN_NAMES = [
		'kBestellungDokument',
		'kBestellung',
		'bDokument',
		'nDokumentTyp',
		'nDateigroesse',
		'cDateierweiterung',
		'dErstellt',
		'dAenderung',
	];
	const COLUMN_DEFINITIONS = [
		'kBestellungDokument' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'bDokument' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
		'nDokumentTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDateigroesse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cDateierweiterung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAenderung' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBestellungDokument */
	public $kBestellungDokument;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var resource bDokument */
	public $bDokument;

	/** @var int nDokumentTyp */
	public $nDokumentTyp;

	/** @var int nDateigroesse */
	public $nDateigroesse;

	/** @var string cDateierweiterung */
	public $cDateierweiterung;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dAenderung */
	public $dAenderung;
}
