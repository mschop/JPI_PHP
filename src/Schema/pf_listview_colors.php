<?php

namespace App\Schema;

class pf_listview_colors
{
	const TABLE_NAME = 'pf_listview_colors';
	const nColorId = 'nColorId';
	const nSubColorId = 'nSubColorId';
	const nListViewId = 'nListViewId';
	const cRGB = 'cRGB';

	/** @var int nColorId */
	public $nColorId;

	/** @var int nSubColorId */
	public $nSubColorId;

	/** @var int nListViewId */
	public $nListViewId;

	/** @var string cRGB */
	public $cRGB;
}
