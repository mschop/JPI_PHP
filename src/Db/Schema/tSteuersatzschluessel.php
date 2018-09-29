<?php

namespace App\Db\Schema;

class tSteuersatzschluessel
{
	const TABLE_NAME = 'tSteuersatzschluessel';
	const kSteuersatz = 'kSteuersatz';
	const kWarengruppe = 'kWarengruppe';
	const kVersandart = 'kVersandart';
	const nPositionstyp = 'nPositionstyp';
	const kSteuerschluessel = 'kSteuerschluessel';
	const kStSchlIGL = 'kStSchlIGL';
	const kStSchlUStIGL = 'kStSchlUStIGL';
	const COLUMN_NAMES = [
		'kSteuersatz',
		'kWarengruppe',
		'kVersandart',
		'nPositionstyp',
		'kSteuerschluessel',
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
		'kWarengruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandart' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPositionstyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSteuerschluessel' => [
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

	/** @var int kWarengruppe */
	public $kWarengruppe;

	/** @var int kVersandart */
	public $kVersandart;

	/** @var int nPositionstyp */
	public $nPositionstyp;

	/** @var int kSteuerschluessel */
	public $kSteuerschluessel;

	/** @var int kStSchlIGL */
	public $kStSchlIGL;

	/** @var int kStSchlUStIGL */
	public $kStSchlUStIGL;
}
