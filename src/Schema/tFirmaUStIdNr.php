<?php

namespace App\Schema;

class tFirmaUStIdNr
{
	const TABLE_NAME = 'tFirmaUStIdNr';
	const kFirmaUStIdNr = 'kFirmaUStIdNr';
	const kFirma = 'kFirma';
	const cLandISO = 'cLandISO';
	const cUStId = 'cUStId';
	const nAuchAlsVersandlandBetrachten = 'nAuchAlsVersandlandBetrachten';
	const COLUMN_NAMES = ['kFirmaUStIdNr', 'kFirma', 'cLandISO', 'cUStId', 'nAuchAlsVersandlandBetrachten'];
	const COLUMN_TYPES = [
		'kFirmaUStIdNr' => 'int',
		'kFirma' => 'int',
		'cLandISO' => 'varchar',
		'cUStId' => 'varchar',
		'nAuchAlsVersandlandBetrachten' => 'tinyint',
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
