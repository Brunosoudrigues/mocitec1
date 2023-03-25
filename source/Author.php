<?php
require __DIR__ . "/User.php";

class Author extends User {
    private $rg;
    private $address;
    private $school;
    
    public function __construct($name = null, $email = null, $password = null, $rg = null, $address = null, $school = null) {
        parent::__construct($name, $email, $password);
        $this->rg = $rg;
        $this->address = $address; 
        $this->school = $school;
    }
    
    public function setRg(string $rg) {
        $this->rg = $rg;
    }
    
    public function setAddress(string $address) {
        $this->address = $address;
    }
    
    public function setSchool(string $school) {
        $this->school = $school;
    }
    
    public function getRg() {
        return $this->rg;
    }
    
    public function getAddress() {
        return $this->address;
    }
    
    public function getSchool() {
        return $this->school;
    }
}
