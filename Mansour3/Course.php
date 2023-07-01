<?php
namespace App\Entities;

class Course
{
    private readonly int $Id;
    private static int $counter = 1;
    private string $Name;
    public function __construct(string $name){
        $this->Id = self::$counter++;
        $this->Name = $name;
    }

    public function getId(){
        return $this->Id;
    }
    public function getName(){
        return $this->Name;
    }
    public function setName(string $name){
        $this->Name = $name;
    }
    
}


?>