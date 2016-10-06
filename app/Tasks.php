<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getTasks($user_id)
    {
    	return $this->api($user_id)
    		->get();
    }

    public function getTask($id)
    {
    	return $this->id($id)
    		->firstOrFail();
    }

    public function getTaskUser($id, $user_id)
    {
    	return $this->id($id)
    		->userId($user_id)
    		->firstOrFail();
    }

    public function scopeApi($query, $user_id)
    {
    	$query->where(['user_id'=>$user_id]);
    }

    public function scopeUserId($query, $user_id)
    {
    	$query->where(['user_id'=>$user_id]);
    }

    public function scopeId($query, $id)
    {
    	$query->where(['id'=>$id]);
    }
}
