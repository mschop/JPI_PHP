<?php

namespace App\Db\Schema;

class tWidget
{
	const TABLE_NAME = 'tWidget';
	const kWidget = 'kWidget';
	const kWidgetTemplate = 'kWidgetTemplate';
	const kBenutzer = 'kBenutzer';
	const cTitel = 'cTitel';
	const cArbeitsplatz = 'cArbeitsplatz';
	const nApplikation = 'nApplikation';
	const COLUMN_NAMES = ['kWidget', 'kWidgetTemplate', 'kBenutzer', 'cTitel', 'cArbeitsplatz', 'nApplikation'];
	const COLUMN_DEFINITIONS = [
		'kWidget' => [
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
		'kBenutzer' => [
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

	/** @var int kWidget */
	public $kWidget;

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int nApplikation */
	public $nApplikation;
}
