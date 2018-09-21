<?php

namespace App\Schema;

class tSteuerSammelkonten
{
	const TABLE_NAME = 'tSteuerSammelkonten';
	const kSteuerSammelkonten = 'kSteuerSammelkonten';
	const cName = 'cName';
	const cSammelkonto = 'cSammelkonto';
	const COLUMN_NAMES = ['kSteuerSammelkonten', 'cName', 'cSammelkonto'];
	const COLUMN_TYPES = ['kSteuerSammelkonten' => 'int', 'cName' => 'varchar', 'cSammelkonto' => 'varchar'];

	/** @var int kSteuerSammelkonten */
	public $kSteuerSammelkonten;

	/** @var string cName */
	public $cName;

	/** @var string cSammelkonto */
	public $cSammelkonto;
}
