
<?php

require_once 'connexion.php';

try {
    $sql = "CREATE TABLE IF NOT EXISTS comptadministarateur (
        loginadmin  VARCHAR(10) PRIMARY KEY,
        motdepasse VARCHAR(10),
        nom VARCHAR(20),
        prenom VARCHAR(20) 
    );
    CREATE TABLE  IF NOT EXISTS Filiere ( 
        id_filiere VARCHAR(5) PRIMARY KEY,
        intitule VARCHAR(20),
        nombreGroup INT(11) 
    );

    CREATE TABLE  IF NOT EXISTS stagiaire (
        idstagiaire INT(11) PRIMARY KEY,
        id_filiere VARCHAR(5),
        nom VARCHAR(20),
        prenom VARCHAR(20),
        DateN DATE, 
        photo_profil TEXT,
        FOREIGN KEY (id_filiere) REFERENCES Filiere(id_filiere) 
    );

  
    ";
    
    $pdo->exec($sql);
    
    echo "Les tables ont été créées avec succès.";
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
}
?>






