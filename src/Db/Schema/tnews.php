<?php

namespace App\Db\Schema;

class tnews
{
	const TABLE_NAME = 'tnews';
	const kNews = 'kNews';
	const dErstellt = 'dErstellt';
	const cBetreff = 'cBetreff';
	const cText = 'cText';
	const cPicture = 'cPicture';
	const cInet = 'cInet';
	const COLUMN_NAMES = ['kNews', 'dErstellt', 'cBetreff', 'cText', 'cPicture', 'cInet'];
	const COLUMN_DEFINITIONS = [
		'kNews' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 12,
			'characterSetName' => 'iso_1',
		],
		'cBetreff' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cText' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cPicture' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cInet' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kNews */
	public $kNews;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cBetreff */
	public $cBetreff;

	/** @var string cText */
	public $cText;

	/** @var string cPicture */
	public $cPicture;

	/** @var string cInet */
	public $cInet;
}
