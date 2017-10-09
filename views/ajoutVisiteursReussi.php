<fieldset>
			<?php
				//htmlspecialchars est une fonction qui permet que les caractères taper dans les champs soient affichable mais ne se transforme pas en pop_up.
				echo "Le visiteur " . htmlspecialchars($_POST['prenom']) . " à bien été ajouter à la base de donnée.";
				echo "<br><br>";
				echo "Numéro : " . htmlspecialchars($_POST['idVisiteurs']);
				echo "<br>";
				echo "Nom : " . htmlspecialchars($_POST['nom']);
				echo "<br>";
				echo "Prenom : " . htmlspecialchars($_POST['prenom']);
				echo "<br>";
				echo "Login : " . htmlspecialchars($_POST['login']);
				echo "<br>";
				echo "Mot de passe : " .htmlspecialchars($_POST['mdp']);
				echo "<br>";
				echo "Adresse : " . htmlspecialchars($_POST['adresse']);
				echo "<br>";
				echo "Code postale : " . htmlspecialchars($_POST['cp']);
				echo "<br>";
				echo "Ville : " . htmlspecialchars($_POST['ville']);
				echo "<br> <br>";
			?>
		</fieldset>	