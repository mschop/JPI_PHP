<?php

namespace App\Schema;

class tWarenlagerOptionenArtikelbild
{
	const TABLE_NAME = 'tWarenlagerOptionenArtikelbild';
	const kWarenlagerOptionenArtikelbild = 'kWarenlagerOptionenArtikelbild';
	const nSort = 'nSort';
	const cName = 'cName';
	const cCustomName = 'cCustomName';
	const COLUMN_NAMES = ['kWarenlagerOptionenArtikelbild', 'nSort', 'cName', 'cCustomName'];
	const COLUMN_TYPES = [
		'kWarenlagerOptionenArtikelbild' => 'int',
		'nSort' => 'int',
		'cName' => 'varchar',
		'cCustomName' => 'varchar',
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
