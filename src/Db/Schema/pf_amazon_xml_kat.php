<?php

namespace App\Db\Schema;

class pf_amazon_xml_kat
{
	const TABLE_NAME = 'pf_amazon_xml_kat';
	const kID = 'kID';
	const kIDParent = 'kIDParent';
	const cName = 'cName';
	const kBrowseNode = 'kBrowseNode';
	const nPlattform = 'nPlattform';
	const nEbene = 'nEbene';
	const COLUMN_NAMES = ['kID', 'kIDParent', 'cName', 'kBrowseNode', 'nPlattform', 'nEbene'];
	const COLUMN_DEFINITIONS = [
		'kID' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kIDParent' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cName' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'kBrowseNode' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nPlattform' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'nEbene' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kID */
	public $kID;

	/** @var int kIDParent */
	public $kIDParent;

	/** @var string cName */
	public $cName;

	/** @var string kBrowseNode */
	public $kBrowseNode;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nEbene */
	public $nEbene;
}
