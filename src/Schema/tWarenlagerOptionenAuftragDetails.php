<?php

namespace App\Schema;

class tWarenlagerOptionenAuftragDetails
{
	const TABLE_NAME = 'tWarenlagerOptionenAuftragDetails';
	const kWarenlagerOptionenAuftragDetails = 'kWarenlagerOptionenAuftragDetails';
	const nSort = 'nSort';
	const cName = 'cName';
	const cCustomName = 'cCustomName';
	const COLUMN_NAMES = ['kWarenlagerOptionenAuftragDetails', 'nSort', 'cName', 'cCustomName'];
	const COLUMN_TYPES = [
		'kWarenlagerOptionenAuftragDetails' => 'int',
		'nSort' => 'int',
		'cName' => 'varchar',
		'cCustomName' => 'varchar',
	];

	/** @var int kWarenlagerOptionenAuftragDetails */
	public $kWarenlagerOptionenAuftragDetails;

	/** @var int nSort */
	public $nSort;

	/** @var string cName */
	public $cName;

	/** @var string cCustomName */
	public $cCustomName;
}
