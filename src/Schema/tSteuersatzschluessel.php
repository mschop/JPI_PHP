<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kSteuersatz' => 'int',
		'kWarengruppe' => 'int',
		'kVersandart' => 'int',
		'nPositionstyp' => 'int',
		'kSteuerschluessel' => 'int',
		'kStSchlIGL' => 'int',
		'kStSchlUStIGL' => 'int',
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
