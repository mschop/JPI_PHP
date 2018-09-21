<?php

namespace App\Schema;

class tWidgetBenutzer
{
	const TABLE_NAME = 'tWidgetBenutzer';
	const kWidgetBenutzer = 'kWidgetBenutzer';
	const kWidgetTemplate = 'kWidgetTemplate';
	const kBenutzer = 'kBenutzer';
	const COLUMN_NAMES = ['kWidgetBenutzer', 'kWidgetTemplate', 'kBenutzer'];
	const COLUMN_TYPES = ['kWidgetBenutzer' => 'int', 'kWidgetTemplate' => 'int', 'kBenutzer' => 'int'];

	/** @var int kWidgetBenutzer */
	public $kWidgetBenutzer;

	/** @var int kWidgetTemplate */
	public $kWidgetTemplate;

	/** @var int kBenutzer */
	public $kBenutzer;
}
