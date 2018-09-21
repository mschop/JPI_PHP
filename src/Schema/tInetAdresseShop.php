<?php

namespace App\Schema;

class tInetAdresseShop
{
	const TABLE_NAME = 'tInetAdresseShop';
	const kInetAdresse = 'kInetAdresse';
	const kShop = 'kShop';
	const kAdresse = 'kAdresse';
	const COLUMN_NAMES = ['kInetAdresse', 'kShop', 'kAdresse'];
	const COLUMN_TYPES = ['kInetAdresse' => 'int', 'kShop' => 'int', 'kAdresse' => 'int'];

	/** @var int kInetAdresse */
	public $kInetAdresse;

	/** @var int kShop */
	public $kShop;

	/** @var int kAdresse */
	public $kAdresse;
}
