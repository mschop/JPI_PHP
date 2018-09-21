<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kRMRetourenEtikett' => 'int',
		'kRMRetoure' => 'int',
		'cIdentCode' => 'varchar',
		'bLabel' => 'image',
		'cHash' => 'varchar',
		'dErstellt' => 'datetime',
		'kVersandArt' => 'int',
		'kBenutzer' => 'int',
		'cVersandArtManuell' => 'varchar',
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
