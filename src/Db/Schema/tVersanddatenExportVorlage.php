<?php

namespace App\Db\Schema;

class tVersanddatenExportVorlage
{
	const TABLE_NAME = 'tVersanddatenExportVorlage';
	const kVersanddatenExportVorlage = 'kVersanddatenExportVorlage';
	const cName = 'cName';
	const cContentXml = 'cContentXml';
	const cFilenameTemplate = 'cFilenameTemplate';
	const nExistingFileAction = 'nExistingFileAction';
	const kAdressExportVorlage = 'kAdressExportVorlage';
	const nExpertenmodus = 'nExpertenmodus';
	const cPathTemplate = 'cPathTemplate';
	const COLUMN_NAMES = [
		'kVersanddatenExportVorlage',
		'cName',
		'cContentXml',
		'cFilenameTemplate',
		'nExistingFileAction',
		'kAdressExportVorlage',
		'nExpertenmodus',
		'cPathTemplate',
	];
	const COLUMN_DEFINITIONS = [
		'kVersanddatenExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cContentXml' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'cFilenameTemplate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nExistingFileAction' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kAdressExportVorlage' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nExpertenmodus' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cPathTemplate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kVersanddatenExportVorlage */
	public $kVersanddatenExportVorlage;

	/** @var string cName */
	public $cName;

	/** @var string cContentXml */
	public $cContentXml;

	/** @var string cFilenameTemplate */
	public $cFilenameTemplate;

	/** @var int nExistingFileAction */
	public $nExistingFileAction;

	/** @var int kAdressExportVorlage */
	public $kAdressExportVorlage;

	/** @var int nExpertenmodus */
	public $nExpertenmodus;

	/** @var string cPathTemplate */
	public $cPathTemplate;
}
