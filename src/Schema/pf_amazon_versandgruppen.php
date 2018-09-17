<?php

namespace App\Schema;

class pf_amazon_versandgruppen
{
	const TABLE_NAME = 'pf_amazon_versandgruppen';
	const kAmazonVersandgruppe = 'kAmazonVersandgruppe';
	const kUser = 'kUser';
	const cAmazonInterneId = 'cAmazonInterneId';
	const cName = 'cName';

	/** @var int kAmazonVersandgruppe */
	public $kAmazonVersandgruppe;

	/** @var int kUser */
	public $kUser;

	/** @var string cAmazonInterneId */
	public $cAmazonInterneId;

	/** @var string cName */
	public $cName;
}
