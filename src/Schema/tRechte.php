<?php

namespace App\Schema;

class tRechte
{
	const TABLE_NAME = 'tRechte';
	const kRechte = 'kRechte';
	const kRecht = 'kRecht';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['kRechte', 'kRecht', 'kRechtBenutzerGruppe', 'nAktiv'];
	const COLUMN_TYPES = ['kRechte' => 'int', 'kRecht' => 'int', 'kRechtBenutzerGruppe' => 'int', 'nAktiv' => 'int'];

	/** @var int kRechte */
	public $kRechte;

	/** @var int kRecht */
	public $kRecht;

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int nAktiv */
	public $nAktiv;
}
