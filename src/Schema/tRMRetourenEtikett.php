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
