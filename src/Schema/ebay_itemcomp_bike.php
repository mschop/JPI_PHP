<?php

namespace App\Schema;

class ebay_itemcomp_bike
{
	const TABLE_NAME = 'ebay_itemcomp_bike';
	const kEbay_itemcomp_bike = 'kEbay_itemcomp_bike';
	const kItem = 'kItem';
	const nEpid = 'nEpid';
	const cMarke = 'cMarke';
	const cModell = 'cModell';
	const cUntermodell = 'cUntermodell';
	const cTyp = 'cTyp';
	const cBaujahr = 'cBaujahr';
	const cStrassenname = 'cStrassenname';
	const cCcm = 'cCcm';
	const cCompatibilityNote = 'cCompatibilityNote';
	const COLUMN_NAMES = [
		'kEbay_itemcomp_bike',
		'kItem',
		'nEpid',
		'cMarke',
		'cModell',
		'cUntermodell',
		'cTyp',
		'cBaujahr',
		'cStrassenname',
		'cCcm',
		'cCompatibilityNote',
	];
	const COLUMN_TYPES = [
		'kEbay_itemcomp_bike' => 'int',
		'kItem' => 'int',
		'nEpid' => 'int',
		'cMarke' => 'varchar',
		'cModell' => 'varchar',
		'cUntermodell' => 'varchar',
		'cTyp' => 'varchar',
		'cBaujahr' => 'varchar',
		'cStrassenname' => 'varchar',
		'cCcm' => 'varchar',
		'cCompatibilityNote' => 'varchar',
	];

	/** @var int kEbay_itemcomp_bike */
	public $kEbay_itemcomp_bike;

	/** @var int kItem */
	public $kItem;

	/** @var int nEpid */
	public $nEpid;

	/** @var string cMarke */
	public $cMarke;

	/** @var string cModell */
	public $cModell;

	/** @var string cUntermodell */
	public $cUntermodell;

	/** @var string cTyp */
	public $cTyp;

	/** @var string cBaujahr */
	public $cBaujahr;

	/** @var string cStrassenname */
	public $cStrassenname;

	/** @var string cCcm */
	public $cCcm;

	/** @var string cCompatibilityNote */
	public $cCompatibilityNote;
}
