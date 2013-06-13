<?php

class Message extends Eloquent {

    protected $table = 'user_messages';
    
    public function from()
    {
        return $this->belongsTo('User', 'from_id'); 
    }

    public function to()
    {
        return $this->belongsTo('User', 'to_id'); 
    }
    
}