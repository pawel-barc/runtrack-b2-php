<?php

require_once 'Student.php';
require_once 'Grade.php';
require_once 'Room.php';
require_once 'Floor.php';

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

$grade = new Grade(1, 8, "Bachelor 1", new DateTime("2023-01-09"));
echo "Grade: \n";
echo "ID: " . $grade->getId() . "\n";
echo "Level: " . $grade->getLevel() . "\n";
echo "Description: " . $grade->getDescription() . "\n";
echo "Start Date: " . $grade->getStartDate()->format('Y-m-d') . "\n\n";

$room = new Room(1, 1, "RDC Food and Drinks", 90);
echo "Room: \n";
echo "ID: " . $room->getId() . "\n";
echo "Floor ID: " . $room->getFloorId() . "\n";
echo "Name: " . $room->getName() . "\n";
echo "Capacity: " . $room->getCapacity() . "\n\n";

$floor = new Floor(1, "Rez-de-chaussée", 0);
echo "Floor: \n";
echo "ID: " . $floor->getId() . "\n";
echo "Name: " . $floor->getName() . "\n";
echo "Level: " . $floor->getLevel() . "\n";
?>
?>
