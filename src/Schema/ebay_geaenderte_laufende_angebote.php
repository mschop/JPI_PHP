<?php

namespace App\Schema;

class ebay_geaenderte_laufende_angebote
{
	const TABLE_NAME = 'ebay_geaenderte_laufende_angebote';
	const kItem = 'kItem';
	const nChanges = 'nChanges';
	const nTryUpload = 'nTryUpload';

	/** @var int kItem */
	public $kItem;

	/** @var int nChanges */
	public $nChanges;

	/** @var int nTryUpload */
	public $nTryUpload;
}
