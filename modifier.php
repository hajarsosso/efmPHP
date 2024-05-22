<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
  max-width: 400px;
  margin: 40px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  margin-top: 0;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"], input[type="date"] {
  width: 100%;
  height: 40px;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

.retour {
  text-decoration: none;
  color: #337ab7;
}

.retour:hover {
  color: #23527c;
}
    </style>
</head>
<body>
<form>
  <h2>Modifier un Stagiaire</h2>
  <p>Veuillez remplir tous les champs</p>
  <label for="nom">NOM</label>
  <input type="text" id="nom" value="Nazine"><br><br>
  <label for="prenom">PRÉNOM</label>
  <input type="text" id="prenom" value="Abdessamad"><br><br>
  <label for="dateNaissance">DATE NAISSANCE</label>
  <input type="date" id="dateNaissance" value="2003-01-02"><br><br>
  <label for="filiere">FILIÈRE</label>
  <input type="text" id="filiere" value="Développement Digita"><br><br>
  <input type="submit" value="MODIFIER">
  <a href="#" class="retour">Retour</a>
</form>
</body>
</html>


<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the updated information from the form
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$photo_profil = $_POST['photo_profil'];
$filiere = $_POST['filiere'];

// Update the information in the database
$sql = "UPDATE stagiaires SET nom='$nom', prenom='$prenom', date_naissance='$date_naissance', photo_profil='$photo_profil', filiere='$filiere' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// Close the connection
$conn->close();

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the trainee's id from the URL parameter
$id = $_GET['id'];

// Display a confirmation message
echo "Are you sure you want to delete this trainee?<br>";
echo "<a href='supprimer_stagiaire.php?id=$id'>Yes</a> | <a href='administrateur.php'>No</a>";

// If the administrator confirms the deletion, delete the trainee's information from the database
if (isset($_GET['id'])) {
  $sql = "DELETE FROM stagiaires WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Trainee deleted successfully";
  } else {
    echo "Error deleting trainee: " . $conn->error;
  }
}

// Close the connection
$conn->close();

// Destroy the session
session


?>