<?php

namespace App\Schema;

class ebay_item
{
	const TABLE_NAME = 'ebay_item';
	const kItem = 'kItem';
	const ApplicationData = 'ApplicationData';
	const ApplyShippingDiscount = 'ApplyShippingDiscount';
	const AutoPay = 'AutoPay';
	const BestOfferEnabled = 'BestOfferEnabled';
	const BusinessSeller = 'BusinessSeller';
	const BuyItNowPrice = 'BuyItNowPrice';
	const BuyerProtection = 'BuyerProtection';
	const CategoryBasedAttributesPrefill = 'CategoryBasedAttributesPrefill';
	const CategoryMappingAllowed = 'CategoryMappingAllowed';
	const ChangePaymentInstructions = 'ChangePaymentInstructions';
	const Country = 'Country';
	const Currency = 'Currency';
	const DispatchTimeMax = 'DispatchTimeMax';
	const GalleryType = 'GalleryType';
	const GalleryURL = 'GalleryURL';
	const GetItFast = 'GetItFast';
	const GiftIcon = 'GiftIcon';
	const GiftServices = 'GiftServices';
	const HitCount = 'HitCount';
	const HitCounter = 'HitCounter';
	const ItemID = 'ItemID';
	const LinkedPayPalAccount = 'LinkedPayPalAccount';
	const ListingDuration = 'ListingDuration';
	const ListingEnhancement = 'ListingEnhancement';
	const ListingType = 'ListingType';
	const Location = 'Location';
	const LotSize = 'LotSize';
	const NowAndNew = 'NowAndNew';
	const PayPalEmailAddress = 'PayPalEmailAddress';
	const PaymentMethods = 'PaymentMethods';
	const PhotoDisplay = 'PhotoDisplay';
	const PictureURL = 'PictureURL';
	const PostalCode = 'PostalCode';
	const PrimaryCategoryId = 'PrimaryCategoryId';
	const PrivateListing = 'PrivateListing';
	const Quantity = 'Quantity';
	const QuestionCount = 'QuestionCount';
	const ReservePrice = 'ReservePrice';
	const RestrictedToBusiness = 'RestrictedToBusiness';
	const SKU = 'SKU';
	const SS_BidderCount = 'SS_BidderCount';
	const SS_CurrentPrice = 'SS_CurrentPrice';
	const SS_HighBidderUserId = 'SS_HighBidderUserId';
	const ScheduleDate = 'ScheduleDate';
	const ScheduleTime = 'ScheduleTime';
	const SecondaryCategoryId = 'SecondaryCategoryId';
	const ShipToLocations = 'ShipToLocations';
	const ShippingTerms = 'ShippingTerms';
	const ShippingTermsInDescription = 'ShippingTermsInDescription';
	const ShippingType = 'ShippingType';
	const Site = 'Site';
	const StartPrice = 'StartPrice';
	const StoreCategory2Id = 'StoreCategory2Id';
	const StoreCategoryId = 'StoreCategoryId';
	const SubTitle = 'SubTitle';
	const ThirdPartyCheckout = 'ThirdPartyCheckout';
	const Title = 'Title';
	const UUID = 'UUID';
	const VATPercent = 'VATPercent';
	const WatchCount = 'WatchCount';
	const Type = 'Type';
	const ScheduleServerSide = 'ScheduleServerSide';
	const kArtikel = 'kArtikel';
	const kEbayuser = 'kEbayuser';
	const htmlTemplate = 'htmlTemplate';
	const Sent = 'Sent';
	const Totalfees = 'Totalfees';
	const SS_BidCount = 'SS_BidCount';
	const StartTime = 'StartTime';
	const EndTime = 'EndTime';
	const Status = 'Status';
	const Templatename = 'Templatename';
	const ListingURL = 'ListingURL';
	const kPlanung = 'kPlanung';
	const kPlanungsItem = 'kPlanungsItem';
	const cRelistedItemID = 'cRelistedItemID';
	const fGewicht = 'fGewicht';
	const kKategorie = 'kKategorie';
	const BestOfferMinPrice = 'BestOfferMinPrice';
	const kTemplate = 'kTemplate';
	const nVKSonderregel = 'nVKSonderregel';
	const DiscountProfileID = 'DiscountProfileID';
	const nPickup = 'nPickup';
	const nPremium = 'nPremium';
	const cRelistID = 'cRelistID';
	const BestOfferAutoAcceptPrice = 'BestOfferAutoAcceptPrice';
	const nVKSonderregelInt = 'nVKSonderregelInt';
	const DiscountProfileIDInt = 'DiscountProfileIDInt';
	const nVariationenAktiv = 'nVariationenAktiv';
	const kEigenschaft = 'kEigenschaft';
	const nReturnPolicy = 'nReturnPolicy';
	const ConditionID = 'ConditionID';
	const nLaufend = 'nLaufend';
	const MaxQuantity = 'MaxQuantity';
	const nAutomatischEinstellen = 'nAutomatischEinstellen';
	const nSchwelleAutomatischEinstellen = 'nSchwelleAutomatischEinstellen';
	const nLeecher = 'nLeecher';
	const SiteID = 'SiteID';
	const cRueckgabeMoeglich = 'cRueckgabeMoeglich';
	const cRueckgabefrist = 'cRueckgabefrist';
	const cVersandkostenTraeger = 'cVersandkostenTraeger';
	const bBestandReserviert = 'bBestandReserviert';
	const nUseHomeShippingCostTable = 'nUseHomeShippingCostTable';
	const nUseInternationalShippingCostTable = 'nUseInternationalShippingCostTable';
	const dZuEbayGesendet = 'dZuEbayGesendet';
	const nFehler = 'nFehler';
	const kMessage = 'kMessage';
	const cEbayUserProfileIdShipping = 'cEbayUserProfileIdShipping';
	const cEbayUserProfileIdPayment = 'cEbayUserProfileIdPayment';
	const cEbayUserProfileIdReturn = 'cEbayUserProfileIdReturn';
	const ConditionDescription = 'ConditionDescription';
	const fStreichPreis = 'fStreichPreis';
	const cStreichPreisTyp = 'cStreichPreisTyp';
	const nEbayPlus = 'nEbayPlus';
	const nProduktKennzeichnung = 'nProduktKennzeichnung';
	const cEAN = 'cEAN';
	const nMinQuantity = 'nMinQuantity';
	const nNurAnGewerbliche = 'nNurAnGewerbliche';

