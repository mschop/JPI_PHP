<?php

namespace App\Schema;

class ameise_importdurchgang
{
	const TABLE_NAME = 'ameise_importdurchgang';
	const kImportDurchgang = 'kImportDurchgang';
	const dErstellt = 'dErstellt';
	const COLUMN_NAMES = ['kImportDurchgang', 'dErstellt'];
	const COLUMN_TYPES = ['kImportDurchgang' => 'int', 'dErstellt' => 'datetime'];

	/** @var int kImportDurchgang */
	public $kImportDurchgang;

	/** @var string dErstellt */
	public $dErstellt;
}
