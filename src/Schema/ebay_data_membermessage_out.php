<?php

namespace App\Schema;

class ebay_data_membermessage_out
{
	const TABLE_NAME = 'ebay_data_membermessage_out';
	const kMemberMessageOut = 'kMemberMessageOut';
	const ItemID = 'ItemID';
	const EmailCopyToSender = 'EmailCopyToSender';
	const Body = 'Body';
	const DisplayToPublic = 'DisplayToPublic';
	const MessageID = 'MessageID';
	const MessageType = 'MessageType';
	const QuestionType = 'QuestionType';
	const ParentMessageID = 'ParentMessageID';
	const RecipientID = 'RecipientID';
	const Subject = 'Subject';
	const cStatus = 'cStatus';
	const Sent = 'Sent';

	/** @var int kMemberMessageOut */
	public $kMemberMessageOut;

	/** @var string ItemID */
	public $ItemID;

	/** @var int EmailCopyToSender */
	public $EmailCopyToSender;

	/** @var string Body */
	public $Body;

	/** @var int DisplayToPublic */
	public $DisplayToPublic;

	/** @var string MessageID */
	public $MessageID;

	/** @var string MessageType */
	public $MessageType;

	/** @var string QuestionType */
	public $QuestionType;

	/** @var string ParentMessageID */
	public $ParentMessageID;

	/** @var string RecipientID */
	public $RecipientID;

	/** @var string Subject */
	public $Subject;

	/** @var string cStatus */
	public $cStatus;

	/** @var string Sent */
	public $Sent;
}
