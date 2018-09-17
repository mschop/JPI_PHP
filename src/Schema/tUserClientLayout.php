<?php

namespace App\Schema;

class tUserClientLayout
{
	const TABLE_NAME = 'tUserClientLayout';
	const kUserClientLayout = 'kUserClientLayout';
	const kBenutzer = 'kBenutzer';
	const cRechnername = 'cRechnername';
	const cName = 'cName';
	const cWert = 'cWert';

	/** @var int kUserClientLayout */
	public $kUserClientLayout;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var string cName */
	public $cName;

	/** @var string cWert */
	public $cWert;
}
