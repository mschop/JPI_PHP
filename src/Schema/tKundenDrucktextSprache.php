<?php

namespace App\Schema;

class tKundenDrucktextSprache
{
	const TABLE_NAME = 'tKundenDrucktextSprache';
	const kKundenDrucktext = 'kKundenDrucktext';
	const kSprache = 'kSprache';
	const cRechnungstext = 'cRechnungstext';
	const cAuftragstext = 'cAuftragstext';
	const cAngebotstext = 'cAngebotstext';
	const cGutschrifttext = 'cGutschrifttext';
	const cLieferscheintext = 'cLieferscheintext';
	const COLUMN_NAMES = [
		'kKundenDrucktext',
		'kSprache',
		'cRechnungstext',
		'cAuftragstext',
		'cAngebotstext',
		'cGutschrifttext',
		'cLieferscheintext',
	];
	const COLUMN_TYPES = [
		'kKundenDrucktext' => 'int',
		'kSprache' => 'int',
		'cRechnungstext' => 'varchar',
		'cAuftragstext' => 'varchar',
		'cAngebotstext' => 'varchar',
		'cGutschrifttext' => 'varchar',
		'cLieferscheintext' => 'varchar',
	];

	/** @var int kKundenDrucktext */
	public $kKundenDrucktext;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cRechnungstext */
	public $cRechnungstext;

	/** @var string cAuftragstext */
	public $cAuftragstext;

	/** @var string cAngebotstext */
	public $cAngebotstext;

	/** @var string cGutschrifttext */
	public $cGutschrifttext;

	/** @var string cLieferscheintext */
	public $cLieferscheintext;
}
