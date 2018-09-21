<?php

namespace App\Schema;

class ebay_usertexte
{
	const TABLE_NAME = 'ebay_usertexte';
	const kEbayUserTexte = 'kEbayUserTexte';
	const kEbayUser = 'kEbayUser';
	const cTagName = 'cTagName';
	const cText = 'cText';
	const COLUMN_NAMES = ['kEbayUserTexte', 'kEbayUser', 'cTagName', 'cText'];
	const COLUMN_TYPES = ['kEbayUserTexte' => 'int', 'kEbayUser' => 'int', 'cTagName' => 'varchar', 'cText' => 'varchar'];

	/** @var int kEbayUserTexte */
	public $kEbayUserTexte;

	/** @var int kEbayUser */
	public $kEbayUser;

	/** @var string cTagName */
	public $cTagName;

	/** @var string cText */
	public $cText;
}
