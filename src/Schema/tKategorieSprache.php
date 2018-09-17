<?php

namespace App\Schema;

class tKategorieSprache
{
	const TABLE_NAME = 'tKategorieSprache';
	const kKategorie = 'kKategorie';
	const kSprache = 'kSprache';
	const kPlattform = 'kPlattform';
	const kShop = 'kShop';
	const cName = 'cName';
	const cBeschreibung = 'cBeschreibung';
	const cUrlPfad = 'cUrlPfad';
	const cMetaDescription = 'cMetaDescription';
	const cTitleTag = 'cTitleTag';
	const cMetaKeywords = 'cMetaKeywords';

	/** @var int kKategorie */
	public $kKategorie;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int kShop */
	public $kShop;

	/** @var string cName */
	public $cName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cUrlPfad */
	public $cUrlPfad;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cTitleTag */
	public $cTitleTag;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;
}
