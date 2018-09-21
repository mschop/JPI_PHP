<?php

namespace App\Schema;

class tInkassoUser
{
	const TABLE_NAME = 'tInkassoUser';
	const kInkassoUser = 'kInkassoUser';
	const cUsername = 'cUsername';
	const cPasswort = 'cPasswort';
	const kFirma = 'kFirma';
	const cAktiv = 'cAktiv';
	const COLUMN_NAMES = ['kInkassoUser', 'cUsername', 'cPasswort', 'kFirma', 'cAktiv'];
	const COLUMN_TYPES = [
		'kInkassoUser' => 'int',
		'cUsername' => 'varchar',
		'cPasswort' => 'varchar',
		'kFirma' => 'int',
		'cAktiv' => 'char',
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
