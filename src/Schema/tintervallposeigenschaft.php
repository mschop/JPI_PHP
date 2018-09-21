<?php

namespace App\Schema;

class tintervallposeigenschaft
{
	const TABLE_NAME = 'tintervallposeigenschaft';
	const kIntervallPos = 'kIntervallPos';
	const kBestellEigenschaft = 'kBestellEigenschaft';
	const COLUMN_NAMES = ['kIntervallPos', 'kBestellEigenschaft'];
	const COLUMN_TYPES = ['kIntervallPos' => 'int', 'kBestellEigenschaft' => 'int'];

	/** @var int kIntervallPos */
	public $kIntervallPos;

	/** @var int kBestellEigenschaft */
	public $kBestellEigenschaft;
}
