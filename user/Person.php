<?php

abstract class Person
{
    protected $username;
    protected $lastname;
    protected $role;

    function __construct($username, $lastname, $role)
    {
        $this->username = $username;
        $this->lastname = $lastname;
        $this->role = $role;
    }

    abstract protected function setSession();
    abstract protected function setCookie();
}
