<?php

namespace App\Db\Schema;

class tRechtBenutzerGruppe
{
	const TABLE_NAME = 'tRechtBenutzerGruppe';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const nIsAdmin = 'nIsAdmin';
	const COLUMN_NAMES = ['kRechtBenutzerGruppe', 'cName', 'cBeschreibung', 'nIsAdmin'];
	const COLUMN_DEFINITIONS = [
		'kRechtBenutzerGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nIsAdmin' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nIsAdmin */
	public $nIsAdmin;
}
