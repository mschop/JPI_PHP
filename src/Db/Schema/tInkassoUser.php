<?php

namespace App\Db\Schema;

class tInkassoUser
{
	const TABLE_NAME = 'tInkassoUser';
	const kInkassoUser = 'kInkassoUser';
	const cUsername = 'cUsername';
	const cPasswort = 'cPasswort';
	const kFirma = 'kFirma';
	const cAktiv = 'cAktiv';
	const COLUMN_NAMES = ['kInkassoUser', 'cUsername', 'cPasswort', 'kFirma', 'cAktiv'];
	const COLUMN_DEFINITIONS = [
		'kInkassoUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUsername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'cPasswort' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 50,
			'characterSetName' => 'iso_1',
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAktiv' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kInkassoUser */
	public $kInkassoUser;

	/** @var string cUsername */
	public $cUsername;

	/** @var string cPasswort */
	public $cPasswort;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cAktiv */
	public $cAktiv;
}
