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
	const COLUMN_NAMES = ['kWidgetSettings', 'kWidget', 'cKey', 'cValue', 'cArbeitsplatz', 'nApplikation'];
	const COLUMN_TYPES = [
		'kWidgetSettings' => 'int',
		'kWidget' => 'int',
		'cKey' => 'varchar',
		'cValue' => 'varchar',
		'cArbeitsplatz' => 'varchar',
		'nApplikation' => 'int',
	];

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
