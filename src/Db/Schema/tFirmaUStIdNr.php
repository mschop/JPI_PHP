<?php

namespace App\Db\Schema;

class tFirmaUStIdNr
{
	const TABLE_NAME = 'tFirmaUStIdNr';
	const kFirmaUStIdNr = 'kFirmaUStIdNr';
	const kFirma = 'kFirma';
	const cLandISO = 'cLandISO';
	const cUStId = 'cUStId';
	const nAuchAlsVersandlandBetrachten = 'nAuchAlsVersandlandBetrachten';
	const COLUMN_NAMES = ['kFirmaUStIdNr', 'kFirma', 'cLandISO', 'cUStId', 'nAuchAlsVersandlandBetrachten'];
	const COLUMN_DEFINITIONS = [
		'kFirmaUStIdNr' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kFirma' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cLandISO' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 5,
			'characterSetName' => 'iso_1',
		],
		'cUStId' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 25,
			'characterSetName' => 'iso_1',
		],
		'nAuchAlsVersandlandBetrachten' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kFirmaUStIdNr */
	public $kFirmaUStIdNr;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cLandISO */
	public $cLandISO;

	/** @var string cUStId */
	public $cUStId;

	/** @var int nAuchAlsVersandlandBetrachten */
	public $nAuchAlsVersandlandBetrachten;
}
