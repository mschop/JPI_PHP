<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kNews' => 'int',
		'dErstellt' => 'varchar',
		'cBetreff' => 'varchar',
		'cText' => 'varchar',
		'cPicture' => 'varchar',
		'cInet' => 'char',
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
