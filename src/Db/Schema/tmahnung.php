<?php

namespace App\Db\Schema;

class tmahnung
{
	const TABLE_NAME = 'tmahnung';
	const kMahnung = 'kMahnung';
	const kRechnung = 'kRechnung';
	const kKunde = 'kKunde';
	const cKurzText = 'cKurzText';
	const cAnrede = 'cAnrede';
	const cText = 'cText';
	const fBruttoBetrag = 'fBruttoBetrag';
	const dErstellt = 'dErstellt';
	const nStuffe = 'nStuffe';
	const kSprache = 'kSprache';
	const kBenutzer = 'kBenutzer';
	const kFirma = 'kFirma';
	const COLUMN_NAMES = [
		'kMahnung',
		'kRechnung',
		'kKunde',
		'cKurzText',
		'cAnrede',
		'cText',
		'fBruttoBetrag',
		'dErstellt',
		'nStuffe',
		'kSprache',
		'kBenutzer',
		'kFirma',
	];
	const COLUMN_DEFINITIONS = [
		'kMahnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKunde' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKurzText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAnrede' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'fBruttoBetrag' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStuffe' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kSprache' => [
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
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kMahnung */
	public $kMahnung;

	/** @var int kRechnung */
	public $kRechnung;

	/** @var int kKunde */
	public $kKunde;

	/** @var string cKurzText */
	public $cKurzText;

	/** @var string cAnrede */
	public $cAnrede;

	/** @var string cText */
	public $cText;

	/** @var string fBruttoBetrag */
	public $fBruttoBetrag;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int nStuffe */
	public $nStuffe;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kFirma */
	public $kFirma;
}
