<?php

namespace App\Schema;

class tConnectorKategorieTemp
{
	const TABLE_NAME = 'tConnectorKategorieTemp';
	const cVaterEndpointID = 'cVaterEndpointID';
	const kKindKategorie = 'kKindKategorie';
	const COLUMN_NAMES = ['cVaterEndpointID', 'kKindKategorie'];
	const COLUMN_TYPES = ['cVaterEndpointID' => 'varchar', 'kKindKategorie' => 'int'];

	/** @var string cVaterEndpointID */
	public $cVaterEndpointID;

	/** @var int kKindKategorie */
	public $kKindKategorie;
}
