<?php

namespace App\Schema;

class tbenutzerrechte
{
	const TABLE_NAME = 'tbenutzerrechte';
	const kBenutzerRechte = 'kBenutzerRechte';
	const kBenutzer = 'kBenutzer';
	const nRechte = 'nRechte';

	/** @var int kBenutzerRechte */
	public $kBenutzerRechte;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nRechte */
	public $nRechte;
}
