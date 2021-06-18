<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use BaoPham\DynamoDb\DynamoDbModel;

class ivrMenu extends DynamoDbModel {
	//
	protected $guarded = [];
	protected $table = 'promptMsg';
	protected $primaryKey = 'index';

}
