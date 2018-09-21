<?php

namespace App\Schema;

class tBestandsAbgleich
{
	const TABLE_NAME = 'tBestandsAbgleich';
	const cJfpid = 'cJfpid';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';
	const fBestandReserviert = 'fBestandReserviert';
	const COLUMN_NAMES = ['cJfpid', 'kWarenlager', 'fBestand', 'fBestandReserviert'];
	const COLUMN_TYPES = [
		'cJfpid' => 'varchar',
		'kWarenlager' => 'int',
		'fBestand' => 'decimal',
		'fBestandReserviert' => 'decimal',
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
