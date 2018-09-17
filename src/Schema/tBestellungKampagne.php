<?php

namespace App\Schema;

class tBestellungKampagne
{
	const TABLE_NAME = 'tBestellungKampagne';
	const kBestellung = 'kBestellung';
	const cKampagne = 'cKampagne';
	const cKampagneWert = 'cKampagneWert';
	const cUserAgent = 'cUserAgent';
	const cGeraet = 'cGeraet';

	/** @var int kBestellung */
	public $kBestellung;

	/** @var string cKampagne */
	public $cKampagne;

	/** @var string cKampagneWert */
	public $cKampagneWert;

	/** @var string cUserAgent */
	public $cUserAgent;

	/** @var string cGeraet */
	public $cGeraet;
}
