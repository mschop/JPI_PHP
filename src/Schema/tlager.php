<?php

namespace App\Schema;

class tlager
{
	const TABLE_NAME = 'tlager';
	const kLager = 'kLager';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kLager', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kLager' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kLager */
	public $kLager;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
