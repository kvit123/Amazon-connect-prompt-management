<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use BaoPham\DynamoDb\DynamoDbModel;

class CustomerProfile extends DynamoDbModel {
	//
	protected $guarded = [];
	protected $table = 'customerDB';
	protected $primaryKey = 'phone';

	protected $fillable = array(
		"email",
		"firstName",
		"language",
		"lastMenu",
		"lastName",
		"phone",
		"preferMenu",
		"msg",
	);
}
