<?php

namespace App\Db\Schema;

class tWidgetLayout
{
	const TABLE_NAME = 'tWidgetLayout';
	const kWidgetLayout = 'kWidgetLayout';
	const kBenutzer = 'kBenutzer';
	const cLayout = 'cLayout';
	const cArbeitsplatz = 'cArbeitsplatz';
	const nApplikation = 'nApplikation';
	const COLUMN_NAMES = ['kWidgetLayout', 'kBenutzer', 'cLayout', 'cArbeitsplatz', 'nApplikation'];
	const COLUMN_DEFINITIONS = [
		'kWidgetLayout' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
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
		'cLayout' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
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

	/** @var int kWidgetLayout */
	public $kWidgetLayout;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cLayout */
	public $cLayout;

	/** @var string cArbeitsplatz */
	public $cArbeitsplatz;

	/** @var int nApplikation */
	public $nApplikation;
}
