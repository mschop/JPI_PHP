<?php

namespace App\Schema;

class tFormularEMailEinstellung
{
	const TABLE_NAME = 'tFormularEMailEinstellung';
	const kFormularEMailEinstellung = 'kFormularEMailEinstellung';
	const kFormular = 'kFormular';
	const cBcc = 'cBcc';
	const nSignieren = 'nSignieren';
	const COLUMN_NAMES = ['kFormularEMailEinstellung', 'kFormular', 'cBcc', 'nSignieren'];
	const COLUMN_TYPES = [
		'kFormularEMailEinstellung' => 'int',
		'kFormular' => 'int',
		'cBcc' => 'varchar',
		'nSignieren' => 'tinyint',
	];

	/** @var int kFormularEMailEinstellung */
	public $kFormularEMailEinstellung;

	/** @var int kFormular */
	public $kFormular;

	/** @var string cBcc */
	public $cBcc;

	/** @var int nSignieren */
	public $nSignieren;
}
