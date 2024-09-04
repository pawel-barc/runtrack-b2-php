<?php

$host = 'localhost';
$dbname = 'lp_official';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

function find_all_students_grades(): array {
    global $pdo;

    $query = "
        SELECT 
            s.email, 
            s.fullname, 
            g.name AS grade_name
        FROM 
            student s
        JOIN 
            grade g ON s.grade_id = g.id
    ";

    $stmt = $pdo->query($query);

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$students_grades = find_all_students_grades();
var_dump($students_grades);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The student list</title>
</head>
<body>
    <h1>The student list and the grades</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>Full first and last name</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($students_grades)): ?>
                <?php foreach ($students_grades as $student): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($student['email']); ?></td>
                        <td><?php echo htmlspecialchars($student['fullname']); ?></td>
                        <td><?php echo htmlspecialchars($student['grade_name']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No data to display.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>