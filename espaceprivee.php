<!DOCTYPE html>
<html>
<head>
	<title>Espace privé</title>
	<style>
		/* Add some basic styling to make it look decent */
		body {
			font-family: Arial, sans-serif;
		}
		.profile-container {
			width: 80%;
			margin: 40px auto;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.profile-header {
			background-color: #f0f0f0;
			padding: 10px;
			border-bottom: 1px solid #ddd;
		}
		.profile-header h2 {
			margin-top: 0;
		}
		.profile-info {
			padding: 20px;
		}
		.profile-info label {
			display: block;
			margin-bottom: 10px;
		}
		.profile-info input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		.profile-info input[type="date"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
		}
		.profile-actions {
			margin-top: 20px;
		}
		.profile-actions button {
			background-color: #4CAF50;
			color: #fff;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.profile-actions button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="profile-container">
		<div class="profile-header">
			<h2>Bonjour ALLALI AHMED</h2>
			<a href="#" class="logout">Se déconnecter</a>
		</div>
		<div class="profile-info">
			<label>Nom:</label>
			<input type="text" value="Nazine Amrani" />
			<label>Prénom:</label>
			<input type="text" value="Abdessamad Meriem" />
			<label>Date de Naissance:</label>
			<input type="date" value="2003-01-02" />
			<label>Filière:</label>
			<input type="text" value="Développement Digital" />
			<label>Photo Profil:</label>
			<input type="file" />
		</div>
		<div class="profile-actions">
			<button>Modifier</button>
			<button>Supprimer</button>
			<button>+ Ajouter</button>
		</div>
	</div>
	
	<!-- Additional profiles -->
	<div class="profile-container">
		<div class="profile-header">
			<h2>Outiga Mohamed</h2>
		</div>
		<div class="profile-info">
			<label>Date de Naissance:</label>
			<input type="date" value="2002-12-25" />
			<label>Filière:</label>
			<input type="text" value="Développement Digital" />
		</div>
	</div>
	
	<div class="profile-container">
		<div class="profile-header">
			<h2></h2>
		</div>
		<div class="profile-info">
			<label>Date de Naissance:</label>
			<input type="date" value="2003-05-21" />
			<label>Filière:</label>
			<input type="text" value="Infrastructure Digital" />
		</div>
	</div>
</body>
</html>