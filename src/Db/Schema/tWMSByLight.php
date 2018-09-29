<?php

namespace App\Db\Schema;

class tWMSByLight
{
	const TABLE_NAME = 'tWMSByLight';
	const kWMSByLight = 'kWMSByLight';
	const cId = 'cId';
	const kBenutzer = 'kBenutzer';
	const kWarenlager = 'kWarenlager';
	const dZeitstempel = 'dZeitstempel';
	const nTyp = 'nTyp';
	const nAktiv = 'nAktiv';
	const cArbeitsPlatz = 'cArbeitsPlatz';
	const kPickliste = 'kPickliste';
	const fPickAnzahl = 'fPickAnzahl';
	const COLUMN_NAMES = [
		'kWMSByLight',
		'cId',
		'kBenutzer',
		'kWarenlager',
		'dZeitstempel',
		'nTyp',
		'nAktiv',
		'cArbeitsPlatz',
		'kPickliste',
		'fPickAnzahl',
	];
	const COLUMN_DEFINITIONS = [
		'kWMSByLight' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 20,
			'characterSetName' => 'iso_1',
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nTyp' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cArbeitsPlatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 200,
			'characterSetName' => 'iso_1',
		],
		'kPickliste' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPickAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kWMSByLight */
	public $kWMSByLight;

	/** @var string cId */
	public $cId;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kWarenlager */
	public $kWarenlager;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int nTyp */
	public $nTyp;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var string cArbeitsPlatz */
	public $cArbeitsPlatz;

	/** @var int kPickliste */
	public $kPickliste;

	/** @var string fPickAnzahl */
	public $fPickAnzahl;
}
