<?php

namespace App\Schema;

class pf_amazon_Item
{
	const TABLE_NAME = 'pf_amazon_Item';
	const kItem = 'kItem';
	const kGroup = 'kGroup';
	const kArtikel = 'kArtikel';
	const kPlattform = 'kPlattform';
	const kUser = 'kUser';
	const nStatus = 'nStatus';
	const nErrorCode = 'nErrorCode';
	const cErrorMessage = 'cErrorMessage';
	const dErrorErstellt = 'dErrorErstellt';
	const cSKU = 'cSKU';
	const cErrorHilfeText = 'cErrorHilfeText';
	const nRemoveBeschreibungsHtml = 'nRemoveBeschreibungsHtml';
	const dLastTransmission = 'dLastTransmission';
	const nReplaceLineBreaks = 'nReplaceLineBreaks';
	const COLUMN_NAMES = [
		'kItem',
		'kGroup',
		'kArtikel',
		'kPlattform',
		'kUser',
		'nStatus',
		'nErrorCode',
		'cErrorMessage',
		'dErrorErstellt',
		'cSKU',
		'cErrorHilfeText',
		'nRemoveBeschreibungsHtml',
		'dLastTransmission',
		'nReplaceLineBreaks',
	];
	const COLUMN_TYPES = [
		'kItem' => 'int',
		'kGroup' => 'int',
		'kArtikel' => 'int',
		'kPlattform' => 'int',
		'kUser' => 'int',
		'nStatus' => 'tinyint',
		'nErrorCode' => 'int',
		'cErrorMessage' => 'varchar',
		'dErrorErstellt' => 'datetime',
		'cSKU' => 'varchar',
		'cErrorHilfeText' => 'varchar',
		'nRemoveBeschreibungsHtml' => 'tinyint',
		'dLastTransmission' => 'datetime',
		'nReplaceLineBreaks' => 'tinyint',
	];

	/** @var int kItem */
	public $kItem;

	/** @var int kGroup */
	public $kGroup;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kUser */
	public $kUser;

	/** @var int nStatus */
	public $nStatus;

	/** @var int nErrorCode */
	public $nErrorCode;

	/** @var string cErrorMessage */
	public $cErrorMessage;

	/** @var string dErrorErstellt */
	public $dErrorErstellt;

	/** @var string cSKU */
	public $cSKU;

	/** @var string cErrorHilfeText */
	public $cErrorHilfeText;

	/** @var int nRemoveBeschreibungsHtml */
	public $nRemoveBeschreibungsHtml;

	/** @var string dLastTransmission */
	public $dLastTransmission;

	/** @var int nReplaceLineBreaks */
	public $nReplaceLineBreaks;
}
