<?php

namespace App\Schema;

use OpenApi\Annotations\Items as OAItems;
use OpenApi\Annotations\Property as OAProperty;
use OpenApi\Annotations\Schema as OASchema;

/**
 * @OASchema()
 */
class Order
{
	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $id;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $invoiceId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $userId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $orderNumber;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $type;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $annotation;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $createdAt;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $dayTerm;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $deliveryTypeId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $grossDeliveryCosts;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $discount;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveryInfo;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $releasedForDeliveryAt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $identCode;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $description;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $inet;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveredAt;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $orderHint;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $accountOfProceeds;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $currency;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $currencyFactor;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $shopId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $companyId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $logisticianId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $platform;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $languageId;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $voucherValue;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $printedAt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $mailedAt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $inetOrderNumber;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $paymentMethodId;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isIgl;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isVatExempt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $status;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveryMailSentAt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $paymentMailSentAt;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $userName;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $paymentReferenceLine;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $earlyPaymentDiscount;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $isCancelled;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $moduleId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $paymentType;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $hasUpload;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $additionalWeight;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isDeliveredCompletely;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $payedAt;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $splitOrderId;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $priority;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveryCountryIsoCode;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $vatNumber;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isPremium;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveryCountryCurrency;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $deliveryCountryCurrencyFactor;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $customerOrderNumber;

	/**
	 * @var bool
	 * @OAProperty(type="boolean")
	 */
	public $isExtenalInvoice;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $campaign;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $campaignParam;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $campaignName;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $userAgent;

	/**
	 * @var string
	 * @OAProperty(type="string")
	 */
	public $referrer;

	/**
	 * @var int
	 * @OAProperty(type="integer")
	 */
	public $maxDeliveryDays;

	/**
	 * @var array|null
	 * @OAProperty(ref="#/components/schemas/InvoiceAddress")
	 */
	public $invoiceAddress;

	/**
	 * @var array|null
	 * @OAProperty(ref="#/components/schemas/DeliveryAddress")
	 */
	public $deliveryAddress;
}
