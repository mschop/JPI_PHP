<?php

namespace App\Schema;

class tZustandWarengruppe
{
	const TABLE_NAME = 'tZustandWarengruppe';
	const kZustandWarengruppe = 'kZustandWarengruppe';
	const kZustand = 'kZustand';
	const kWarengruppe = 'kWarengruppe';
	const COLUMN_NAMES = ['kZustandWarengruppe', 'kZustand', 'kWarengruppe'];
	const COLUMN_TYPES = ['kZustandWarengruppe' => 'int', 'kZustand' => 'int', 'kWarengruppe' => 'int'];

	/** @var int kZustandWarengruppe */
	public $kZustandWarengruppe;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
