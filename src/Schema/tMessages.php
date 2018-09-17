<?php

namespace App\Schema;

class tMessages
{
	const TABLE_NAME = 'tMessages';
	const kMessages = 'kMessages';
	const kKunde = 'kKunde';
	const kLieferant = 'kLieferant';
	const sBereff = 'sBereff';
	const sText = 'sText';
	const sSentMailDate = 'sSentMailDate';
	const sSentFaxDate = 'sSentFaxDate';
	const nType = 'nType';
	const sHTMLText = 'sHTMLText';
	const sAttachment = 'sAttachment';
	const kFirma = 'kFirma';
	const kAnsprechpartner = 'kAnsprechpartner';

	/** @var int kMessages */
	public $kMessages;

	/** @var int kKunde */
	public $kKunde;

	/** @var int kLieferant */
	public $kLieferant;

	/** @var string sBereff */
	public $sBereff;

	/** @var string sText */
	public $sText;

	/** @var string sSentMailDate */
	public $sSentMailDate;

	/** @var string sSentFaxDate */
	public $sSentFaxDate;

	/** @var int nType */
	public $nType;

	/** @var string sHTMLText */
	public $sHTMLText;

	/** @var string sAttachment */
	public $sAttachment;

	/** @var int kFirma */
	public $kFirma;

	/** @var int kAnsprechpartner */
	public $kAnsprechpartner;
}
