<?php
/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 12/9/14
 * Time: 9:24 AM
 */

class StudentData {
    private  $f_name;
    private  $l_name;

    public function getLName()
    {
        return $this->l_name;
    }

    public function setLName($l_name)
    {
        $this->l_name = $l_name;
    }

    public function getFName()
    {
        return $this->f_name;
    }

    public function setFName($f_name)
    {
        $this->f_name = $f_name;
    }

}