	/** @var int kItem */
	public $kItem;

	/** @var string ApplicationData */
	public $ApplicationData;

	/** @var int ApplyShippingDiscount */
	public $ApplyShippingDiscount;

	/** @var int AutoPay */
	public $AutoPay;

	/** @var int BestOfferEnabled */
	public $BestOfferEnabled;

	/** @var int BusinessSeller */
	public $BusinessSeller;

	/** @var string BuyItNowPrice */
	public $BuyItNowPrice;

	/** @var string BuyerProtection */
	public $BuyerProtection;

	/** @var int CategoryBasedAttributesPrefill */
	public $CategoryBasedAttributesPrefill;

	/** @var int CategoryMappingAllowed */
	public $CategoryMappingAllowed;

	/** @var int ChangePaymentInstructions */
	public $ChangePaymentInstructions;

	/** @var string Country */
	public $Country;

	/** @var string Currency */
	public $Currency;

	/** @var int DispatchTimeMax */
	public $DispatchTimeMax;

	/** @var string GalleryType */
	public $GalleryType;

	/** @var string GalleryURL */
	public $GalleryURL;

	/** @var int GetItFast */
	public $GetItFast;

	/** @var int GiftIcon */
	public $GiftIcon;

	/** @var string GiftServices */
	public $GiftServices;

	/** @var int HitCount */
	public $HitCount;

	/** @var string HitCounter */
	public $HitCounter;

	/** @var string ItemID */
	public $ItemID;

	/** @var int LinkedPayPalAccount */
	public $LinkedPayPalAccount;

	/** @var string ListingDuration */
	public $ListingDuration;

	/** @var string ListingEnhancement */
	public $ListingEnhancement;

	/** @var string ListingType */
	public $ListingType;

	/** @var string Location */
	public $Location;

	/** @var int LotSize */
	public $LotSize;

	/** @var int NowAndNew */
	public $NowAndNew;

	/** @var string PayPalEmailAddress */
	public $PayPalEmailAddress;

	/** @var string PaymentMethods */
	public $PaymentMethods;

	/** @var string PhotoDisplay */
	public $PhotoDisplay;

	/** @var string PictureURL */
	public $PictureURL;

	/** @var string PostalCode */
	public $PostalCode;

	/** @var int PrimaryCategoryId */
	public $PrimaryCategoryId;

	/** @var int PrivateListing */
	public $PrivateListing;

	/** @var int Quantity */
	public $Quantity;

	/** @var int QuestionCount */
	public $QuestionCount;

	/** @var string ReservePrice */
	public $ReservePrice;

	/** @var int RestrictedToBusiness */
	public $RestrictedToBusiness;

	/** @var string SKU */
	public $SKU;

	/** @var int SS_BidderCount */
	public $SS_BidderCount;

	/** @var string SS_CurrentPrice */
	public $SS_CurrentPrice;

	/** @var string SS_HighBidderUserId */
	public $SS_HighBidderUserId;

	/** @var string ScheduleDate */
	public $ScheduleDate;

	/** @var string ScheduleTime */
	public $ScheduleTime;

	/** @var int SecondaryCategoryId */
	public $SecondaryCategoryId;

	/** @var string ShipToLocations */
	public $ShipToLocations;

