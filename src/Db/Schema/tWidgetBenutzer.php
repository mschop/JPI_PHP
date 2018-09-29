<?php

namespace App\Db\Schema;

class tWidgetBenutzer
{
	const TABLE_NAME = 'tWidgetBenutzer';
	const kWidgetBenutzer = 'kWidgetBenutzer';
	const kWidgetTemplate = 'kWidgetTemplate';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kWidgetBenutzer', 'kWidgetTemplate', 'kBenutzer'];
	const COLUMN_DEFINITIONS = [
		'kWidgetBenutzer' => [
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
	];

	/** @var int kWidgetBenutzer */
	public $kWidgetBenutzer;

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var int kBenutzer */
	public $kBenutzer;
}
