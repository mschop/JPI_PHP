<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kMemberMessageOut',
		'ItemID',
		'EmailCopyToSender',
		'Body',
		'DisplayToPublic',
		'MessageID',
		'MessageType',
		'QuestionType',
		'ParentMessageID',
		'RecipientID',
		'Subject',
		'cStatus',
		'Sent',
	];
	const COLUMN_DEFINITIONS = [
		'kMemberMessageOut' => [
			'type' => 'int',
			'phpType' => 'int',
			'isNullable' => false,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'ItemID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'EmailCopyToSender' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'Body' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'DisplayToPublic' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'MessageID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'MessageType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'ParentMessageID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'RecipientID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Subject' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'cStatus' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => false,
			'hasDefault' => true,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Sent' => [
			'type' => 'char',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 1,
			'characterSetName' => 'iso_1',
		],
	];

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
