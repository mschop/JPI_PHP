<?php

namespace App\Schema;

class tWidgetTemplate
{
	const TABLE_NAME = 'tWidgetTemplate';
	const kWidgetTemplate = 'kWidgetTemplate';
	const cTitel = 'cTitel';
	const cBeschreibung = 'cBeschreibung';
	const cKlasse = 'cKlasse';
	const cKategorie = 'cKategorie';
	const COLUMN_NAMES = ['kWidgetTemplate', 'cTitel', 'cBeschreibung', 'cKlasse', 'cKategorie'];
	const COLUMN_TYPES = [
		'kWidgetTemplate' => 'int',
		'cTitel' => 'varchar',
		'cBeschreibung' => 'varchar',
		'cKlasse' => 'varchar',
		'cKategorie' => 'varchar',
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
