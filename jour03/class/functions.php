<?php
require_once 'Student.php'; 
require_once 'Grade.php';
require_once 'Floor.php';
require_once 'Room.php';

function getDatabaseConnection(): PDO {
    $dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
    $username = 'root';
    $password = ''; 
    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}

function findOneStudent(int $id): ?Student {
    $pdo = getDatabaseConnection();
    $query = 'SELECT * FROM student WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        return new Student(
            $data['id'],
            $data['grade_id'],
            $data['email'],
            $data['fullname'],
            $data['birthdate'] ? new DateTime($data['birthdate']) : null,
            $data['gender']
        );
    }
    return null;
}

function findOneGrade(int $id): ?Grade {
    $pdo = getDatabaseConnection();
    $query = 'SELECT * FROM grade WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        return new Grade(
            $data['id'],
            $data['level'],
            $data['description'],
            $data['start_date'] ? new DateTime($data['start_date']) : null
        );
    }
    return null;
}

function findOneFloor(int $id): ?Floor {
    $pdo = getDatabaseConnection();
    $query = 'SELECT * FROM floor WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        return new Floor(
            $data['id'],
            $data['name'],
            $data['level']
        );
    }
    return null;
}

function findOneRoom(int $id): ?Room {
    $pdo = getDatabaseConnection();
    $query = 'SELECT * FROM room WHERE id = :id';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($data) {
        return new Room(
            $data['id'],
            $data['floor_id'],
            $data['name'],
            $data['capacity']
        );
    }
    return null;
}
?>
