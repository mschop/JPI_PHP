<?php

namespace App\Db\Schema;

class tBestellHinweis
{
	const TABLE_NAME = 'tBestellHinweis';
	const kBestellHinweis = 'kBestellHinweis';
	const cText = 'cText';
	const COLUMN_NAMES = ['kBestellHinweis', 'cText'];
	const COLUMN_DEFINITIONS = [
		'kBestellHinweis' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var string cText */
	public $cText;
}
