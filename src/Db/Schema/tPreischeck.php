<?php

namespace App\Db\Schema;

class tPreischeck
{
	const TABLE_NAME = 'tPreischeck';
	const kPreischeck = 'kPreischeck';
	const kArtikel = 'kArtikel';
	const fVersand = 'fVersand';
	const fPreis = 'fPreis';
	const kPlattform = 'kPlattform';
	const cShop = 'cShop';
	const cAngebotsURL = 'cAngebotsURL';
	const cAngebotsname = 'cAngebotsname';
	const cLieferzeit = 'cLieferzeit';
	const nPrime = 'nPrime';
	const dErstellt = 'dErstellt';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const nUploaded = 'nUploaded';
	const COLUMN_NAMES = [
		'kPreischeck',
		'kArtikel',
		'fVersand',
		'fPreis',
		'kPlattform',
		'cShop',
		'cAngebotsURL',
		'cAngebotsname',
		'cLieferzeit',
		'nPrime',
		'dErstellt',
		'cProductId',
		'nProductIdType',
		'nUploaded',
	];
	const COLUMN_DEFINITIONS = [
		'kPreischeck' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kArtikel' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fVersand' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fPreis' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cShop' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAngebotsURL' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAngebotsname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cLieferzeit' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPrime' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
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
		'cProductId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nProductIdType' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nUploaded' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreischeck */
	public $kPreischeck;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string fVersand */
	public $fVersand;

	/** @var string fPreis */
	public $fPreis;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var string cShop */
	public $cShop;

	/** @var string cAngebotsURL */
	public $cAngebotsURL;

	/** @var string cAngebotsname */
	public $cAngebotsname;

	/** @var string cLieferzeit */
	public $cLieferzeit;

	/** @var int nPrime */
	public $nPrime;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cProductId */
	public $cProductId;

	/** @var int nProductIdType */
	public $nProductIdType;

	/** @var int nUploaded */
	public $nUploaded;
}
