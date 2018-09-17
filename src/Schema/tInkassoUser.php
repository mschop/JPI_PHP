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
