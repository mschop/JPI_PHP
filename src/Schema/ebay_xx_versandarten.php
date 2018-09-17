<?php

namespace App\Schema;

class ebay_xx_versandarten
{
	const TABLE_NAME = 'ebay_xx_versandarten';
	const SiteID = 'SiteID';
	const cDescription = 'cDescription';
	const ExpeditedService = 'ExpeditedService';
	const InternationalService = 'InternationalService';
	const ShippingService = 'ShippingService';
	const ShippingServiceID = 'ShippingServiceID';
	const ShippingTimeMin = 'ShippingTimeMin';
	const ShippingTimeMax = 'ShippingTimeMax';
	const MappedToShippingServiceID = 'MappedToShippingServiceID';

	/** @var int SiteID */
	public $SiteID;

	/** @var string cDescription */
	public $cDescription;

	/** @var int ExpeditedService */
	public $ExpeditedService;

	/** @var int InternationalService */
	public $InternationalService;

	/** @var string ShippingService */
	public $ShippingService;

	/** @var int ShippingServiceID */
	public $ShippingServiceID;

	/** @var int ShippingTimeMin */
	public $ShippingTimeMin;

	/** @var int ShippingTimeMax */
	public $ShippingTimeMax;

	/** @var int MappedToShippingServiceID */
	public $MappedToShippingServiceID;
}
