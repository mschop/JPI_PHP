<?php

namespace App\Schema;

class tBenutzerLog
{
	const TABLE_NAME = 'tBenutzerLog';
	const kBenutzerLog = 'kBenutzerLog';
	const kBenutzer = 'kBenutzer';
	const nApplikation = 'nApplikation';
	const dZeitstempel = 'dZeitstempel';
	const cAktion = 'cAktion';
	const nAktionsTyp = 'nAktionsTyp';
	const COLUMN_NAMES = ['kBenutzerLog', 'kBenutzer', 'nApplikation', 'dZeitstempel', 'cAktion', 'nAktionsTyp'];
	const COLUMN_TYPES = [
		'kBenutzerLog' => 'int',
		'kBenutzer' => 'int',
		'nApplikation' => 'int',
		'dZeitstempel' => 'datetime',
		'cAktion' => 'varchar',
		'nAktionsTyp' => 'int',
	];

	/** @var int kBenutzerLog */
	public $kBenutzerLog;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nApplikation */
	public $nApplikation;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var string cAktion */
	public $cAktion;

	/** @var int nAktionsTyp */
	public $nAktionsTyp;
}
