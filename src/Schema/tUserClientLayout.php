<?php

namespace App\Schema;

class tUserClientLayout
{
	const TABLE_NAME = 'tUserClientLayout';
	const kUserClientLayout = 'kUserClientLayout';
	const kBenutzer = 'kBenutzer';
	const cRechnername = 'cRechnername';
	const cName = 'cName';
	const cWert = 'cWert';
	const COLUMN_NAMES = ['kUserClientLayout', 'kBenutzer', 'cRechnername', 'cName', 'cWert'];
	const COLUMN_TYPES = [
		'kUserClientLayout' => 'int',
		'kBenutzer' => 'int',
		'cRechnername' => 'varchar',
		'cName' => 'varchar',
		'cWert' => 'varchar',
	];

	/** @var int kUserClientLayout */
	public $kUserClientLayout;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
