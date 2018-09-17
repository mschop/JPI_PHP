<?php

namespace App\Schema;

class pf_amazon_angebot_neu
{
	const TABLE_NAME = 'pf_amazon_angebot_neu';
	const cSellerSKU = 'cSellerSKU';
	const kUser = 'kUser';
	const cName = 'cName';
	const nQuantity = 'nQuantity';
	const fPrice = 'fPrice';
	const cProductId = 'cProductId';
	const nProductIdType = 'nProductIdType';
	const nCondition = 'nCondition';
	const dErstellt = 'dErstellt';
	const dGesendet = 'dGesendet';
	const nStatus = 'nStatus';
	const cLetzterFehler = 'cLetzterFehler';
	const nPlattform = 'nPlattform';
	const cConditionNote = 'cConditionNote';
	const kAmazonVersandgruppe = 'kAmazonVersandgruppe';

	/** @var string cSellerSKU */
	public $cSellerSKU;

	/** @var int kUser */
	public $kUser;

	/** @var string cName */
	public $cName;

	/** @var int nQuantity */
	public $nQuantity;

	/** @var string fPrice */
	public $fPrice;

	/** @var string cProductId */
	public $cProductId;

	/** @var int nProductIdType */
	public $nProductIdType;

	/** @var int nCondition */
	public $nCondition;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string dGesendet */
	public $dGesendet;

	/** @var int nStatus */
	public $nStatus;

	/** @var string cLetzterFehler */
	public $cLetzterFehler;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var string cConditionNote */
	public $cConditionNote;

	/** @var int kAmazonVersandgruppe */
	public $kAmazonVersandgruppe;
}
