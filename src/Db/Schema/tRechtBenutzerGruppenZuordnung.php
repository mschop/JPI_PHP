<?php

namespace App\Db\Schema;

class tRechtBenutzerGruppenZuordnung
{
	const TABLE_NAME = 'tRechtBenutzerGruppenZuordnung';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kRechtBenutzerGruppe', 'kBenutzer'];
	const COLUMN_DEFINITIONS = [
		'kRechtBenutzerGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int kBenutzer */
	public $kBenutzer;
}
