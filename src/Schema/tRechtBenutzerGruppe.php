<?php

namespace App\Schema;

class tRechtBenutzerGruppe
{
	const TABLE_NAME = 'tRechtBenutzerGruppe';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nIsAdmin = 'nIsAdmin';

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nIsAdmin */
	public $nIsAdmin;
}
