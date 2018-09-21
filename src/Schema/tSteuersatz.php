<?php

namespace App\Schema;

class tSteuersatz
{
	const TABLE_NAME = 'tSteuersatz';
	const kSteuersatz = 'kSteuersatz';
	const kSteuerzone = 'kSteuerzone';
	const kSteuerklasse = 'kSteuerklasse';
	const fSteuersatz = 'fSteuersatz';
	const nPrio = 'nPrio';
	const kStSchl = 'kStSchl';
	const kStSchlIGL = 'kStSchlIGL';
	const kStSchlUStIGL = 'kStSchlUStIGL';
	const COLUMN_NAMES = [
		'kSteuersatz',
		'kSteuerzone',
		'kSteuerklasse',
		'fSteuersatz',
		'nPrio',
		'kStSchl',
		'kStSchlIGL',
		'kStSchlUStIGL',
	];
	const COLUMN_TYPES = [
		'kSteuersatz' => 'int',
		'kSteuerzone' => 'int',
		'kSteuerklasse' => 'int',
		'fSteuersatz' => 'decimal',
		'nPrio' => 'tinyint',
		'kStSchl' => 'int',
		'kStSchlIGL' => 'int',
		'kStSchlUStIGL' => 'int',
	];

	/** @var int kSteuersatz */
	public $kSteuersatz;

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var int kSteuerklasse */
	public $kSteuerklasse;

	/** @var string fSteuersatz */
	public $fSteuersatz;

	/** @var int nPrio */
	public $nPrio;

	/** @var int kStSchl */
	public $kStSchl;

	/** @var int kStSchlIGL */
	public $kStSchlIGL;

	/** @var int kStSchlUStIGL */
	public $kStSchlUStIGL;
}
