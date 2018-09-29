<?php

namespace App\Db\Schema;

class tSteuerschluessel
{
	const TABLE_NAME = 'tSteuerschluessel';
	const kSteuerschluessel = 'kSteuerschluessel';
	const cName = 'cName';
	const cSteuerkonto = 'cSteuerkonto';
	const cSkontokonto = 'cSkontokonto';
	const cBonuskonto = 'cBonuskonto';
	const cErloeskonto = 'cErloeskonto';
	const cAusbuchungskonto = 'cAusbuchungskonto';
	const cAnzahlungskonto = 'cAnzahlungskonto';
	const nAnzahlung = 'nAnzahlung';
	const nAutomatik = 'nAutomatik';
	const nSchluesselnummer = 'nSchluesselnummer';
	const COLUMN_NAMES = [
		'kSteuerschluessel',
		'cName',
		'cSteuerkonto',
		'cSkontokonto',
		'cBonuskonto',
		'cErloeskonto',
		'cAusbuchungskonto',
		'cAnzahlungskonto',
		'nAnzahlung',
		'nAutomatik',
		'nSchluesselnummer',
	];
	const COLUMN_DEFINITIONS = [
		'kSteuerschluessel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSteuerkonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cSkontokonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cBonuskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cErloeskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cAusbuchungskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'cAnzahlungskonto' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 10,
			'characterSetName' => 'iso_1',
		],
		'nAnzahlung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAutomatik' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSchluesselnummer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kSteuerschluessel */
	public $kSteuerschluessel;

	/** @var string cName */
	public $cName;

	/** @var string cSteuerkonto */
	public $cSteuerkonto;

	/** @var string cSkontokonto */
	public $cSkontokonto;

	/** @var string cBonuskonto */
	public $cBonuskonto;

	/** @var string cErloeskonto */
	public $cErloeskonto;

	/** @var string cAusbuchungskonto */
	public $cAusbuchungskonto;

	/** @var string cAnzahlungskonto */
	public $cAnzahlungskonto;

	/** @var int nAnzahlung */
	public $nAnzahlung;

	/** @var int nAutomatik */
	public $nAutomatik;

	/** @var int nSchluesselnummer */
	public $nSchluesselnummer;
}