	/** @var string ShippingTerms */
	public $ShippingTerms;

	/** @var int ShippingTermsInDescription */
	public $ShippingTermsInDescription;

	/** @var string ShippingType */
	public $ShippingType;

	/** @var string Site */
	public $Site;

	/** @var string StartPrice */
	public $StartPrice;

	/** @var int StoreCategory2Id */
	public $StoreCategory2Id;

	/** @var int StoreCategoryId */
	public $StoreCategoryId;

	/** @var string SubTitle */
	public $SubTitle;

	/** @var int ThirdPartyCheckout */
	public $ThirdPartyCheckout;

	/** @var string Title */
	public $Title;

	/** @var string UUID */
	public $UUID;

	/** @var string VATPercent */
	public $VATPercent;

	/** @var int WatchCount */
	public $WatchCount;

	/** @var string Type */
	public $Type;

	/** @var string ScheduleServerSide */
	public $ScheduleServerSide;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var int kEbayuser */
	public $kEbayuser;

	/** @var int htmlTemplate */
	public $htmlTemplate;

	/** @var string Sent */
	public $Sent;

	/** @var string Totalfees */
	public $Totalfees;

	/** @var int SS_BidCount */
	public $SS_BidCount;

	/** @var string StartTime */
	public $StartTime;

	/** @var string EndTime */
	public $EndTime;

	/** @var int Status */
	public $Status;

	/** @var string Templatename */
	public $Templatename;

	/** @var string ListingURL */
	public $ListingURL;

	/** @var int kPlanung */
	public $kPlanung;

	/** @var int kPlanungsItem */
	public $kPlanungsItem;

	/** @var string cRelistedItemID */
	public $cRelistedItemID;

	/** @var string fGewicht */
	public $fGewicht;

	/** @var int kKategorie */
	public $kKategorie;

	/** @var string BestOfferMinPrice */
	public $BestOfferMinPrice;

	/** @var int kTemplate */
	public $kTemplate;

	/** @var int nVKSonderregel */
	public $nVKSonderregel;

	/** @var string DiscountProfileID */
	public $DiscountProfileID;

	/** @var int nPickup */
	public $nPickup;

	/** @var int nPremium */
	public $nPremium;

	/** @var string cRelistID */
	public $cRelistID;

	/** @var string BestOfferAutoAcceptPrice */
	public $BestOfferAutoAcceptPrice;

	/** @var int nVKSonderregelInt */
	public $nVKSonderregelInt;

	/** @var string DiscountProfileIDInt */
	public $DiscountProfileIDInt;

	/** @var int nVariationenAktiv */
	public $nVariationenAktiv;

	/** @var int kEigenschaft */
	public $kEigenschaft;

	/** @var int nReturnPolicy */
	public $nReturnPolicy;

	/** @var int ConditionID */
	public $ConditionID;

	/** @var int nLaufend */
	public $nLaufend;

	/** @var int MaxQuantity */
	public $MaxQuantity;

	/** @var int nAutomatischEinstellen */
	public $nAutomatischEinstellen;

	/** @var int nSchwelleAutomatischEinstellen */
	public $nSchwelleAutomatischEinstellen;

	/** @var int nLeecher */
	public $nLeecher;

	/** @var int SiteID */
	public $SiteID;

	/** @var string cRueckgabeMoeglich */
	public $cRueckgabeMoeglich;

	/** @var string cRueckgabefrist */
	public $cRueckgabefrist;

	/** @var string cVersandkostenTraeger */
	public $cVersandkostenTraeger;

	/** @var int bBestandReserviert */
	public $bBestandReserviert;

	/** @var int nUseHomeShippingCostTable */
	public $nUseHomeShippingCostTable;

	/** @var int nUseInternationalShippingCostTable */
	public $nUseInternationalShippingCostTable;

	/** @var string dZuEbayGesendet */
	public $dZuEbayGesendet;

	/** @var int nFehler */
	public $nFehler;

	/** @var int kMessage */
	public $kMessage;

	/** @var string cEbayUserProfileIdShipping */
	public $cEbayUserProfileIdShipping;

	/** @var string cEbayUserProfileIdPayment */
	public $cEbayUserProfileIdPayment;

	/** @var string cEbayUserProfileIdReturn */
	public $cEbayUserProfileIdReturn;

	/** @var string ConditionDescription */
	public $ConditionDescription;

	/** @var string fStreichPreis */
	public $fStreichPreis;

	/** @var string cStreichPreisTyp */
	public $cStreichPreisTyp;

	/** @var int nEbayPlus */
	public $nEbayPlus;

	/** @var int nProduktKennzeichnung */
	public $nProduktKennzeichnung;

	/** @var string cEAN */
	public $cEAN;

	/** @var int nMinQuantity */
	public $nMinQuantity;

	/** @var int nNurAnGewerbliche */
	public $nNurAnGewerbliche;
}
