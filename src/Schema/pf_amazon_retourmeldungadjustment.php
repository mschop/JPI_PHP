<?php

namespace App\Schema;

class pf_amazon_retourmeldungadjustment
{
	const TABLE_NAME = 'pf_amazon_retourmeldungadjustment';
	const kAmazonRetourMeldung = 'kAmazonRetourMeldung';
	const cItemPriceAdjustmentType = 'cItemPriceAdjustmentType';
	const cPromotionClaimCode = 'cPromotionClaimCode';
	const fAmount = 'fAmount';
	const cCurrency = 'cCurrency';

	/** @var int kAmazonRetourMeldung */
	public $kAmazonRetourMeldung;

	/** @var string cItemPriceAdjustmentType */
	public $cItemPriceAdjustmentType;

	/** @var string cPromotionClaimCode */
	public $cPromotionClaimCode;

	/** @var string fAmount */
	public $fAmount;

	/** @var string cCurrency */
	public $cCurrency;
}
