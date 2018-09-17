<?php

namespace App\Schema;

class tPreischeckPlattform
{
	const TABLE_NAME = 'tPreischeckPlattform';
	const kPreischeckPlattform = 'kPreischeckPlattform';
	const cName = 'cName';
	const cURL = 'cURL';
	const cLandISO = 'cLandISO';
	const cColor = 'cColor';
	const cParseRegEx = 'cParseRegEx';
	const nAktiv = 'nAktiv';
	const nShowPlattform = 'nShowPlattform';

	/** @var int kPreischeckPlattform */
	public $kPreischeckPlattform;

	/** @var resource cName */
	public $cName;

	/** @var resource cURL */
	public $cURL;

	/** @var resource cLandISO */
	public $cLandISO;

	/** @var string cColor */
	public $cColor;

	/** @var resource cParseRegEx */
	public $cParseRegEx;

	/** @var int nAktiv */
	public $nAktiv;

	/** @var int nShowPlattform */
	public $nShowPlattform;
}
