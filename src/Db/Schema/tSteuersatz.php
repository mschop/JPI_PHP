<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kSteuersatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuerzone' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuerklasse' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fSteuersatz' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPrio' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStSchl' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStSchlIGL' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStSchlUStIGL' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
