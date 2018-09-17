<?php

namespace App\Schema;

class tInetBestellungAttribute
{
	const TABLE_NAME = 'tInetBestellungAttribute';
	const kInetBestellungAttribute = 'kInetBestellungAttribute';
	const kInetBestellung = 'kInetBestellung';
	const kShop = 'kShop';
	const cName = 'cName';
	const cValue = 'cValue';

	/** @var int kInetBestellungAttribute */
	public $kInetBestellungAttribute;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cValue */
	public $cValue;
}
