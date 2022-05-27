<?php

namespace APP\classes;

class Hello
{
public $message;
public function __construct()
{
    $this->message='Hello';
}
public function index()
{
    header('Location: action.php?page=home');
}
}