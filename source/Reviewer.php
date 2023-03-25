<?php
require __DIR__ . "/User.php";
 class Reviewer extends User {
    private $rg;
    private $address;
    private $link;
    
    public function __construct($name = null, $email = null, $password = null, $rg = null, $address = null, $link = null) {
        parent::__construct($name, $email, $password);
        $this->rg = $rg;
        $this->address = $address; 
        $this->link = $link;
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
    public function setRg(string $rg) {
        $this->rg = $rg;
    }
    
    public function setAddress(string $address) {
        $this->address = $address;
    }
    
    public function setSchool(string $school) {
        $this->school = $link;
    }
    
    public function getRg() {
        return $this->rg;
    }
    
    public function getAddress() {
        return $this->address;
    }
    
    public function getSchool() {
        return $this->link;
    }
}
