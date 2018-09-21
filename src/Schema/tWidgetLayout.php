<?php

namespace App\Schema;

class tWidgetLayout
{
	const TABLE_NAME = 'tWidgetLayout';
	const kWidgetLayout = 'kWidgetLayout';
	const kBenutzer = 'kBenutzer';
	const cLayout = 'cLayout';
	const cArbeitsplatz = 'cArbeitsplatz';
	const nApplikation = 'nApplikation';
	const COLUMN_NAMES = ['kWidgetLayout', 'kBenutzer', 'cLayout', 'cArbeitsplatz', 'nApplikation'];
	const COLUMN_TYPES = [
		'kWidgetLayout' => 'int',
		'kBenutzer' => 'int',
		'cLayout' => 'varchar',
		'cArbeitsplatz' => 'varchar',
		'nApplikation' => 'int',
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
