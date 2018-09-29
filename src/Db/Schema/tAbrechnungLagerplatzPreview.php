<?php

namespace App\Db\Schema;

class tAbrechnungLagerplatzPreview
{
	const TABLE_NAME = 'tAbrechnungLagerplatzPreview';
	const kAbrechnungLagerplatz = 'kAbrechnungLagerplatz';
	const kLieferant = 'kLieferant';
	const kWarenLagerPlatz = 'kWarenLagerPlatz';
	const kWarenLagerPlatzTyp = 'kWarenLagerPlatzTyp';
	const kWMSLagerBereich = 'kWMSLagerBereich';
	const kWarenlager = 'kWarenlager';
	const nModus = 'nModus';
	const nLagerkostenBerechnung = 'nLagerkostenBerechnung';
	const kArtikel = 'kArtikel';
	const kBenutzer = 'kBenutzer';
	const cSessionId = 'cSessionId';
	const dZeitstempel = 'dZeitstempel';
	const COLUMN_NAMES = [
		'kAbrechnungLagerplatz',
		'kLieferant',
		'kWarenLagerPlatz',
		'kWarenLagerPlatzTyp',
		'kWMSLagerBereich',
		'kWarenlager',
		'nModus',
		'nLagerkostenBerechnung',
		'kArtikel',
		'kBenutzer',
		'cSessionId',
		'dZeitstempel',
	];
	const COLUMN_DEFINITIONS = [
		'kAbrechnungLagerplatz' => [
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
		'kWarenLagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenLagerPlatzTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWMSLagerBereich' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nModus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nLagerkostenBerechnung' => [
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
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSessionId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kAbrechnungLagerplatz */
	public $kAbrechnungLagerplatz;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var int kWarenLagerPlatz */
	public $kWarenLagerPlatz;

	/** @var int kWarenLagerPlatzTyp */
	public $kWarenLagerPlatzTyp;

	/** @var int kWMSLagerBereich */
	public $kWMSLagerBereich;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int nModus */
	public $nModus;

	/** @var int nLagerkostenBerechnung */
	public $nLagerkostenBerechnung;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cSessionId */
	public $cSessionId;

	/** @var string dZeitstempel */
	public $dZeitstempel;
}
