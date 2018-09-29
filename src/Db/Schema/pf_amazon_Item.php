<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kGroup' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nErrorCode' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cErrorMessage' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'dErrorErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSKU' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 60,
			'characterSetName' => 'iso_1',
		],
		'cErrorHilfeText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'nRemoveBeschreibungsHtml' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dLastTransmission' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nReplaceLineBreaks' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
