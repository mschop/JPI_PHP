<?php

namespace App\Db\Schema;

class pf_amazon_log_zuordnen
{
	const TABLE_NAME = 'pf_amazon_log_zuordnen';
	const dErstellt = 'dErstellt';
	const cNachricht = 'cNachricht';
	const COLUMN_NAMES = ['dErstellt', 'cNachricht'];
	const COLUMN_DEFINITIONS = [
		'dErstellt' => [
			'type' => 'datetime',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'cNachricht' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var string dErstellt */
	public $dErstellt;

	/** @var string cNachricht */
	public $cNachricht;
}
