<?php

namespace App\Schema;

class tUniqueSession
{
	const TABLE_NAME = 'tUniqueSession';
	const kSession = 'kSession';
	const cContext = 'cContext';
	const dLastCallback = 'dLastCallback';
	const cInfo = 'cInfo';

	/** @var int kSession */
	public $kSession;

	/** @var string cContext */
	public $cContext;

	/** @var string dLastCallback */
	public $dLastCallback;

	/** @var string cInfo */
	public $cInfo;
}
