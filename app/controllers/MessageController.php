<?php

class MessageController extends BaseController {

    public function getIndex()
    {
        return false;
    }
    
    public function getSender()
    {        
        $msg = new Message;
            
        $msg->from_id = 1;
        $msg->to_id   = 2;
        $msg->message = '44444';
        
        $msg->save();
    }
    
    public function postSend()
    {   
        $user = Auth::user();
        
        if ($user) {
            $from_id = $user->id;
            
            $to_id = Input::get('to');
            $message = Input::get('message');
            
            $msg = new Message;
            
            $msg->from_id = $from_id;
            $msg->to_id   = $to_id;
            $msg->message = $message;
            
           /* $msg = Message::create(array(
                'from_id' => $from_id,
                'to_id'   => $to_id,
                'message' => $message
            ));*/
            
            $msg->save();
            
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