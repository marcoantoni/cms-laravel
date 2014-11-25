<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class Usuario extends Eloquent implements UserInterface, RemindableInterface {
 
    protected $table  = 'usuarios';
    protected $hidden = array('senha');
 

    public function getId()
    {
      return $this->id;
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
 
    public function getAuthPassword()
    {
        return $this->senha;
    }
 
    public function getReminderEmail()
    {
        return $this->email;
    }
        
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
 
}
