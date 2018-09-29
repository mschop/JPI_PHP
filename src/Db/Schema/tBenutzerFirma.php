<?php

namespace App\Db\Schema;

class tBenutzerFirma
{
	const TABLE_NAME = 'tBenutzerFirma';
	const kBenutzer = 'kBenutzer';
	const kFirma = 'kFirma';
	const kMandant = 'kMandant';
	const COLUMN_NAMES = ['kBenutzer', 'kFirma', 'kMandant'];
	const COLUMN_DEFINITIONS = [
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMandant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kMandant */
	public $kMandant;
}
