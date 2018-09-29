<?php

namespace App\Db\Schema;

class tPreiskalkulationSetting
{
	const TABLE_NAME = 'tPreiskalkulationSetting';
	const kPreiskalkulationSetting = 'kPreiskalkulationSetting';
	const cNameSetting = 'cNameSetting';
	const cName = 'cName';
	const cModus = 'cModus';
	const cModifikator = 'cModifikator';
	const cPlattform = 'cPlattform';
	const cKundenGruppe = 'cKundenGruppe';
	const kShop = 'kShop';
	const kKundenGruppe = 'kKundenGruppe';
	const fAnzahl = 'fAnzahl';
	const fWert = 'fWert';
	const fAPAMax = 'fAPAMax';
	const fAPAMin = 'fAPAMin';
	const dErstellt = 'dErstellt';
	const kBenutzer = 'kBenutzer';
	const nPreisBis10 = 'nPreisBis10';
	const nPreisBis100 = 'nPreisBis100';
	const nPreisBis1000 = 'nPreisBis1000';
	const nPreisBis10000 = 'nPreisBis10000';
	const kUser = 'kUser';
	const nPlattform = 'nPlattform';
	const COLUMN_NAMES = [
		'kPreiskalkulationSetting',
		'cNameSetting',
		'cName',
		'cModus',
		'cModifikator',
		'cPlattform',
		'cKundenGruppe',
		'kShop',
		'kKundenGruppe',
		'fAnzahl',
		'fWert',
		'fAPAMax',
		'fAPAMin',
		'dErstellt',
		'kBenutzer',
		'nPreisBis10',
		'nPreisBis100',
		'nPreisBis1000',
		'nPreisBis10000',
		'kUser',
		'nPlattform',
	];
	const COLUMN_DEFINITIONS = [
		'kPreiskalkulationSetting' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNameSetting' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cModus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cModifikator' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cPlattform' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cKundenGruppe' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kShop' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kKundenGruppe' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAnzahl' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fWert' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAMax' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'fAPAMin' => [
			'type' => 'decimal',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisBis10' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisBis100' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisBis1000' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPreisBis10000' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kUser' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kPreiskalkulationSetting */
	public $kPreiskalkulationSetting;

	/** @var string cNameSetting */
	public $cNameSetting;

	/** @var string cName */
	public $cName;

	/** @var string cModus */
	public $cModus;

	/** @var string cModifikator */
	public $cModifikator;

	/** @var string cPlattform */
	public $cPlattform;

	/** @var string cKundenGruppe */
	public $cKundenGruppe;

	/** @var int kShop */
	public $kShop;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var string fAnzahl */
	public $fAnzahl;

	/** @var string fWert */
	public $fWert;

	/** @var string fAPAMax */
	public $fAPAMax;

	/** @var string fAPAMin */
	public $fAPAMin;

	/** @var string dErstellt */
	public $dErstellt;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int nPreisBis10 */
	public $nPreisBis10;

	/** @var int nPreisBis100 */
	public $nPreisBis100;

	/** @var int nPreisBis1000 */
	public $nPreisBis1000;

	/** @var int nPreisBis10000 */
	public $nPreisBis10000;

	/** @var int kUser */
	public $kUser;

	/** @var int nPlattform */
	public $nPlattform;
}
