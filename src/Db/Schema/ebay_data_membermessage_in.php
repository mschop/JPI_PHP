<?php

namespace App\Db\Schema;

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
	const COLUMN_NAMES = [
		'kMemberMessageIn',
		'ItemID',
		'CreationDate',
		'QuestionBody',
		'QuestionDisplayToPublic',
		'QuestionMessageID',
		'QuestionMessageType',
		'QuestionQuestionType',
		'QuestionRecipientID',
		'QuestionSenderID',
		'QuestionSubject',
		'Status',
	];
	const COLUMN_DEFINITIONS = [
		'kMemberMessageIn' => [
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
		'CreationDate' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 30,
			'characterSetName' => 'iso_1',
		],
		'QuestionBody' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => -1,
			'characterSetName' => 'iso_1',
		],
		'QuestionDisplayToPublic' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
		'QuestionMessageID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionMessageType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionQuestionType' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionRecipientID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionSenderID' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'QuestionSubject' => [
			'type' => 'varchar',
			'phpType' => 'string',
			'isNullable' => true,
			'hasDefault' => false,
			'characterMaximumLength' => 255,
			'characterSetName' => 'iso_1',
		],
		'Status' => [
			'type' => 'tinyint',
			'phpType' => 'int',
			'isNullable' => true,
			'hasDefault' => true,
			'characterMaximumLength' => null,
			'characterSetName' => null,
		],
	];

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
