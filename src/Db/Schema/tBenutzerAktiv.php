<?php

namespace App\Db\Schema;

class tBenutzerAktiv
{
	const TABLE_NAME = 'tBenutzerAktiv';
	const kBenutzerAktiv = 'kBenutzerAktiv';
	const kBenutzer = 'kBenutzer';
	const nApplikation = 'nApplikation';
	const dLetzteAktion = 'dLetzteAktion';
	const cUniqueId = 'cUniqueId';
	const cCustom = 'cCustom';
	const bAbmelden = 'bAbmelden';
	const cRechnername = 'cRechnername';
	const kWarenlager = 'kWarenlager';
	const kMandant = 'kMandant';
	const COLUMN_NAMES = [
		'kBenutzerAktiv',
		'kBenutzer',
		'nApplikation',
		'dLetzteAktion',
		'cUniqueId',
		'cCustom',
		'bAbmelden',
		'cRechnername',
		'kWarenlager',
		'kMandant',
	];
	const COLUMN_DEFINITIONS = [
		'kBenutzerAktiv' => [
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
		'dLetzteAktion' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUniqueId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCustom' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'bAbmelden' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cRechnername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kMandant' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kBenutzerAktiv */
	public $kBenutzerAktiv;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nApplikation */
	public $nApplikation;

	/** @var string dLetzteAktion */
	public $dLetzteAktion;

	/** @var string cUniqueId */
	public $cUniqueId;

	/** @var string cCustom */
	public $cCustom;

	/** @var int bAbmelden */
	public $bAbmelden;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var int kMandant */
	public $kMandant;
}
