<?php

namespace App\Schema;

class tlagerort
{
	const TABLE_NAME = 'tlagerort';
	const kLagerOrt = 'kLagerOrt';
	const kLager = 'kLager';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kLagerOrt', 'kLager', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kLagerOrt' => 'int', 'kLager' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kLagerOrt */
	public $kLagerOrt;

	/** @var int kLager */
	public $kLager;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
