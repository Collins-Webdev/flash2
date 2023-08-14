<?php
try {
    $access = new PDO("mysql:host=localhost;dbname=flash;charset=utf8", "root", ""); // se rappeler de remplacer 'localhost' par le nom de domaine du site une fois hébergé; 'root' par le nom d'admin de la base de donnée; et le ' "" ' qui suit doit contenir le mot de passe de l'admin.//
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting
} catch (Exception $e) {
    die("Connection failed: " . $e->getMessage());
}
?>