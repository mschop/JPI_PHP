<?php

namespace App\Db\Schema;

class tWarenlagerOptionenArtikelbild
{
	const TABLE_NAME = 'tWarenlagerOptionenArtikelbild';
	const kWarenlagerOptionenArtikelbild = 'kWarenlagerOptionenArtikelbild';
	const nSort = 'nSort';
	const cName = 'cName';
	const cCustomName = 'cCustomName';
	const COLUMN_NAMES = ['kWarenlagerOptionenArtikelbild', 'nSort', 'cName', 'cCustomName'];
	const COLUMN_DEFINITIONS = [
		'kWarenlagerOptionenArtikelbild' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCustomName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWarenlagerOptionenArtikelbild */
	public $kWarenlagerOptionenArtikelbild;

	/** @var int nSort */
	public $nSort;

	/** @var string cName */
	public $cName;

	/** @var string cCustomName */
	public $cCustomName;
}
