<?php

namespace App\Schema;

class tPreisExportVorlage
{
	const TABLE_NAME = 'tPreisExportVorlage';
	const kPreisExportVorlage = 'kPreisExportVorlage';
	const cName = 'cName';
	const kPlattform = 'kPlattform';
	const kKundengruppe = 'kKundengruppe';
	const sMapping = 'sMapping';
	const COLUMN_NAMES = ['kPreisExportVorlage', 'cName', 'kPlattform', 'kKundengruppe', 'sMapping'];
	const COLUMN_TYPES = [
		'kPreisExportVorlage' => 'int',
		'cName' => 'varchar',
		'kPlattform' => 'int',
		'kKundengruppe' => 'int',
		'sMapping' => 'varchar',
	];

	/** @var int kPreisExportVorlage */
	public $kPreisExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kKundengruppe */
	public $kKundengruppe;

	/** @var string sMapping */
	public $sMapping;
}
