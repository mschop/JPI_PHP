<?php

namespace App\Schema;

class tRecht
{
	const TABLE_NAME = 'tRecht';
	const kRecht = 'kRecht';
	const cAnzeigeName = 'cAnzeigeName';
	const cBeschreibung = 'cBeschreibung';
	const kRechtVater = 'kRechtVater';
	const nIstLabel = 'nIstLabel';
	const nSort = 'nSort';

	/** @var int kRecht */
	public $kRecht;

	/** @var string cAnzeigeName */
	public $cAnzeigeName;

	/** @var string cBeschreibung */
	public $cBeschreibung;

	/** @var int kRechtVater */
	public $kRechtVater;

	/** @var int nIstLabel */
	public $nIstLabel;

	/** @var int nSort */
	public $nSort;
}
