<?php
$pdo = new PDO('mysql:host=localhost', 'root', '');
if ($pdo->exec('DROP DATABASE IF EXISTS mediatheque') !== false) {
    if ($pdo->exec('CREATE DATABASE mediatheque') !== false) {
        $museumPdo = new PDO('mysql:dbname=mediatheque;host=localhost', 'root', '');
        if ($museumPdo->query(file_get_contents('mediatheque.sql'))) {
          
                echo 'la base de données est crée est remplie';
            }
        } else {
            echo 'Impossible de créer les table<br>';
        }
    } else {
        echo 'Impossible de créer la base<br>';
    }
 














