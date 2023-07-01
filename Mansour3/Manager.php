<?php
namespace App\Managers;

include './Student.php';
include './Loggable.php';
use App\Entities\Student;
class Manager
{
    public static $arrOfStudent = [];
    use \App\Traits\Loggable;

    public function __construct(...$arrOfStudent)
    {
        self::$arrOfStudent = $arrOfStudent;
    }
    public function AddStudent(string $name, string $email, Array $courses)
    {
        $student = new Student($name, $email, $courses);
        self::$arrOfStudent[] =$student;
        $this->logg("Add a student with name: $name and Id = " . $student->getId());
        return true;
    }

    public function retrieveStudent(int $id) {
        foreach(self::$arrOfStudent as $n){
            if($n->getId() == $id){
                echo "The name of student is " . $n->getName();
                return true;
            }
        }
        echo 'Not found';
        return false;
    }

    public function removeStudent(int $id)
    {
        $counter = 0;
        foreach(self::$arrOfStudent as $n){
            $counter++;
            if($n->getId() == $id){
                unset(self::$arrOfStudent[$counter]);
                $this->logg("The student with Id = $id has been removed");
                return true;
            }
        }
        echo 'Not found';
        return false;
    }
    public function updateStudent(int $id, string $name, string $email)
    {
        foreach(self::$arrOfStudent as $n){
            if($n->getId() == $id){
                $n->getName = $name;
                $n->getEmail = $email;
                $this->logg("The student with Id = $id was apdated");
                return true;
            }
        }
        echo 'Not found';
        return false;
    }
}


?>