<?php

namespace App\Db\Schema;

class tStatistikVorlageOrdner
{
	const TABLE_NAME = 'tStatistikVorlageOrdner';
	const kStatistikVorlageOrdner = 'kStatistikVorlageOrdner';
	const kStatistikVorlageOrdnerParent = 'kStatistikVorlageOrdnerParent';
	const cName = 'cName';
	const nIntern = 'nIntern';
	const COLUMN_NAMES = ['kStatistikVorlageOrdner', 'kStatistikVorlageOrdnerParent', 'cName', 'nIntern'];
	const COLUMN_DEFINITIONS = [
		'kStatistikVorlageOrdner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStatistikVorlageOrdnerParent' => [
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
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'nIntern' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

	/** @var int kStatistikVorlageOrdner */
	public $kStatistikVorlageOrdner;

	/** @var int kStatistikVorlageOrdnerParent */
	public $kStatistikVorlageOrdnerParent;

	/** @var string cName */
	public $cName;

	/** @var int nIntern */
	public $nIntern;
}
