<?php

namespace App\Schema;

class tVersandartSprache
{
	const TABLE_NAME = 'tVersandartSprache';
	const kVersandart = 'kVersandart';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cDruckText = 'cDruckText';
	const cAuftragsText = 'cAuftragsText';
	const COLUMN_NAMES = ['kVersandart', 'kSprache', 'cName', 'cDruckText', 'cAuftragsText'];
	const COLUMN_TYPES = [
		'kVersandart' => 'int',
		'kSprache' => 'int',
		'cName' => 'varchar',
		'cDruckText' => 'varchar',
		'cAuftragsText' => 'varchar',
	];

	/** @var int kVersandart */
	public $kVersandart;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cDruckText */
	public $cDruckText;

	/** @var string cAuftragsText */
	public $cAuftragsText;
}
