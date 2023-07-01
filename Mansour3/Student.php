<?php
namespace App\Entities;

include './Course.php';
class Student
{
    private readonly int $Id;
    private static int $counter = 1;
    private string $Name;
    private string $Email;
    private Array $courses;
    public function __construct(string $name, string $email , ...$courses)
    {
        $this->Id = self::$counter++;
        $this->Name = $name;
        $this->Email = $email;
        $this->courses = $courses;
    }

    public function getId(){
        return $this->Id;
    }
    public function getName(){
        return $this->Name;
    }

    public function getEmail(){
        return $this->Email;
    }

    public function getCourses(){
        return $this->courses;
    }


    public function setName(string $name){
        $this->Name = $name;
    }

    public function setEmail(string $email){
        $this->Email = $email;
    }

    public function setCourses(Array $courses){
        $this->courses = $courses;
    }
    
}


?>