<?php

namespace App\Db\Schema;

class tWidgetTemplate
{
	const TABLE_NAME = 'tWidgetTemplate';
	const kWidgetTemplate = 'kWidgetTemplate';
	const cTitel = 'cTitel';
	const cBeschreibung = 'cBeschreibung';
	const cKlasse = 'cKlasse';
	const cKategorie = 'cKategorie';
	const COLUMN_NAMES = ['kWidgetTemplate', 'cTitel', 'cBeschreibung', 'cKlasse', 'cKategorie'];
	const COLUMN_DEFINITIONS = [
		'kWidgetTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cTitel' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBeschreibung' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKlasse' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKategorie' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cKlasse */
	public $cKlasse;

	/** @var string cKategorie */
	public $cKategorie;
}
