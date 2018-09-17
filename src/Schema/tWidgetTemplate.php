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
