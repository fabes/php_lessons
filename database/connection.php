<?php
$user = 'root';
$pass = '';
$database_name = 'php_lessons';

try {
    $db = new PDO('mysql:host=localhost;dbname='.$database_name, $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>