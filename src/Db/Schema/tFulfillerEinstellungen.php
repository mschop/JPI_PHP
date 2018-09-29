<?php

namespace App\Db\Schema;

class tFulfillerEinstellungen
{
	const TABLE_NAME = 'tFulfillerEinstellungen';
	const kFulfillerEinstellungen = 'kFulfillerEinstellungen';
	const kLieferant = 'kLieferant';
	const kKunde = 'kKunde';
	const cPrefixAbrechnung = 'cPrefixAbrechnung';
	const cSuffixAbrechnung = 'cSuffixAbrechnung';
	const nAbrechnungsZeitraum = 'nAbrechnungsZeitraum';
	const kAbrechnung = 'kAbrechnung';
	const dAbrechnungInitial = 'dAbrechnungInitial';
	const dAbrechnungStart = 'dAbrechnungStart';
	const dAbrechnungEnde = 'dAbrechnungEnde';
	const nBestandserfassungModus = 'nBestandserfassungModus';
	const COLUMN_NAMES = [
		'kFulfillerEinstellungen',
		'kLieferant',
		'kKunde',
		'cPrefixAbrechnung',
		'cSuffixAbrechnung',
		'nAbrechnungsZeitraum',
		'kAbrechnung',
		'dAbrechnungInitial',
		'dAbrechnungStart',
		'dAbrechnungEnde',
		'nBestandserfassungModus',
	];
	const COLUMN_DEFINITIONS = [
		'kFulfillerEinstellungen' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLieferant' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPrefixAbrechnung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cSuffixAbrechnung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'nAbrechnungsZeitraum' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAbrechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAbrechnungInitial' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAbrechnungStart' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dAbrechnungEnde' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nBestandserfassungModus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFulfillerEinstellungen */
	public $kFulfillerEinstellungen;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cPrefixAbrechnung */
	public $cPrefixAbrechnung;

	/** @var string cSuffixAbrechnung */
	public $cSuffixAbrechnung;

	/** @var int nAbrechnungsZeitraum */
	public $nAbrechnungsZeitraum;

	/** @var int kAbrechnung */
	public $kAbrechnung;

	/** @var string dAbrechnungInitial */
	public $dAbrechnungInitial;

	/** @var string dAbrechnungStart */
	public $dAbrechnungStart;

	/** @var string dAbrechnungEnde */
	public $dAbrechnungEnde;

	/** @var int nBestandserfassungModus */
	public $nBestandserfassungModus;
}
