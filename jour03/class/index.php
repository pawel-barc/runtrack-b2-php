<?php

require_once 'Student.php';

$student1 = new Student();
echo "Student 1:\n";
echo "ID: " . $student1->getId() . "\n";
echo "Grade ID: " . $student1->getGradeId() . "\n";
echo "Email: " . $student1->getEmail() . "\n";
echo "Full Name: " . $student1->getFullname() . "\n";
echo "Birthdate: " . ($student1->getBirthdate() ? $student1->getBirthdate()->format('Y-m-d') : 'N/A') . "\n";
echo "Gender: " . $student1->getGender() . "\n\n";

$birthdate = new DateTime('2000-01-01');
$student2 = new Student(1, 2, 'john.doe@example.com', 'John Doe', $birthdate, 'Male');
echo "Student 2:\n";
echo "ID: " . $student2->getId() . "\n";
echo "Grade ID: " . $student2->getGradeId() . "\n";
echo "Email: " . $student2->getEmail() . "\n";
echo "Full Name: " . $student2->getFullname() . "\n";
echo "Birthdate: " . $student2->getBirthdate()->format('Y-m-d') . "\n";
echo "Gender: " . $student2->getGender() . "\n";
?>
