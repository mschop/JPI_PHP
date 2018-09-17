<?php

namespace App\Schema;

class pf_amazon_xml_kat
{
	const TABLE_NAME = 'pf_amazon_xml_kat';
	const kID = 'kID';
	const kIDParent = 'kIDParent';
	const cName = 'cName';
	const kBrowseNode = 'kBrowseNode';
	const nPlattform = 'nPlattform';
	const nEbene = 'nEbene';

	/** @var int kID */
	public $kID;

	/** @var int kIDParent */
	public $kIDParent;

	/** @var string cName */
	public $cName;

	/** @var string kBrowseNode */
	public $kBrowseNode;

	/** @var int nPlattform */
	public $nPlattform;

	/** @var int nEbene */
	public $nEbene;
}
