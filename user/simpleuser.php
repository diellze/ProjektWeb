<?php
include_once 'person.php';

class SimpleUser extends Person
{
    private $email;
    private $emailk;
    private $password;
    private $passwordk;
    public function __construct($username,  $lastname,  $role, $email, $emailk,$password,$passwordk)
    {
        parent::__construct($username, $lastname, $role);
        $this->email = $email;
        $this->emailk = $emailk;
        $this->password = $passwordk;
    }

    public function setSession()
    {
        $_SESSION["role"] = "0";
        $_SESSION['roleName'] = "SimpleUser";
    }

    public function setCookie()
    {
        setcookie("username", $this->getUsername(), time() + 2 * 24 * 60 * 60);
    }

    
    public function getUsername()
    {
        return $this->username;
    }
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getEmailk()
    {
        return $this->emailk;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPasswordk()
    {
        return $this->passwordk;
    }
    public function getRole()
    {
        return $this->role;
    }
}
