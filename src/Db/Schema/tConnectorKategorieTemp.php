<?php

namespace App\Db\Schema;

class tConnectorKategorieTemp
{
	const TABLE_NAME = 'tConnectorKategorieTemp';
	const cVaterEndpointID = 'cVaterEndpointID';
	const kKindKategorie = 'kKindKategorie';
	const COLUMN_NAMES = ['cVaterEndpointID', 'kKindKategorie'];
	const COLUMN_DEFINITIONS = [
		'cVaterEndpointID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
		'kKindKategorie' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var string cVaterEndpointID */
	public $cVaterEndpointID;

	/** @var int kKindKategorie */
	public $kKindKategorie;
}
