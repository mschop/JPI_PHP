<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'cISOLand' => 'varchar',
		'cKuerzelBundesland' => 'varchar',
		'fStarkErmaessigterSatz' => 'decimal',
		'fErmaessigterSatzNiedrig' => 'decimal',
		'fErmaessigterSatz' => 'decimal',
		'fNormalerSatz' => 'decimal',
		'fZwischensatz' => 'decimal',
		'fLieferschwelle' => 'decimal',
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
