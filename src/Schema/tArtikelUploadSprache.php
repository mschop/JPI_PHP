<?php

namespace App\Schema;

class tArtikelUploadSprache
{
	const TABLE_NAME = 'tArtikelUploadSprache';
	const kArtikelUpload = 'kArtikelUpload';
	const kSprache = 'kSprache';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const COLUMN_NAMES = ['kArtikelUpload', 'kSprache', 'cName', 'cBeschreibung'];
	const COLUMN_TYPES = ['kArtikelUpload' => 'int', 'kSprache' => 'int', 'cName' => 'varchar', 'cBeschreibung' => 'varchar'];

	/** @var int kArtikelUpload */
	public $kArtikelUpload;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;
}
