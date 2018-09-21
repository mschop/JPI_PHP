<?php

namespace App\Schema;

class pf_amazon_apa_usersettings
{
	const TABLE_NAME = 'pf_amazon_apa_usersettings';
	const kUser = 'kUser';
	const fAPAPreisabstand = 'fAPAPreisabstand';
	const nIstAPAPreisabstandProzentual = 'nIstAPAPreisabstandProzentual';
	const nPlattform = 'nPlattform';
	const nAPAShippingTime = 'nAPAShippingTime';
	const nAPASellerPositiveFeedbackRating = 'nAPASellerPositiveFeedbackRating';
	const fAPAPreisabstandFBA = 'fAPAPreisabstandFBA';
	const nIstAPAPreisabstandFBAProzentual = 'nIstAPAPreisabstandFBAProzentual';
	const COLUMN_NAMES = [
		'kUser',
		'fAPAPreisabstand',
		'nIstAPAPreisabstandProzentual',
		'nPlattform',
		'nAPAShippingTime',
		'nAPASellerPositiveFeedbackRating',
		'fAPAPreisabstandFBA',
		'nIstAPAPreisabstandFBAProzentual',
	];
	const COLUMN_TYPES = [
		'kUser' => 'int',
		'fAPAPreisabstand' => 'decimal',
		'nIstAPAPreisabstandProzentual' => 'tinyint',
		'nPlattform' => 'int',
		'nAPAShippingTime' => 'int',
		'nAPASellerPositiveFeedbackRating' => 'int',
		'fAPAPreisabstandFBA' => 'decimal',
		'nIstAPAPreisabstandFBAProzentual' => 'tinyint',
	];

	/** @var int kUser */
	public $kUser;

	/** @var string fAPAPreisabstand */
	public $fAPAPreisabstand;

	/** @var int nIstAPAPreisabstandProzentual */
	public $nIstAPAPreisabstandProzentual;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nAPAShippingTime */
	public $nAPAShippingTime;

	/** @var int nAPASellerPositiveFeedbackRating */
	public $nAPASellerPositiveFeedbackRating;

	/** @var string fAPAPreisabstandFBA */
	public $fAPAPreisabstandFBA;

	/** @var int nIstAPAPreisabstandFBAProzentual */
	public $nIstAPAPreisabstandFBAProzentual;
}
