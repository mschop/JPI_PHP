<?php

namespace App\Db\Schema;

class tStatistikBenutzerordner
{
	const TABLE_NAME = 'tStatistikBenutzerordner';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikBenutzerordnerVater = 'kStatistikBenutzerordnerVater';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const COLUMN_NAMES = ['kStatistikBenutzerordner', 'kStatistikBenutzerordnerVater', 'kBenutzer', 'cName'];
	const COLUMN_DEFINITIONS = [
		'kStatistikBenutzerordner' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kStatistikBenutzerordnerVater' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'kBenutzer' => [
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
			'characterMaximumLength' => 100,
			'characterSetName' => 'iso_1',
		],
	];

	/** @var int kStatistikBenutzerordner */
	public $kStatistikBenutzerordner;

	/** @var int kStatistikBenutzerordnerVater */
	public $kStatistikBenutzerordnerVater;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string cName */
	public $cName;
}
