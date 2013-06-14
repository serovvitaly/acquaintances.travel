<?php

class SearchController extends BaseController {
    
    public function postDo()
    {
        $data = Input::all();
        
        print_r($data);
    }
    
}