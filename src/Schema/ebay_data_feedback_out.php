<?php

namespace App\Schema;

class ebay_data_feedback_out
{
	const TABLE_NAME = 'ebay_data_feedback_out';
	const kFeedbackOut = 'kFeedbackOut';
	const ItemID = 'ItemID';
	const TargetUser = 'TargetUser';
	const CommentText = 'CommentText';
	const CommentType = 'CommentType';
	const TransactionID = 'TransactionID';
	const FeedbackID = 'FeedbackID';
	const Sent = 'Sent';
	const COLUMN_NAMES = [
		'kFeedbackOut',
		'ItemID',
		'TargetUser',
		'CommentText',
		'CommentType',
		'TransactionID',
		'FeedbackID',
		'Sent',
	];
	const COLUMN_TYPES = [
		'kFeedbackOut' => 'int',
		'ItemID' => 'varchar',
		'TargetUser' => 'varchar',
		'CommentText' => 'varchar',
		'CommentType' => 'varchar',
		'TransactionID' => 'varchar',
		'FeedbackID' => 'varchar',
		'Sent' => 'char',
	];

	/** @var int kFeedbackOut */
	public $kFeedbackOut;

	/** @var string ItemID */
	public $ItemID;

	/** @var string TargetUser */
	public $TargetUser;

	/** @var string CommentText */
	public $CommentText;

	/** @var string CommentType */
	public $CommentType;

	/** @var string TransactionID */
	public $TransactionID;

	/** @var string FeedbackID */
	public $FeedbackID;

	/** @var string Sent */
	public $Sent;
}
