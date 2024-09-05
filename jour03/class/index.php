<?php

require_once 'Student.php';
require_once 'Grade.php';
require_once 'Room.php';
require_once 'Floor.php';

$student1 = new Student();
echo "Student 1:\n";
echo "ID: " . $student1->getId() . "<br>";
echo "Grade ID: " . $student1->getGradeId() . "<br>";
echo "Email: " . $student1->getEmail() . "<br>";
echo "Full Name: " . $student1->getFullname() . "<br>";
echo "Birthdate: " . ($student1->getBirthdate() ? $student1->getBirthdate()->format('Y-m-d') : 'N/A') . "\n";
echo "Gender: " . $student1->getGender() . "<br><br>";

$birthdate = new DateTime('2000-01-01');
$student2 = new Student(1, 2, 'john.doe@example.com', 'John Doe', $birthdate, 'Male');
echo "Student 2:<br>";
echo "ID: " . $student2->getId() . "<br>";
echo "Grade ID: " . $student2->getGradeId() . "<br>";
echo "Email: " . $student2->getEmail() . "<br>";
echo "Full Name: " . $student2->getFullname() . "<br>";
echo "Birthdate: " . $student2->getBirthdate()->format('Y-m-d') . "<br>";
echo "Gender: " . $student2->getGender() . "<br>";

$grade = new Grade(1, 8, "Bachelor 1", new DateTime("2023-01-09"));
echo "Grade: \n";
echo "ID: " . $grade->getId() . "<br>";
echo "Level: " . $grade->getLevel() . "<br>";
echo "Description: " . $grade->getDescription() . "<br>";
echo "Start Date: " . $grade->getStartDate()->format('Y-m-d') . "<br><br>";

$room = new Room(1, 1, "RDC Food and Drinks", 90);
echo "Room: \n";
echo "ID: " . $room->getId() . "<br>";
echo "Floor ID: " . $room->getFloorId() . "<br>";
echo "Name: " . $room->getName() . "\n";
echo "Capacity: " . $room->getCapacity() . "<br><br>";

$floor = new Floor(1, "Rez-de-chaussée", 0);
echo "Floor: \n";
echo "ID: " . $floor->getId() . "<br>";
echo "Name: " . $floor->getName() . "<br>";
echo "Level: " . $floor->getLevel() . "<br>";
?>

