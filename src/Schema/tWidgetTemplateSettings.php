<?php

namespace App\Schema;

class tWidgetTemplateSettings
{
	const TABLE_NAME = 'tWidgetTemplateSettings';
	const kWidgetTemplateSettings = 'kWidgetTemplateSettings';
	const kWidgetTemplate = 'kWidgetTemplate';
	const cTitel = 'cTitel';
	const cBeschreibung = 'cBeschreibung';
	const nType = 'nType';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const nSort = 'nSort';

	/** @var int kWidgetTemplateSettings */
	public $kWidgetTemplateSettings;

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int nType */
	public $nType;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;

	/** @var int nSort */
	public $nSort;
}
