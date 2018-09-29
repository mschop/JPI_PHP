<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kWidgetTemplateSettings',
		'kWidgetTemplate',
		'cTitel',
		'cBeschreibung',
		'nType',
		'cKey',
		'cValue',
		'nSort',
	];
	const COLUMN_DEFINITIONS = [
		'kWidgetTemplateSettings' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kWidgetTemplate' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
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
		'nType' => [
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
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'nSort' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
