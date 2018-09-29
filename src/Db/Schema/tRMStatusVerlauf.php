<?php

namespace App\Db\Schema;

class tRMStatusVerlauf
{
	const TABLE_NAME = 'tRMStatusVerlauf';
	const kRMStatusVerlauf = 'kRMStatusVerlauf';
	const kRMRetourePos = 'kRMRetourePos';
	const kRMStatus = 'kRMStatus';
	const cKommentar = 'cKommentar';
	const kBenutzer = 'kBenutzer';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kRMStatusVerlauf', 'kRMRetourePos', 'kRMStatus', 'cKommentar', 'kBenutzer', 'dErstellt'];
	const COLUMN_DEFINITIONS = [
		'kRMStatusVerlauf' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetourePos' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMStatus' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKommentar' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
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
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kRMStatusVerlauf */
	public $kRMStatusVerlauf;

	/** @var int kRMRetourePos */
	public $kRMRetourePos;

	/** @var int kRMStatus */
	public $kRMStatus;

	/** @var string cKommentar */
	public $cKommentar;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dErstellt */
	public $dErstellt;
}
