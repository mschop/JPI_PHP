<?php

namespace App\Schema;

class tFormularFaxEinstellung
{
	const TABLE_NAME = 'tFormularFaxEinstellung';
	const kFormularFaxEinstellung = 'kFormularFaxEinstellung';
	const kFormular = 'kFormular';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const cFaxname = 'cFaxname';
	const COLUMN_NAMES = ['kFormularFaxEinstellung', 'kFormular', 'cRechnername', 'kBenutzer', 'cFaxname'];
	const COLUMN_TYPES = [
		'kFormularFaxEinstellung' => 'int',
		'kFormular' => 'int',
		'cRechnername' => 'varchar',
		'kBenutzer' => 'int',
		'cFaxname' => 'varchar',
	];

	/** @var int kFormularFaxEinstellung */
	public $kFormularFaxEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cFaxname */
	public $cFaxname;
}
