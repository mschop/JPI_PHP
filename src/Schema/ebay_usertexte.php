<?php

namespace App\Schema;

class ebay_usertexte
{
	const TABLE_NAME = 'ebay_usertexte';
	const kEbayUserTexte = 'kEbayUserTexte';
	const kEbayUser = 'kEbayUser';
	const cTagName = 'cTagName';
	const cText = 'cText';

	/** @var int kEbayUserTexte */
	public $kEbayUserTexte;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cTagName */
	public $cTagName;

	/** @var string cText */
	public $cText;
}
