<?php

/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 11/13/14
 * Time: 12:29 PM
 */
class Student extends CI_Model
{

    public function getById()
    {
        // just some dummy data for now
        return array('UG', 'Ly', 'Zoltan', 'BSc Computer Science');
    }

    public function getById_xml($sid)
    {
        // create DOMDocument object
        $root = new DOMDocument;
        // create root student node and add it to document DOM
        $student = $root->createElement("student");
        $root->appendChild($student);
        // now create firstname and lastname nodes and add them to root student node
        $firstname = $root->createElement("firstname", "Ly");
        $lastname = $root->createElement("lastname", "Zoltan");
        $student->appendChild($firstname);
        $student->appendChild($lastname);
        return $root;
    }
}