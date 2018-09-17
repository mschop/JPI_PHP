<?php

namespace App\Schema;

class tSessionId
{
	const TABLE_NAME = 'tSessionId';
	const kSessionId = 'kSessionId';
	const cRechnername = 'cRechnername';
	const kBenutzer = 'kBenutzer';
	const dLastAction = 'dLastAction';

	/** @var int kSessionId */
	public $kSessionId;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var string dLastAction */
	public $dLastAction;
}
