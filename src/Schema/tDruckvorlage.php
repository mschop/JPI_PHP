<?php

namespace App\Schema;

class tDruckvorlage
{
	const TABLE_NAME = 'tDruckvorlage';
	const kDruckvorlage = 'kDruckvorlage';
	const kFirma = 'kFirma';
	const kSprache = 'kSprache';
	const kKundenGruppe = 'kKundenGruppe';
	const kLLVorlage = 'kLLVorlage';
	const cName = 'cName';
	const nStandard = 'nStandard';
	const kFormType = 'kFormType';
	const nAusgabe = 'nAusgabe';

	/** @var int kDruckvorlage */
	public $kDruckvorlage;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kSprache */
	public $kSprache;

	/** @var int kKundenGruppe */
	public $kKundenGruppe;

	/** @var int kLLVorlage */
	public $kLLVorlage;

	/** @var string cName */
	public $cName;

	/** @var int nStandard */
	public $nStandard;

	/** @var int kFormType */
	public $kFormType;

	/** @var int nAusgabe */
	public $nAusgabe;
}
