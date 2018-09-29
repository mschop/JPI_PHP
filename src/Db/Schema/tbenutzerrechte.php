<?php

namespace App\Db\Schema;

class tbenutzerrechte
{
	const TABLE_NAME = 'tbenutzerrechte';
	const kBenutzerRechte = 'kBenutzerRechte';
	const kBenutzer = 'kBenutzer';
	const nRechte = 'nRechte';
	const COLUMN_NAMES = ['kBenutzerRechte', 'kBenutzer', 'nRechte'];
	const COLUMN_DEFINITIONS = [
		'kBenutzerRechte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nRechte' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzerRechte */
	public $kBenutzerRechte;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nRechte */
	public $nRechte;
}
