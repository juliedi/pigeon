<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=julied10_db', "julied10", "Flqq3LiMkw", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    //$db = new PDO('mysql:host=localhost;dbname=pigeon', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    //$db = new PDO('mysql:host=localhost;dbname=benjaming_pigeon', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>