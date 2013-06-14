<?php

class ProfileController extends BaseController {

    public $layout = 'base.profile.index';
    
    
    protected function setupLayout()
    {
        parent::setupLayout();
        
        $this->layout->user = Auth::user();
    }
    
    /**
    * Стартовая страница профиля
    */
    public function getIndex()
    {
        $this->layout->content = '';
    }
    
    
    public function getProfile()
    {
        $this->layout->content = View::make('base.profile.pages.profile');
    }
    
    
    public function getSearh()
    {
        $this->layout->content = View::make('base.profile.pages.search');
    }
    
    
    public function getMessages()
    {
        $this->layout->content = View::make('base.profile.pages.messages', array(
            'messages' => Auth::user()->messages()
        ));
    }
    
    public function getSympathy()
    {
        $this->layout->content = View::make('base.profile.pages.sympathy');
    }
    
    public function getAppointments()
    {
        $this->layout->content = View::make('base.profile.pages.appointments');
    }
    
    /**
    * Возвращает профиль пользователя с указанным ID
    * 
    * @param mixed $id
    */
    public function getPerson($id)
    {
        $id = (int) $id;
        
        if ($id <= 0) {
            return Redirect::to('/');
        }
        
        $person = User::find($id);
        
        
        if ($person AND $person->id == Auth::user()->id) {
            $this->getProfile();
        }
        elseif ($person) {
            $this->layout->content = View::make('base.profile.pages.person', array(
                'person' => $person
            ));    
        } else {
            $this->layout->content = View::make('base.profile.pages.404', array(
                'message' => 'Пользователя с таким ID не найдено.'
            ));
        }
        
    }

}