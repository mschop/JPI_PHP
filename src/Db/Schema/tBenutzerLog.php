<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kBenutzerLog' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nApplikation' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cAktion' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nAktionsTyp' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
