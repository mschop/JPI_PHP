<?php

namespace App\Db\Schema;

class tRechte
{
	const TABLE_NAME = 'tRechte';
	const kRechte = 'kRechte';
	const kRecht = 'kRecht';
	const kRechtBenutzerGruppe = 'kRechtBenutzerGruppe';
	const nAktiv = 'nAktiv';
	const COLUMN_NAMES = ['kRechte', 'kRecht', 'kRechtBenutzerGruppe', 'nAktiv'];
	const COLUMN_DEFINITIONS = [
		'kRechte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRecht' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechtBenutzerGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRechte */
	public $kRechte;

	/** @var int kRecht */
	public $kRecht;

	/** @var int kRechtBenutzerGruppe */
	public $kRechtBenutzerGruppe;

	/** @var int nAktiv */
	public $nAktiv;
}
