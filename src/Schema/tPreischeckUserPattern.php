<?php

namespace App\Schema;

class tPreischeckUserPattern
{
	const TABLE_NAME = 'tPreischeckUserPattern';
	const kPreischeckUserPatterns = 'kPreischeckUserPatterns';
	const kPreischeckPlattform = 'kPreischeckPlattform';
	const kArtikel = 'kArtikel';
	const cUrl = 'cUrl';

	/** @var int kPreischeckUserPatterns */
	public $kPreischeckUserPatterns;

	/** @var int kPreischeckPlattform */
	public $kPreischeckPlattform;

	/** @var int kArtikel */
	public $kArtikel;

	/** @var string cUrl */
	public $cUrl;
}
