<?php

namespace App\Db\Schema;

class tLandSteuersatz
{
	const TABLE_NAME = 'tLandSteuersatz';
	const cISOLand = 'cISOLand';
	const cKuerzelBundesland = 'cKuerzelBundesland';
	const fStarkErmaessigterSatz = 'fStarkErmaessigterSatz';
	const fErmaessigterSatzNiedrig = 'fErmaessigterSatzNiedrig';
	const fErmaessigterSatz = 'fErmaessigterSatz';
	const fNormalerSatz = 'fNormalerSatz';
	const fZwischensatz = 'fZwischensatz';
	const fLieferschwelle = 'fLieferschwelle';
	const COLUMN_NAMES = [
		'cISOLand',
		'cKuerzelBundesland',
		'fStarkErmaessigterSatz',
		'fErmaessigterSatzNiedrig',
		'fErmaessigterSatz',
		'fNormalerSatz',
		'fZwischensatz',
		'fLieferschwelle',
	];
	const COLUMN_DEFINITIONS = [
		'cISOLand' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cKuerzelBundesland' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'fStarkErmaessigterSatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fErmaessigterSatzNiedrig' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fErmaessigterSatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fNormalerSatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fZwischensatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fLieferschwelle' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cISOLand */
	public $cISOLand;

	/** @var string cKuerzelBundesland */
	public $cKuerzelBundesland;

	/** @var string fStarkErmaessigterSatz */
	public $fStarkErmaessigterSatz;

	/** @var string fErmaessigterSatzNiedrig */
	public $fErmaessigterSatzNiedrig;

	/** @var string fErmaessigterSatz */
	public $fErmaessigterSatz;

	/** @var string fNormalerSatz */
	public $fNormalerSatz;

	/** @var string fZwischensatz */
	public $fZwischensatz;

	/** @var string fLieferschwelle */
	public $fLieferschwelle;
}
