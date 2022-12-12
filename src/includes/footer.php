<?php

require __DIR__ . '/db.php';

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('facebook'));
$fb = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('twitter'));
$tw = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('instagram'));
$ig = $statement->fetchColumn();

?>
<footer class="text-center mt-5">
  Copyright &copy; 2022
</footer>