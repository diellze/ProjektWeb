<?php
include_once 'adminuser.php';
//include_once 'simpleuser.php';
require_once 'userRepository.php';
session_start();
//main
if (isset($_POST['loginbutton'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} else if (isset($_POST['submit'])) {
    $register = new RegisterLogic($_POST);
    $register->insertData();
} else {
    header("Location:../views/index.php");
}

class LoginLogic
{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['Emri'];
        $this->password = $formData['password'];
    }

    public function verifyData()
    {
        if ($this->variablesNotDefinedWell($this->username, $this->password)) {
            echo '1';
            header("Location:../views/index.php");
        } else if ($this->usernameAndPasswordCorrect($this->username, $this->password)) {
            echo '2';
            header('Location:../views/home.php');
        } else {
            echo '3';
            header("Location:../views/index.php");
        }
    }

    private function variablesNotDefinedWell($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function usernameAndPasswordCorrect($username, $password)
    {
        $repository = new userRepository();
        $user = $mapper->getUserByUsername($username);
        if ($user == null || count($user) == 0) return false;
        else if (password_verify($password, $user['Pasword'])) {
            //$username,  $lastname,  $role, $email, $emailk, $password, $passwordk
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['lastname'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else return false;
    }
}

class RegisterLogic
{
    private $username = "";
    private $lastname = "";
    private $email = "";
    private $emailk = "";
    private $password = "";
    private $passwordk = "";

    public function __construct($formData)
    {
        $this->username = $formData['emri'];
        $this->lastname = $formData['mbiemri'];
        $this->email = $formData['email'];
        $this->emailk = $formData['emailk'];
        $this->password = $formData['password'];
        $this->passwordk = $formData['passwordk'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username, $this->password, 25, 0, $this->userLastName);

        $mapper = new UserRepository();
        $mapper->insertUser($user);
        header("Location:../pages/index.php");
    }
}