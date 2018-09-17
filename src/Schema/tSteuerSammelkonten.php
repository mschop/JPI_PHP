<?php

namespace App\Schema;

class tSteuerSammelkonten
{
	const TABLE_NAME = 'tSteuerSammelkonten';
	const kSteuerSammelkonten = 'kSteuerSammelkonten';
	const cName = 'cName';
	const cSammelkonto = 'cSammelkonto';

	/** @var int kSteuerSammelkonten */
	public $kSteuerSammelkonten;

	/** @var string cName */
	public $cName;

	/** @var string cSammelkonto */
	public $cSammelkonto;
}
