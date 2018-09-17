<?php

namespace App\Schema;

class ebay_coposeigenschaft
{
	const TABLE_NAME = 'ebay_coposeigenschaft';
	const kebay_coposeigenschaft = 'kebay_coposeigenschaft';
	const kEbayCheckoutPos = 'kEbayCheckoutPos';
	const kEigenschaft = 'kEigenschaft';
	const kEigenschaftWert = 'kEigenschaftWert';
	const fAufpreis = 'fAufpreis';

	/** @var int kebay_coposeigenschaft */
	public $kebay_coposeigenschaft;

	/** @var int kEbayCheckoutPos */
	public $kEbayCheckoutPos;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int kEigenschaftWert */
	public $kEigenschaftWert;

	/** @var string fAufpreis */
	public $fAufpreis;
}
