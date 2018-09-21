<?php

namespace App\Schema;

class tbenutzerrechte
{
	const TABLE_NAME = 'tbenutzerrechte';
	const kBenutzerRechte = 'kBenutzerRechte';
	const kBenutzer = 'kBenutzer';
	const nRechte = 'nRechte';
	const COLUMN_NAMES = ['kBenutzerRechte', 'kBenutzer', 'nRechte'];
	const COLUMN_TYPES = ['kBenutzerRechte' => 'int', 'kBenutzer' => 'int', 'nRechte' => 'int'];

	/** @var int kBenutzerRechte */
	public $kBenutzerRechte;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nRechte */
	public $nRechte;
}
