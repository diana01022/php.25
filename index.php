
<?php

$bookstore = 'localhost';
$db = 'bookstore';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$bookstore;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->query('SELECT title FROM books');

?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>

<?php while ($book = $stmt->fetch()) { ?>
<li>

<a href="book.php?id=<?= $book['id'] ?>">
    <?= $book['title']; ?>
</a>
    </li>
 
    <?php } ?>
    </ul>

</body>
</html>