<?php

$pdo = new PDO("mysql:host=localhost;dbname=wikies", "thibault", "monpassword");

$user = $pdo->query('SELECT * FROM user')->fetchAll();