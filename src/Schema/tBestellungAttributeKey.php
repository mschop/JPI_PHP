<?php

namespace App\Schema;

class tBestellungAttributeKey
{
	const TABLE_NAME = 'tBestellungAttributeKey';
	const kBestellungAttributeKey = 'kBestellungAttributeKey';
	const cName = 'cName';
	const COLUMN_NAMES = ['kBestellungAttributeKey', 'cName'];
	const COLUMN_TYPES = ['kBestellungAttributeKey' => 'int', 'cName' => 'varchar'];

	/** @var int kBestellungAttributeKey */
	public $kBestellungAttributeKey;

	/** @var string cName */
	public $cName;
}
