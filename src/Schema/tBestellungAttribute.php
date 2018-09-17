<?php

namespace App\Schema;

class tBestellungAttribute
{
	const TABLE_NAME = 'tBestellungAttribute';
	const kBestellungAttribute = 'kBestellungAttribute';
	const kBestellung = 'kBestellung';
	const cName = 'cName';
	const cValue = 'cValue';

	/** @var int kBestellungAttribute */
	public $kBestellungAttribute;

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
