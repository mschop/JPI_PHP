<?php

namespace App\Schema;

class ebay_data_feedback_in
{
	const TABLE_NAME = 'ebay_data_feedback_in';
	const kFeedbackIn = 'kFeedbackIn';
	const ItemID = 'ItemID';
	const CommentingUser = 'CommentingUser';
	const CommentingUserScore = 'CommentingUserScore';
	const CommentText = 'CommentText';
	const CommentTime = 'CommentTime';
	const CommentType = 'CommentType';
	const FeedbackID = 'FeedbackID';
	const FeedbackRole = 'FeedbackRole';
	const TransactionID = 'TransactionID';

	/** @var int kFeedbackIn */
	public $kFeedbackIn;

	/** @var string ItemID */
	public $ItemID;

	/** @var string CommentingUser */
	public $CommentingUser;

	/** @var int CommentingUserScore */
	public $CommentingUserScore;

	/** @var string CommentText */
	public $CommentText;

	/** @var string CommentTime */
	public $CommentTime;

	/** @var string CommentType */
	public $CommentType;

	/** @var string FeedbackID */
	public $FeedbackID;

	/** @var string FeedbackRole */
	public $FeedbackRole;

	/** @var string TransactionID */
	public $TransactionID;
}
