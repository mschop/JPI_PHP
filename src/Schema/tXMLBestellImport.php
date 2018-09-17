<?php

namespace App\Schema;

class tXMLBestellImport
{
	const TABLE_NAME = 'tXMLBestellImport';
	const kXMLBestellImport = 'kXMLBestellImport';
	const cText = 'cText';
	const nPlattform = 'nPlattform';
	const nRechnung = 'nRechnung';

	/** @var int kXMLBestellImport */
	public $kXMLBestellImport;

	/** @var string cText */
	public $cText;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nRechnung */
	public $nRechnung;
}
