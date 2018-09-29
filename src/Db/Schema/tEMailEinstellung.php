<?php

namespace App\Db\Schema;

class tEMailEinstellung
{
	const TABLE_NAME = 'tEMailEinstellung';
	const kEMailEinstellungen = 'kEMailEinstellungen';
	const kFirma = 'kFirma';
	const cServerSMTP = 'cServerSMTP';
	const nPortSMTP = 'nPortSMTP';
	const cNutzernameSMTP = 'cNutzernameSMTP';
	const cPasswortSMTP = 'cPasswortSMTP';
	const cAbsender = 'cAbsender';
	const cBCC = 'cBCC';
	const nSecurity = 'nSecurity';
	const nSigPortalAktiv = 'nSigPortalAktiv';
	const cSigPortalKdNummer = 'cSigPortalKdNummer';
	const cSigPortalNutzername = 'cSigPortalNutzername';
	const cSigPortalPasswort = 'cSigPortalPasswort';
	const nSigPortalVerifizierung = 'nSigPortalVerifizierung';
	const cSigPortalPfad = 'cSigPortalPfad';
	const nSigBefehlAktiv = 'nSigBefehlAktiv';
	const cSigBefehlDateiname = 'cSigBefehlDateiname';
	const cSigBefehlParameter = 'cSigBefehlParameter';
	const nSMIMEAktiv = 'nSMIMEAktiv';
	const cSMIMEPasswort = 'cSMIMEPasswort';
	const bSMIMEZertifikatData = 'bSMIMEZertifikatData';
	const COLUMN_NAMES = [
		'kEMailEinstellungen',
		'kFirma',
		'cServerSMTP',
		'nPortSMTP',
		'cNutzernameSMTP',
		'cPasswortSMTP',
		'cAbsender',
		'cBCC',
		'nSecurity',
		'nSigPortalAktiv',
		'cSigPortalKdNummer',
		'cSigPortalNutzername',
		'cSigPortalPasswort',
		'nSigPortalVerifizierung',
		'cSigPortalPfad',
		'nSigBefehlAktiv',
		'cSigBefehlDateiname',
		'cSigBefehlParameter',
		'nSMIMEAktiv',
		'cSMIMEPasswort',
		'bSMIMEZertifikatData',
	];
	const COLUMN_DEFINITIONS = [
		'kEMailEinstellungen' => [
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
		'cServerSMTP' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPortSMTP' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNutzernameSMTP' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPasswortSMTP' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cAbsender' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cBCC' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSecurity' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nSigPortalAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSigPortalKdNummer' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cSigPortalNutzername' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'cSigPortalPasswort' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'nSigPortalVerifizierung' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSigPortalPfad' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSigBefehlAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSigBefehlDateiname' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cSigBefehlParameter' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nSMIMEAktiv' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cSMIMEPasswort' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 64,
			'characterSetName' => 'iso_1',
		],
		'bSMIMEZertifikatData' => [
			'type' => 'varbinary',
			'phpType' => 'resource',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => null,
		],
	];

	/** @var int kEMailEinstellungen */
	public $kEMailEinstellungen;

	/** @var int kFirma */
	public $kFirma;

	/** @var string cServerSMTP */
	public $cServerSMTP;

	/** @var int nPortSMTP */
	public $nPortSMTP;

	/** @var string cNutzernameSMTP */
	public $cNutzernameSMTP;

	/** @var string cPasswortSMTP */
	public $cPasswortSMTP;

	/** @var string cAbsender */
	public $cAbsender;

	/** @var string cBCC */
	public $cBCC;

	/** @var int nSecurity */
	public $nSecurity;

	/** @var int nSigPortalAktiv */
	public $nSigPortalAktiv;

	/** @var string cSigPortalKdNummer */
	public $cSigPortalKdNummer;

	/** @var string cSigPortalNutzername */
	public $cSigPortalNutzername;

	/** @var string cSigPortalPasswort */
	public $cSigPortalPasswort;

	/** @var int nSigPortalVerifizierung */
	public $nSigPortalVerifizierung;

	/** @var string cSigPortalPfad */
	public $cSigPortalPfad;

	/** @var int nSigBefehlAktiv */
	public $nSigBefehlAktiv;

	/** @var string cSigBefehlDateiname */
	public $cSigBefehlDateiname;

	/** @var string cSigBefehlParameter */
	public $cSigBefehlParameter;

	/** @var int nSMIMEAktiv */
	public $nSMIMEAktiv;

	/** @var string cSMIMEPasswort */
	public $cSMIMEPasswort;

	/** @var resource bSMIMEZertifikatData */
	public $bSMIMEZertifikatData;
}
