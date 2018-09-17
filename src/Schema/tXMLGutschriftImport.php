<?php

namespace App\Schema;

class tXMLGutschriftImport
{
	const TABLE_NAME = 'tXMLGutschriftImport';
	const kXMLGutschriftImport = 'kXMLGutschriftImport';
	const cText = 'cText';
	const nPlattform = 'nPlattform';

	/** @var int kXMLGutschriftImport */
	public $kXMLGutschriftImport;

	/** @var string cText */
	public $cText;

	/** @var int nPlattform */
	public $nPlattform;
}
