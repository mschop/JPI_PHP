<?php

namespace App\Schema;

class tSteuerzone
{
	const TABLE_NAME = 'tSteuerzone';
	const kSteuerzone = 'kSteuerzone';
	const kFirma = 'kFirma';
	const cName = 'cName';
	const cLandISO = 'cLandISO';

	/** @var int kSteuerzone */
	public $kSteuerzone;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cName */
	public $cName;

	/** @var string cLandISO */
	public $cLandISO;
}
