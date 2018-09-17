<?php

namespace App\Schema;

class tWidgetSettings
{
	const TABLE_NAME = 'tWidgetSettings';
	const kWidgetSettings = 'kWidgetSettings';
	const kWidget = 'kWidget';
	const cKey = 'cKey';
	const cValue = 'cValue';
	const cArbeitsplatz = 'cArbeitsplatz';
	const nApplikation = 'nApplikation';

	/** @var int kWidgetSettings */
	public $kWidgetSettings;

	/** @var int kWidget */
	public $kWidget;

	/** @var string cKey */
	public $cKey;

	/** @var string cValue */
	public $cValue;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int nApplikation */
	public $nApplikation;
}
