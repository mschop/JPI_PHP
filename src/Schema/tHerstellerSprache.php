<?php

namespace App\Schema;

class tHerstellerSprache
{
	const TABLE_NAME = 'tHerstellerSprache';
	const kHersteller = 'kHersteller';
	const kSprache = 'kSprache';
	const cMetaTitle = 'cMetaTitle';
	const cMetaKeywords = 'cMetaKeywords';
	const cMetaDescription = 'cMetaDescription';
	const cBeschreibung = 'cBeschreibung';
	const cSeo = 'cSeo';

	/** @var int kHersteller */
	public $kHersteller;

	/** @var int kSprache */
	public $kSprache;

	/** @var string cMetaTitle */
	public $cMetaTitle;

	/** @var string cMetaKeywords */
	public $cMetaKeywords;

	/** @var string cMetaDescription */
	public $cMetaDescription;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var string cSeo */
	public $cSeo;
}
