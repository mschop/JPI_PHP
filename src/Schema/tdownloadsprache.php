<?php

namespace App\Schema;

class tdownloadsprache
{
	const TABLE_NAME = 'tdownloadsprache';
	const kDownload = 'kDownload';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kDownload */
	public $kDownload;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
