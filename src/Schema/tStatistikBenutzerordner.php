<?php

namespace App\Schema;

class tStatistikBenutzerordner
{
	const TABLE_NAME = 'tStatistikBenutzerordner';
	const kStatistikBenutzerordner = 'kStatistikBenutzerordner';
	const kStatistikBenutzerordnerVater = 'kStatistikBenutzerordnerVater';
	const kBenutzer = 'kBenutzer';
	const cName = 'cName';
	const COLUMN_NAMES = ['kStatistikBenutzerordner', 'kStatistikBenutzerordnerVater', 'kBenutzer', 'cName'];
	const COLUMN_TYPES = [
		'kStatistikBenutzerordner' => 'int',
		'kStatistikBenutzerordnerVater' => 'int',
		'kBenutzer' => 'int',
		'cName' => 'varchar',
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
