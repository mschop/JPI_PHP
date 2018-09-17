<?php

namespace App\Schema;

class ebay_beschreibungstemplate
{
	const TABLE_NAME = 'ebay_beschreibungstemplate';
	const kEbayBeschreibungsTemplate = 'kEbayBeschreibungsTemplate';
	const kEbayuser = 'kEbayuser';
	const kItem = 'kItem';
	const cTitel = 'cTitel';
	const cH1 = 'cH1';
	const cH2 = 'cH2';
	const cBody = 'cBody';
	const cVersandhinweis = 'cVersandhinweis';
	const PaymentInstructions = 'PaymentInstructions';

	/** @var int kEbayBeschreibungsTemplate */
	public $kEbayBeschreibungsTemplate;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int kItem */
	public $kItem;

	/** @var string cTitel */
	public $cTitel;

	/** @var string cH1 */
	public $cH1;

	/** @var string cH2 */
	public $cH2;

	/** @var string cBody */
	public $cBody;

	/** @var string cVersandhinweis */
	public $cVersandhinweis;

	/** @var string PaymentInstructions */
	public $PaymentInstructions;
}
