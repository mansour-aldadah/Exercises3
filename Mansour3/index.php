<?php

include './Manager.php';

use App\Managers\Manager;

$manager = new Manager();

// Adding students
$manager->addStudent('John Doe', 'john.doe@example.com', ['Mathematics', 'Physics']);
$manager->addStudent('Jane Smith', 'jane.smith@example.com', ['Chemistry', 'Biology']);

echo '<br />';
// Retrieving student information
$manager->retrieveStudent(1); // Output: The name of the student is John Doe
// Updating student details
$manager->updateStudent(2, 'Jane Brown', 'jane.brown@example.com');

// Removing a student
$manager->removeStudent(1);

// Accessing the log of changes
$changes = Manager::$changes;
echo '<pre>';
print_r($changes);
echo '<pre/>';


$arr  = Manager::$arrOfStudent;
echo '<pre>';
print_r($arr);
echo '<pre/>';