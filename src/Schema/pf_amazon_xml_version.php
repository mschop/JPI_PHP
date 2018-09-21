<?php

namespace App\Schema;

class pf_amazon_xml_version
{
	const TABLE_NAME = 'pf_amazon_xml_version';
	const nVersion = 'nVersion';
	const nSQLKorrekt = 'nSQLKorrekt';
	const COLUMN_NAMES = ['nVersion', 'nSQLKorrekt'];
	const COLUMN_TYPES = ['nVersion' => 'int', 'nSQLKorrekt' => 'int'];

	/** @var int nVersion */
	public $nVersion;

	/** @var int nSQLKorrekt */
	public $nSQLKorrekt;
}
