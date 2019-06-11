<?php

$pdo = new PDO("mysql:host=localhost;dbname=wikies", "thibault", "monpassword");

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();

