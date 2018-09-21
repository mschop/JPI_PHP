<?php

namespace App\Schema;

class tDownloadShop
{
	const TABLE_NAME = 'tDownloadShop';
	const kDownload = 'kDownload';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';
	const COLUMN_NAMES = ['kDownload', 'kShop', 'cInet', 'cDelInet'];
	const COLUMN_TYPES = ['kDownload' => 'int', 'kShop' => 'int', 'cInet' => 'char', 'cDelInet' => 'char'];

	/** @var int kDownload */
	public $kDownload;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
