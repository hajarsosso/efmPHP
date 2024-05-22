<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>body {
    font-family: Arial, sans-serif;
}

.add-trainee-container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.add-trainee-container h2 {
    text-align: center;
    margin-bottom: 20px;
}

.add-trainee-container label {
    display: block;
    margin-bottom: 5px;
}

.add-trainee-container input[type="text"],
.add-trainee-container input[type="file"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.add-trainee-container input[type="submit"] {
    width: 100%;
    padding: 8px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.add-trainee-container input[type="submit"]:hover {
    background-color: #45a049;
}</style>
</head>
<body>
<body>

    <div class="add-trainee-container">
        <h2>Ajouter un Stagiaire</h2>
        <form>
            <label for="nom">NOM:</label><br>
            <input type="text" id="nom" name="nom" required><br>
            <label for="prenom">PRÉNOM:</label><br>
            <input type="text" id="prenom" name="prenom" required><br>
            <label for="date-naissance">DATE NAISSANCE (jj/mm/aaaa):</label><br>
            <input type="text" id="date-naissance" name="date-naissance" required><br>
            <label for="photo-profil">PHOTO PROFIL:</label><br>
            <input type="file" id="photo-profil" name="photo-profil" required><br>
            <label for="filiere">FILIÈRE:</label><br>
            <input type="text" id="filiere" name="filiere" value="Développement Digita" required><br>
            <input type="submit" value="AJOUTER">
        </form>
    </div>
</body>
</body>
</html>


<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to retrieve the list of filières
$sql = "SELECT intitule FROM filieres";
$result = mysqli_query($conn, $sql);

// Create the dropdown list
echo "<select name='filiere'>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['intitule'] . "'>" . $row['intitule'] . "</option>";
}
echo "</select>";

// Close the database connection
mysqli_close($conn);
?>
<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the uploaded file
    $file = $_FILES['photo_profil'];

    // Check if the file is valid
    if ($file['error'] == 0) {
        // Move the file to the images folder
        $target_dir = "images/";
        $target_file = $target_dir . basename($file['name']);
        move_uploaded_file($file['tmp_name'], $target_file);
    }
}
?>
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$filiere = $_POST['filiere'];
$photo_profil = $_FILES['photo_profil']['name'];

// Insert the data into the database
$sql = "INSERT INTO stagiaires (nom, prenom, date_naissance, filiere, photo_profil) VALUES ('$nom', '$prenom', '$date_naissance', '$filiere', '$photo_profil')";
if (mysqli_query($conn, $sql)) {
    echo "Stagiaire ajouté avec succès!";
} else {
    echo "Erreur: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$date_naissance = $_POST['date_naissance'];
$filiere = $_POST['filiere'];
$photo_profil = $_FILES['photo_profil']['name'];

// Insert the data into the database
$sql = "INSERT INTO stagiaires (nom, prenom, date_naissance, filiere, photo_profil) VALUES ('$nom', '$prenom', '$date_naissance', '$filiere', '$photo_profil')";
if (mysqli_query($conn, $sql)) {
    echo "Stagiaire ajouté avec succès!";
} else {
    echo "Erreur: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);



header("Location: espace_prive.php");
exit;

?>