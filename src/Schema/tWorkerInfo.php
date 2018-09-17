<?php

namespace App\Schema;

class tWorkerInfo
{
	const TABLE_NAME = 'tWorkerInfo';
	const nEbayPID = 'nEbayPID';
	const dEbayStart = 'dEbayStart';
	const dEbayEnde = 'dEbayEnde';
	const nEbayOption = 'nEbayOption';
	const nAmazonPID = 'nAmazonPID';
	const dAmazonStart = 'dAmazonStart';
	const dAmazonEnde = 'dAmazonEnde';
	const nAmazonOption = 'nAmazonOption';
	const nShopPID = 'nShopPID';
	const dShopStart = 'dShopStart';
	const dShopEnde = 'dShopEnde';
	const nShopOption = 'nShopOption';

	/** @var int nEbayPID */
	public $nEbayPID;

	/** @var string dEbayStart */
	public $dEbayStart;

	/** @var string dEbayEnde */
	public $dEbayEnde;

	/** @var int nEbayOption */
	public $nEbayOption;

	/** @var int nAmazonPID */
	public $nAmazonPID;

	/** @var string dAmazonStart */
	public $dAmazonStart;

	/** @var string dAmazonEnde */
	public $dAmazonEnde;

	/** @var int nAmazonOption */
	public $nAmazonOption;

	/** @var int nShopPID */
	public $nShopPID;

	/** @var string dShopStart */
	public $dShopStart;

	/** @var string dShopEnde */
	public $dShopEnde;

	/** @var int nShopOption */
	public $nShopOption;
}
