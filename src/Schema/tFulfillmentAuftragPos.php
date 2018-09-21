<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kFulfillmentAuftragPos' => 'int',
		'kFulfillmentAuftrag' => 'int',
		'kLieferscheinPos' => 'int',
		'kArtikel' => 'int',
		'cArtNr' => 'varchar',
		'cCarrier' => 'varchar',
		'cName' => 'varchar',
		'fAnzahl' => 'decimal',
		'nStatus' => 'int',
		'cArtikelGeschenkText' => 'varchar',
		'cArtikelHinweis' => 'varchar',
		'nErrorCode' => 'int',
		'cErrorType' => 'varchar',
		'cErrorMessage' => 'varchar',
		'cAbhilfe' => 'varchar',
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
