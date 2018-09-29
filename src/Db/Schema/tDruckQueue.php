<?php

namespace App\Db\Schema;

class tDruckQueue
{
	const TABLE_NAME = 'tDruckQueue';
	const kDruckQueue = 'kDruckQueue';
	const dZeitstempel = 'dZeitstempel';
	const kBenutzer = 'kBenutzer';
	const nStatus = 'nStatus';
	const kLHM = 'kLHM';
	const kWarenlagerPlatz = 'kWarenlagerPlatz';
	const COLUMN_NAMES = ['kDruckQueue', 'dZeitstempel', 'kBenutzer', 'nStatus', 'kLHM', 'kWarenlagerPlatz'];
	const COLUMN_DEFINITIONS = [
		'kDruckQueue' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dZeitstempel' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nStatus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kLHM' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWarenlagerPlatz' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kDruckQueue */
	public $kDruckQueue;

	/** @var string dZeitstempel */
	public $dZeitstempel;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nStatus */
	public $nStatus;

	/** @var int kLHM */
	public $kLHM;

	/** @var int kWarenlagerPlatz */
	public $kWarenlagerPlatz;
}
