<?php

namespace App\Schema;

class tRechtBenutzerGruppenZuordnung
{
	const TABLE_NAME = 'tRechtBenutzerGruppenZuordnung';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const kBenutzer = 'kBenutzer';

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int kBenutzer */
	public $kBenutzer;
}
