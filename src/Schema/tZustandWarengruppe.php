<?php

namespace App\Schema;

class tZustandWarengruppe
{
	const TABLE_NAME = 'tZustandWarengruppe';
	const kZustandWarengruppe = 'kZustandWarengruppe';
	const kZustand = 'kZustand';
	const kWarengruppe = 'kWarengruppe';

	/** @var int kZustandWarengruppe */
	public $kZustandWarengruppe;

	/** @var int kZustand */
	public $kZustand;

	/** @var int kWarengruppe */
	public $kWarengruppe;
}
