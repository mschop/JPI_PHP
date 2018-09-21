<?php

namespace App\Schema;

class tText
{
	const TABLE_NAME = 'tText';
	const kText = 'kText';
	const cName = 'cName';
	const cText = 'cText';
	const nFontSize = 'nFontSize';
	const cFontName = 'cFontName';
	const cType = 'cType';
	const cAktiv = 'cAktiv';
	const COLUMN_NAMES = ['kText', 'cName', 'cText', 'nFontSize', 'cFontName', 'cType', 'cAktiv'];
	const COLUMN_TYPES = [
		'kText' => 'int',
		'cName' => 'varchar',
		'cText' => 'varchar',
		'nFontSize' => 'tinyint',
		'cFontName' => 'varchar',
		'cType' => 'char',
		'cAktiv' => 'char',
	];

	/** @var int kText */
	public $kText;

	/** @var string cName */
	public $cName;

	/** @var string cText */
	public $cText;

	/** @var int nFontSize */
	public $nFontSize;

	/** @var string cFontName */
	public $cFontName;

	/** @var string cType */
	public $cType;

	/** @var string cAktiv */
	public $cAktiv;
}
