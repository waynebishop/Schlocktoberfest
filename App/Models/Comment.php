<?php

namespace App\Models;

class Comment extends DatabaseModel
{
	protected static $tableName = "comments";
	protected static $columns = ['id','user_id','comment','movie_id', 'timestamp'];
	protected static $validationRules = [
										"user_id" => 'numeric,exists:\App\Models\User',
										"movie_id" => 'numeric,exists:\App\Models\Movies',
										"comment" => 'minlength:10,maxlength:1000'
	];

	public function user(){
		return new User($this->user_id);
	}

}