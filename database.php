<?php
$host = '127.0.0.1';
$dbname = 'exo_jeu';
$username = 'root';
$password = 'toor';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    // echo "Connexion réussi";
} catch (PDOException $e) {
    die ("Erreur de connexion : " .$e->getMessage());
}

?>
<p><?php echo $pdo->getAttribute(PDO::ATTR_SERVER_VERSION); ?>