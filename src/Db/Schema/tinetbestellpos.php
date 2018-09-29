<?php

namespace App\Db\Schema;

class tinetbestellpos
{
	const TABLE_NAME = 'tinetbestellpos';
	const kInetBestellPos = 'kInetBestellPos';
	const kInetBestellung = 'kInetBestellung';
	const kArikel = 'kArikel';
	const fPreis = 'fPreis';
	const fMwSt = 'fMwSt';
	const nAnzahl = 'nAnzahl';
	const cName = 'cName';
	const kShop = 'kShop';
	const nType = 'nType';
	const cHinweis = 'cHinweis';
	const nHatUpload = 'nHatUpload';
	const cUnique = 'cUnique';
	const kKonfigitem = 'kKonfigitem';
	const COLUMN_NAMES = [
		'kInetBestellPos',
		'kInetBestellung',
		'kArikel',
		'fPreis',
		'fMwSt',
		'nAnzahl',
		'cName',
		'kShop',
		'nType',
		'cHinweis',
		'nHatUpload',
		'cUnique',
		'kKonfigitem',
	];
	const COLUMN_DEFINITIONS = [
		'kInetBestellPos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kInetBestellung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fMwSt' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nType' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cHinweis' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2000,
			'characterSetName' => 'iso_1',
		],
		'nHatUpload' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cUnique' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'kKonfigitem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kInetBestellPos */
	public $kInetBestellPos;

	/** @var int kInetBestellung */
	public $kInetBestellung;

	/** @var int kArikel */
	public $kArikel;

	/** @var string fPreis */
	public $fPreis;

	/** @var string fMwSt */
	public $fMwSt;

	/** @var string nAnzahl */
	public $nAnzahl;

	/** @var string cName */
	public $cName;

	/** @var int kShop */
	public $kShop;

	/** @var int nType */
	public $nType;

	/** @var string cHinweis */
	public $cHinweis;

	/** @var int nHatUpload */
	public $nHatUpload;

	/** @var string cUnique */
	public $cUnique;

	/** @var int kKonfigitem */
	public $kKonfigitem;
}
