<?php

namespace App\Db\Schema;

class tRMStatusBerechtigung
{
	const TABLE_NAME = 'tRMStatusBerechtigung';
	const kRMStatus = 'kRMStatus';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const nStatusSetzen = 'nStatusSetzen';
	const nStatusVerlassen = 'nStatusVerlassen';
	const COLUMN_NAMES = ['kRMStatus', 'kRechtBenutzerGruppe', 'nStatusSetzen', 'nStatusVerlassen'];
	const COLUMN_DEFINITIONS = [
		'kRMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechtBenutzerGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusSetzen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatusVerlassen' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
