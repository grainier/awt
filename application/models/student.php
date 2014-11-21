<?php
include_once 'StudentData.php';

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
        // return array('UG', 'Ly', 'Zoltan', 'BSc Computer Science');

        /*
        return array(
            'mode' => 'UG',
            'firstname' => 'Ly',
            'lastname' => 'Zoltan',
            'course' => 'BSc Computer Science'
        );
        */

        $student = new StudentData();
        $student->setFirstName("Ly");
        $student->setLastName("Zoltan Smit");
        $student->setLevel(6);

        return $student;

    }

    public function getById_xml($sid)
    {
        // create DOMDocument object
        $root = new DOMDocument;
        // create root student node and add it to document DOM
        $class = $root->createElement("class");

        $student1 = $root->createElement("student");
        $student2 = $root->createElement("student");
        $root->appendChild($class);

        $firstname = $root->createElement("firstname", "Ly");
        $lastname = $root->createElement("lastname", "Zoltan");
        $course = $root->createElement("course", "UG");
        $student1->appendChild($firstname);
        $student1->appendChild($lastname);
        $student1->appendChild($course);

        $firstname = $root->createElement("firstname", "Bob");
        $lastname = $root->createElement("lastname", "Smith");
        $course = $root->createElement("course", "PG");
        $student2->appendChild($firstname);
        $student2->appendChild($lastname);
        $student2->appendChild($course);

        $class->appendChild($student1);
        $class->appendChild($student2);


        return $root;
    }
}