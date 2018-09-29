<?php

namespace App\Db\Schema;

class tFulfillmentAuftragPos
{
	const TABLE_NAME = 'tFulfillmentAuftragPos';
	const kFulfillmentAuftragPos = 'kFulfillmentAuftragPos';
	const kFulfillmentAuftrag = 'kFulfillmentAuftrag';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kArtikel = 'kArtikel';
	const cArtNr = 'cArtNr';
	const cCarrier = 'cCarrier';
	const cName = 'cName';
	const fAnzahl = 'fAnzahl';
	const nStatus = 'nStatus';
	const cArtikelGeschenkText = 'cArtikelGeschenkText';
	const cArtikelHinweis = 'cArtikelHinweis';
	const nErrorCode = 'nErrorCode';
	const cErrorType = 'cErrorType';
	const cErrorMessage = 'cErrorMessage';
	const cAbhilfe = 'cAbhilfe';
	const COLUMN_NAMES = [
		'kFulfillmentAuftragPos',
		'kFulfillmentAuftrag',
		'kLieferscheinPos',
		'kArtikel',
		'cArtNr',
		'cCarrier',
		'cName',
		'fAnzahl',
		'nStatus',
		'cArtikelGeschenkText',
		'cArtikelHinweis',
		'nErrorCode',
		'cErrorType',
		'cErrorMessage',
		'cAbhilfe',
	];
	const COLUMN_DEFINITIONS = [
		'kFulfillmentAuftragPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentAuftrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferscheinPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtNr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
		'cCarrier' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArtikelGeschenkText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cArtikelHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'nErrorCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cErrorType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'cErrorMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1000,
			'characterSetName' => 'iso_1',
		],
		'cAbhilfe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kFulfillmentAuftragPos */
	public $kFulfillmentAuftragPos;

	/** @var int kFulfillmentAuftrag */
	public $kFulfillmentAuftrag;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cArtNr */
	public $cArtNr;

	/** @var string cCarrier */
	public $cCarrier;

	/** @var string cName */
	public $cName;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cArtikelGeschenkText */
	public $cArtikelGeschenkText;

	/** @var string cArtikelHinweis */
	public $cArtikelHinweis;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorType */
	public $cErrorType;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string cAbhilfe */
	public $cAbhilfe;
}
