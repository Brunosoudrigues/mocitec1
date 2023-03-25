<?php
class User 
{
    private $name;
    private $email;
    private $password;

    public function __construct(string $name, string $email, string $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function setName(string $name){
        $this->name = $name;
    }
    
    public function setEmail(string $email){
        $this->email = $email;
    }
    
    public function setPassword(string $password){
        $this->password = $password;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPassword(){
        return $this->password;
    }
}
