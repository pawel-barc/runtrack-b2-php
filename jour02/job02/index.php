<?php

$dsn = 'mysql:host=localhost;dbname=lp_official';
$username = 'root';
$password = ''; 
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

function find_one_student(string $email): array {
    global $pdo;
    $query = 'SELECT * FROM student WHERE email = :email';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
/**A shorter, less safe version
 * 
function find_one_student (string $email): array {
global $pdo;
$query = "SELECT * FROM student WHERE email = '$email'";
$stmt $pdo->query($query);
return $stmt->fetch(PDO::FETCH_ASSOC);
}
 */

$student = [];
if (isset($_GET['input-email-student']) && !empty($_GET['input-email-student'])) {
    $email = $_GET['input-email-student'];
    $student = find_one_student($email);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Student</title>
</head>
<body>
    <h1>Find Student by Email</h1>
    
    <form method="get" action="">
        <label for="input-email-student">Email:</label>
        <input type="text" id="input-email-student" name="input-email-student" required>
        <button type="submit">Search</button>
    </form>

    <?php if ($student): ?>
        <h2>Student Information</h2>
        <table border="1">
            <thead>
                <tr>
                    <?php foreach (array_keys($student) as $key): ?>
                        <th><?php echo htmlspecialchars($key); ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($student as $value): ?>
                        <td><?php echo htmlspecialchars($value); ?></td>
                    <?php endforeach; ?>
                </tr>
            </tbody>
        </table>
    <?php elseif (isset($_GET['input-email-student'])): ?>
        <p>No student found with this email.</p>
    <?php endif; ?>
</body>
</html>
