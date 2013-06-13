<?php

class MessageController extends BaseController {

    public function getIndex()
    {
        return false;
    }
    
    public function getEESend()
    {        
        return View::make('hello'); 
    }
    
    public function getSend()
    {   
        $user = Auth::user();
        
        if ($user) {
            $from_id = $user->id;
            
            $to_id = Input::get('to');
            $message = Input::get('message');
            
            //$message = new Message;
            
            //$message->from_id = $from_id;
            //$message->to_id   = $to_id;
            //$message->message = $message;
            
            $msg = Message::create(array(
                'from_id' => $from_id,
                'to_id'   => $to_id,
                'message' => $message
            ));
            
            //$message->save();
            
            $result = array(
                'status' => 1
            );
        } else {
            $result = array(
                'status' => 0,
                'error' => 'Access denied'
            );
        }
         
        return json_encode($result); 
    }

}