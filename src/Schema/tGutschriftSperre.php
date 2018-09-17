<?php

namespace App\Schema;

class tGutschriftSperre
{
	const TABLE_NAME = 'tGutschriftSperre';
	const kGutschrift = 'kGutschrift';
	const cName = 'cName';

	/** @var int kGutschrift */
	public $kGutschrift;

	/** @var string cName */
	public $cName;
}
