<?php

namespace App\Schema;

class tBestandsAbgleich
{
	const TABLE_NAME = 'tBestandsAbgleich';
	const cJfpid = 'cJfpid';
	const kWarenlager = 'kWarenlager';
	const fBestand = 'fBestand';
	const fBestandReserviert = 'fBestandReserviert';

	/** @var string cJfpid */
	public $cJfpid;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string fBestand */
	public $fBestand;

	/** @var string fBestandReserviert */
	public $fBestandReserviert;
}
