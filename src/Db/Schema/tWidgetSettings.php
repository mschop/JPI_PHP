<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kWidgetSettings' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWidget' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cKey' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cValue' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cArbeitsplatz' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nApplikation' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
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
