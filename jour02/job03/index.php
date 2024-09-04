<?php
$dsn = 'mysql:host=localhost;dbname=lp_official;charset=utf8';
$username = 'root'; 
$password = '';      
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO($dsn, $username, $password, $options);

function insert_student(string $email, string $fullname, string $gender, string $birthdate, int $grade_id): void {
    global $pdo;
    
    $query = 'INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :grade_id)';
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':fullname', $fullname, PDO::PARAM_STR);
    $stmt->bindParam(':gender', $gender, PDO::PARAM_STR);
    $stmt->bindParam(':birthdate', $birthdate, PDO::PARAM_STR);
    $stmt->bindParam(':grade_id', $grade_id, PDO::PARAM_INT);
    
    $stmt->execute();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['input-email'];
    $fullname = $_POST['input-fullname'];
    $gender = $_POST['input-gender'];
    $birthdate = $_POST['input-birthdate'];
    $grade_id = (int)$_POST['input-grade_id'];

    insert_student($email, $fullname, $gender, $birthdate, $grade_id);

    echo "Student added successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Student</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form method="post">
        <label for="input-email">Email:</label>
        <input type="email" name="input-email" id="input-email" required><br>

        <label for="input-fullname">Full Name:</label>
        <input type="text" name="input-fullname" id="input-fullname" required><br>

        <label for="input-gender">Gender:</label>
        <select name="input-gender" id="input-gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>

        <label for="input-birthdate">Birthdate:</label>
        <input type="date" name="input-birthdate" id="input-birthdate" required><br>

        <label for="input-grade_id">Grade ID:</label>
        <input type="number" name="input-grade_id" id="input-grade_id" required><br>

        <button type="submit">Add Student</button>
    </form>
</body>
</html>
