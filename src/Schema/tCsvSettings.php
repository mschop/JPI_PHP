<?php

namespace App\Schema;

class tCsvSettings
{
	const TABLE_NAME = 'tCsvSettings';
	const cKey = 'cKey';
	const cDelmiter = 'cDelmiter';
	const cQuote = 'cQuote';
	const cEscape = 'cEscape';
	const cComment = 'cComment';

	/** @var resource cKey */
	public $cKey;

	/** @var resource cDelmiter */
	public $cDelmiter;

	/** @var resource cQuote */
	public $cQuote;

	/** @var resource cEscape */
	public $cEscape;

	/** @var resource cComment */
	public $cComment;
}
