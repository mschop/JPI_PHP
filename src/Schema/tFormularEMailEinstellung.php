<?php

namespace App\Schema;

class tFormularEMailEinstellung
{
	const TABLE_NAME = 'tFormularEMailEinstellung';
	const kFormularEMailEinstellung = 'kFormularEMailEinstellung';
	const kFormular = 'kFormular';
	const cBcc = 'cBcc';
	const nSignieren = 'nSignieren';

	/** @var int kFormularEMailEinstellung */
	public $kFormularEMailEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cBcc */
	public $cBcc;

	/** @var int nSignieren */
	public $nSignieren;
}
