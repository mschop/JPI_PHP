<?php

namespace App\Schema;

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
	const COLUMN_TYPES = [
		'kWarenLager' => 'int',
		'kFulfillmentDienstleister' => 'int',
		'nDruckLieferschein' => 'tinyint',
		'nFaxLieferschein' => 'tinyint',
		'nMailLieferschein' => 'tinyint',
		'nDruckFF' => 'tinyint',
		'nFaxFF' => 'tinyint',
		'nMailFF' => 'tinyint',
		'kFormularLieferschein' => 'int',
		'kFormularFulfillmentAuftrag' => 'int',
		'kFormularFfnLieferschein' => 'int',
		'kFormularFfnRechnung' => 'int',
		'xFfnOptionen' => 'xml',
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
