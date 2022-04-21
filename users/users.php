<?php

class Users{
    private $id;
    private $emri;
    private $mbiemri;
    private $email;
    private $emailk;
    private $password;
    private $passwordk;


    function __construct($id,$emri,$mbiemri,$email,$emailk,$password,$passwordk){
            $this->id = $id;
            $this->emri = $emri;
            $this->mbiemri = $mbiemri;
            $this->email = $email;
            $this->emailk = $emailk;
            $this->password = $password;
            $this->passwordk = $passwordk;
    }


    function getId(){
        return $this->id;
    }
    function getEmrin(){
        return $this->emri;
    }
    function getMbiemri(){
        return $this->mbiemri;
    }
    function getEmail(){
        return $this->email;
    }
    function getEmailk(){
        return $this->emailk;
    }
    function getPassword(){
        return $this->password;
    }
    function getPasswordk(){
        return $this->passwordk;
    }
}

?>