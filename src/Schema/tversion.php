<?php

namespace App\Schema;

class tversion
{
	const TABLE_NAME = 'tversion';
	const cVersion = 'cVersion';
	const COLUMN_NAMES = ['cVersion'];
	const COLUMN_TYPES = ['cVersion' => 'varchar'];

	/** @var string cVersion */
	public $cVersion;
}
