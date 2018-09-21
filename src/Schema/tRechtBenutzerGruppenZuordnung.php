<?php

namespace App\Schema;

class tRechtBenutzerGruppenZuordnung
{
	const TABLE_NAME = 'tRechtBenutzerGruppenZuordnung';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kRechtBenutzerGruppe', 'kBenutzer'];
	const COLUMN_TYPES = ['kRechtBenutzerGruppe' => 'int', 'kBenutzer' => 'int'];

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int kBenutzer */
	public $kBenutzer;
}
