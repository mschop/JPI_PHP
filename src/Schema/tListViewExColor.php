<?php

namespace App\Schema;

class tListViewExColor
{
	const TABLE_NAME = 'tListViewExColor';
	const kListViewExColor = 'kListViewExColor';
	const kBenutzer = 'kBenutzer';
	const kBenutzerAdmin = 'kBenutzerAdmin';
	const nListViewID = 'nListViewID';
	const cRechnername = 'cRechnername';
	const nColorID = 'nColorID';
	const nSubColorID = 'nSubColorID';
	const cRGB = 'cRGB';

	/** @var int kListViewExColor */
	public $kListViewExColor;

	/** @var int kBenutzer */
	public $kBenutzer;

	/** @var int kBenutzerAdmin */
	public $kBenutzerAdmin;

	/** @var int nListViewID */
	public $nListViewID;

	/** @var string cRechnername */
	public $cRechnername;

	/** @var int nColorID */
	public $nColorID;

	/** @var int nSubColorID */
	public $nSubColorID;

	/** @var string cRGB */
	public $cRGB;
}
