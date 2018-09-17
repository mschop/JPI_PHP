<?php

namespace App\Schema;

class ebay_data_membermessage_in
{
	const TABLE_NAME = 'ebay_data_membermessage_in';
	const kMemberMessageIn = 'kMemberMessageIn';
	const ItemID = 'ItemID';
	const CreationDate = 'CreationDate';
	const QuestionBody = 'QuestionBody';
	const QuestionDisplayToPublic = 'QuestionDisplayToPublic';
	const QuestionMessageID = 'QuestionMessageID';
	const QuestionMessageType = 'QuestionMessageType';
	const QuestionQuestionType = 'QuestionQuestionType';
	const QuestionRecipientID = 'QuestionRecipientID';
	const QuestionSenderID = 'QuestionSenderID';
	const QuestionSubject = 'QuestionSubject';
	const Status = 'Status';

	/** @var int kMemberMessageIn */
	public $kMemberMessageIn;

	/** @var string ItemID */
	public $ItemID;

	/** @var string CreationDate */
	public $CreationDate;

	/** @var string QuestionBody */
	public $QuestionBody;

	/** @var int QuestionDisplayToPublic */
	public $QuestionDisplayToPublic;

	/** @var string QuestionMessageID */
	public $QuestionMessageID;

	/** @var string QuestionMessageType */
	public $QuestionMessageType;

	/** @var string QuestionQuestionType */
	public $QuestionQuestionType;

	/** @var string QuestionRecipientID */
	public $QuestionRecipientID;

	/** @var string QuestionSenderID */
	public $QuestionSenderID;

	/** @var string QuestionSubject */
	public $QuestionSubject;

	/** @var int Status */
	public $Status;
}
