<?php

namespace App\Schema;

class tArtikelUploadSprache
{
	const TABLE_NAME = 'tArtikelUploadSprache';
	const kArtikelUpload = 'kArtikelUpload';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
