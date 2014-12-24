<?php
/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 12/11/14
 * Time: 11:55 AM
 */

class Student {
    private $name = '';
    private $id = '';
    private $course = '';

    function __construct()
    {
        $this->name = 'Grainier Perera';
        $this->id = '2011114';
        $this->course = 'Software Engineering';
    }

    public function getname () {
        return $this->name;
    }

    public function getid () {
        return $this->id;
    }

    public function getcourse () {
        return $this->course;
    }


} 