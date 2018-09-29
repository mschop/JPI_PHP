<?php

namespace App\Db\Schema;

class tWarenLagerFulFillmentDienstleister
{
	const TABLE_NAME = 'tWarenLagerFulFillmentDienstleister';
	const kWarenLager = 'kWarenLager';
	const kFulfillmentDienstleister = 'kFulfillmentDienstleister';
	const nDruckLieferschein = 'nDruckLieferschein';
	const nFaxLieferschein = 'nFaxLieferschein';
	const nMailLieferschein = 'nMailLieferschein';
	const nDruckFF = 'nDruckFF';
	const nFaxFF = 'nFaxFF';
	const nMailFF = 'nMailFF';
	const kFormularLieferschein = 'kFormularLieferschein';
	const kFormularFulfillmentAuftrag = 'kFormularFulfillmentAuftrag';
	const kFormularFfnLieferschein = 'kFormularFfnLieferschein';
	const kFormularFfnRechnung = 'kFormularFfnRechnung';
	const xFfnOptionen = 'xFfnOptionen';
	const COLUMN_NAMES = [
		'kWarenLager',
		'kFulfillmentDienstleister',
		'nDruckLieferschein',
		'nFaxLieferschein',
		'nMailLieferschein',
		'nDruckFF',
		'nFaxFF',
		'nMailFF',
		'kFormularLieferschein',
		'kFormularFulfillmentAuftrag',
		'kFormularFfnLieferschein',
		'kFormularFfnRechnung',
		'xFfnOptionen',
	];
	const COLUMN_DEFINITIONS = [
		'kWarenLager' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFulfillmentDienstleister' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDruckLieferschein' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFaxLieferschein' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMailLieferschein' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nDruckFF' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nFaxFF' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nMailFF' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularFulfillmentAuftrag' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularFfnLieferschein' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFormularFfnRechnung' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'xFfnOptionen' => [
			'type' => 'xml',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
	];

	/** @var int kWarenLager */
	public $kWarenLager;

	/** @var int kFulfillmentDienstleister */
	public $kFulfillmentDienstleister;

	/** @var int nDruckLieferschein */
	public $nDruckLieferschein;

	/** @var int nFaxLieferschein */
	public $nFaxLieferschein;

	/** @var int nMailLieferschein */
	public $nMailLieferschein;

	/** @var int nDruckFF */
	public $nDruckFF;

	/** @var int nFaxFF */
	public $nFaxFF;

	/** @var int nMailFF */
	public $nMailFF;

	/** @var int kFormularLieferschein */
	public $kFormularLieferschein;

	/** @var int kFormularFulfillmentAuftrag */
	public $kFormularFulfillmentAuftrag;

	/** @var int kFormularFfnLieferschein */
	public $kFormularFfnLieferschein;

	/** @var int kFormularFfnRechnung */
	public $kFormularFfnRechnung;

	/** @var resource xFfnOptionen */
	public $xFfnOptionen;
}
