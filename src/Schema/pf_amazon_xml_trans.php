<?php

namespace App\Schema;

class pf_amazon_xml_trans
{
	const TABLE_NAME = 'pf_amazon_xml_trans';
	const cName = 'cName';
	const cEnglish = 'cEnglish';
	const cGerman = 'cGerman';
	const cFrench = 'cFrench';
	const cItalian = 'cItalian';
	const COLUMN_NAMES = ['cName', 'cEnglish', 'cGerman', 'cFrench', 'cItalian'];
	const COLUMN_TYPES = [
		'cName' => 'varchar',
		'cEnglish' => 'varchar',
		'cGerman' => 'varchar',
		'cFrench' => 'varchar',
		'cItalian' => 'varchar',
	];

	/** @var string cName */
	public $cName;

	/** @var string cEnglish */
	public $cEnglish;

	/** @var string cGerman */
	public $cGerman;

	/** @var string cFrench */
	public $cFrench;

	/** @var string cItalian */
	public $cItalian;
}
