<?php

namespace App\Schema;

class pf_amazon_group
{
	const TABLE_NAME = 'pf_amazon_group';
	const kGroup = 'kGroup';
	const cName = 'cName';
	const kPlattform = 'kPlattform';
	const nAktiv = 'nAktiv';

	/** @var int kGroup */
	public $kGroup;

	/** @var string cName */
	public $cName;

	/** @var int kPlattform */
	public $kPlattform;

	/** @var int nAktiv */
	public $nAktiv;
}
