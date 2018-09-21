<?php

namespace App\Schema;

class tFormularLLVorlageDaten
{
	const TABLE_NAME = 'tFormularLLVorlageDaten';
	const kFormularLLVorlageDaten = 'kFormularLLVorlageDaten';
	const dAktualisiert = 'dAktualisiert';
	const bDaten = 'bDaten';
	const COLUMN_NAMES = ['kFormularLLVorlageDaten', 'dAktualisiert', 'bDaten'];
	const COLUMN_TYPES = ['kFormularLLVorlageDaten' => 'int', 'dAktualisiert' => 'datetime', 'bDaten' => 'varbinary'];

	/** @var int kFormularLLVorlageDaten */
	public $kFormularLLVorlageDaten;

	/** @var string dAktualisiert */
	public $dAktualisiert;

	/** @var resource bDaten */
	public $bDaten;
}
