<?php

namespace App\Schema;

class tRMStatusBerechtigung
{
	const TABLE_NAME = 'tRMStatusBerechtigung';
	const kRMStatus = 'kRMStatus';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const nStatusSetzen = 'nStatusSetzen';
	const nStatusVerlassen = 'nStatusVerlassen';

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int nStatusSetzen */
	public $nStatusSetzen;

	/** @var int nStatusVerlassen */
	public $nStatusVerlassen;
}
