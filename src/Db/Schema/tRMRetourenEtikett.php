<?php

namespace App\Db\Schema;

class tRMRetourenEtikett
{
	const TABLE_NAME = 'tRMRetourenEtikett';
	const kRMRetourenEtikett = 'kRMRetourenEtikett';
	const kRMRetoure = 'kRMRetoure';
	const cIdentCode = 'cIdentCode';
	const bLabel = 'bLabel';
	const cHash = 'cHash';
	const dErstellt = 'dErstellt';
	const kVersandArt = 'kVersandArt';
	const kBenutzer = 'kBenutzer';
	const cVersandArtManuell = 'cVersandArtManuell';
	const COLUMN_NAMES = [
		'kRMRetourenEtikett',
		'kRMRetoure',
		'cIdentCode',
		'bLabel',
		'cHash',
		'dErstellt',
		'kVersandArt',
		'kBenutzer',
		'cVersandArtManuell',
	];
	const COLUMN_DEFINITIONS = [
		'kRMRetourenEtikett' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kRMRetoure' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cIdentCode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'bLabel' => [
			'type' => 'image',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 2147483647,
			'characterSetName' => null,
		],
		'cHash' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kVersandArt' => [
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
		'cVersandArtManuell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kRMRetourenEtikett */
	public $kRMRetourenEtikett;

	/** @var int kRMRetoure */
	public $kRMRetoure;

	/** @var string cIdentCode */
	public $cIdentCode;

	/** @var resource bLabel */
	public $bLabel;

	/** @var string cHash */
	public $cHash;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kVersandArt */
	public $kVersandArt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cVersandArtManuell */
	public $cVersandArtManuell;
}
