<?php

namespace App\Db\Schema;

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
	const COLUMN_DEFINITIONS = [
		'kEbay_itemcomp_bike' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kItem' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEpid' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cMarke' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cModell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cUntermodell' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cTyp' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBaujahr' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStrassenname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCcm' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cCompatibilityNote' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 500,
			'characterSetName' => 'iso_1',
		],
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
