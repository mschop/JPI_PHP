<?php

namespace App\Db\Schema;

class tEigenschaftWertAufpreis
{
	const TABLE_NAME = 'tEigenschaftWertAufpreis';
	const kEigenschaftWert = 'kEigenschaftWert';
	const kKundenGruppe = 'kKundenGruppe';
	const kShop = 'kShop';
	const fAufpreisNetto = 'fAufpreisNetto';
	const COLUMN_NAMES = ['kEigenschaftWert', 'kKundenGruppe', 'kShop', 'fAufpreisNetto'];
	const COLUMN_DEFINITIONS = [
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufpreisNetto' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var string fAufpreisNetto */
	public $fAufpreisNetto;
}
