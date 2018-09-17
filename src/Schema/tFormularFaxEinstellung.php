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
