<?php

namespace App\Schema;

class tBestellHinweis
{
	const TABLE_NAME = 'tBestellHinweis';
	const kBestellHinweis = 'kBestellHinweis';
	const cText = 'cText';
	const COLUMN_NAMES = ['kBestellHinweis', 'cText'];
	const COLUMN_TYPES = ['kBestellHinweis' => 'int', 'cText' => 'varchar'];

	/** @var int kBestellHinweis */
	public $kBestellHinweis;

	/** @var string cText */
	public $cText;
}
