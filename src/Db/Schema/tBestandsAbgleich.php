<?php

namespace App\Db\Schema;

class tBestandsAbgleich
{
	const TABLE_NAME = 'tBestandsAbgleich';
	const cJfpid = 'cJfpid';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';
	const fBestandReserviert = 'fBestandReserviert';
	const COLUMN_NAMES = ['cJfpid', 'kWarenlager', 'fBestand', 'fBestandReserviert'];
	const COLUMN_DEFINITIONS = [
		'cJfpid' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBestand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fBestandReserviert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cJfpid */
	public $cJfpid;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string fBestand */
	public $fBestand;

	/** @var string fBestandReserviert */
	public $fBestandReserviert;
}
