<?php

namespace App\Db\Schema;

class tRMRetourePos
{
	const TABLE_NAME = 'tRMRetourePos';
	const kRMRetourePos = 'kRMRetourePos';
	const kRMRetoure = 'kRMRetoure';
	const kRMGrund = 'kRMGrund';
	const kRMStatusVerlauf = 'kRMStatusVerlauf';
	const kZustand = 'kZustand';
	const kLieferscheinPos = 'kLieferscheinPos';
	const kBenutzer = 'kBenutzer';
	const cZustandKommentar = 'cZustandKommentar';
	const cGrundKommentar = 'cGrundKommentar';
	const fAnzahl = 'fAnzahl';
	const kArtikel = 'kArtikel';
	const nGutschreiben = 'nGutschreiben';
	const cFfnReturnPosId = 'cFfnReturnPosId';
	const COLUMN_NAMES = [
		'kRMRetourePos',
		'kRMRetoure',
		'kRMGrund',
		'kRMStatusVerlauf',
		'kZustand',
		'kLieferscheinPos',
		'kBenutzer',
		'cZustandKommentar',
		'cGrundKommentar',
		'fAnzahl',
		'kArtikel',
		'nGutschreiben',
		'cFfnReturnPosId',
	];
	const COLUMN_DEFINITIONS = [
		'kRMRetourePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetoure' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMGrund' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMStatusVerlauf' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kZustand' => [
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
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cZustandKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cGrundKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
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
		'nGutschreiben' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cFfnReturnPosId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kRMRetourePos */
	public $kRMRetourePos;

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var int kRMGrund */
	public $kRMGrund;

	/** @var int kRMStatusVerlauf */
	public $kRMStatusVerlauf;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kLieferscheinPos */
	public $kLieferscheinPos;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cZustandKommentar */
	public $cZustandKommentar;

	/** @var string cGrundKommentar */
	public $cGrundKommentar;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int nGutschreiben */
	public $nGutschreiben;

	/** @var string cFfnReturnPosId */
	public $cFfnReturnPosId;
}
