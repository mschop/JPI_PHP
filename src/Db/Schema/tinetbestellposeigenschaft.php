<?php

namespace App\Db\Schema;

class tinetbestellposeigenschaft
{
	const TABLE_NAME = 'tinetbestellposeigenschaft';
	const kInetBestellPosEigenschaft = 'kInetBestellPosEigenschaft';
	const kInetBestellPos = 'kInetBestellPos';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const fAufpreis = 'fAufpreis';
	const cWert = 'cWert';
	const kShop = 'kShop';
	const COLUMN_NAMES = [
		'kInetBestellPosEigenschaft',
		'kInetBestellPos',
		'kEigenschaft',
		'kEigenschaftWert',
		'fAufpreis',
		'cWert',
		'kShop',
	];
	const COLUMN_DEFINITIONS = [
		'kInetBestellPosEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kInetBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaft' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kEigenschaftWert' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAufpreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cWert' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kInetBestellPosEigenschaft */
	public $kInetBestellPosEigenschaft;

	/** @var int kInetBestellPos */
	public $kInetBestellPos;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var string fAufpreis */
	public $fAufpreis;

	/** @var string cWert */
	public $cWert;

	/** @var int kShop */
	public $kShop;
}
