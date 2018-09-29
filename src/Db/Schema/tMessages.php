<?php

namespace App\Db\Schema;

class tMessages
{
	const TABLE_NAME = 'tMessages';
	const kMessages = 'kMessages';
	const kKunde = 'kKunde';
	const kLieferant = 'kLieferant';
	const sBereff = 'sBereff';
	const sText = 'sText';
	const sSentMailDate = 'sSentMailDate';
	const sSentFaxDate = 'sSentFaxDate';
	const nType = 'nType';
	const sHTMLText = 'sHTMLText';
	const sAttachment = 'sAttachment';
	const kFirma = 'kFirma';
	const kAnsprechpartner = 'kAnsprechpartner';
	const COLUMN_NAMES = [
		'kMessages',
		'kKunde',
		'kLieferant',
		'sBereff',
		'sText',
		'sSentMailDate',
		'sSentFaxDate',
		'nType',
		'sHTMLText',
		'sAttachment',
		'kFirma',
		'kAnsprechpartner',
	];
	const COLUMN_DEFINITIONS = [
		'kMessages' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'sBereff' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 511,
			'characterSetName' => 'iso_1',
		],
		'sText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'sSentMailDate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'sSentFaxDate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'sHTMLText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'sAttachment' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 8000,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAnsprechpartner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMessages */
	public $kMessages;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string sBereff */
	public $sBereff;

	/** @var string sText */
	public $sText;

	/** @var string sSentMailDate */
	public $sSentMailDate;

	/** @var string sSentFaxDate */
	public $sSentFaxDate;

	/** @var int nType */
	public $nType;

	/** @var string sHTMLText */
	public $sHTMLText;

	/** @var string sAttachment */
	public $sAttachment;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;
}
