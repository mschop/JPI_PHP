<?php

namespace App\Schema;

class tRMStatusBerechtigung
{
	const TABLE_NAME = 'tRMStatusBerechtigung';
	const kRMStatus = 'kRMStatus';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const nStatusSetzen = 'nStatusSetzen';
	const nStatusVerlassen = 'nStatusVerlassen';
	const COLUMN_NAMES = ['kRMStatus', 'kRechtBenutzerGruppe', 'nStatusSetzen', 'nStatusVerlassen'];
	const COLUMN_TYPES = [
		'kRMStatus' => 'int',
		'kRechtBenutzerGruppe' => 'int',
		'nStatusSetzen' => 'tinyint',
		'nStatusVerlassen' => 'tinyint',
	];

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int nStatusSetzen */
	public $nStatusSetzen;

	/** @var int nStatusVerlassen */
	public $nStatusVerlassen;
}
