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
	const COLUMN_NAMES = ['kebay_coposeigenschaft', 'kEbayCheckoutPos', 'kEigenschaft', 'kEigenschaftWert', 'fAufpreis'];
	const COLUMN_TYPES = [
		'kebay_coposeigenschaft' => 'int',
		'kEbayCheckoutPos' => 'int',
		'kEigenschaft' => 'int',
		'kEigenschaftWert' => 'int',
		'fAufpreis' => 'decimal',
	];

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
