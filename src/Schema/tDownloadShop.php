<?php

namespace App\Schema;

class tDownloadShop
{
	const TABLE_NAME = 'tDownloadShop';
	const kDownload = 'kDownload';
	const kShop = 'kShop';
	const cInet = 'cInet';
	const cDelInet = 'cDelInet';

	/** @var int kDownload */
	public $kDownload;

	/** @var int kShop */
	public $kShop;

	/** @var string cInet */
	public $cInet;

	/** @var string cDelInet */
	public $cDelInet;
}
