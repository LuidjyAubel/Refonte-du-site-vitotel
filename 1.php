<!DOCTYPE html>
<html lang="fr">
  <title>Les amis de vitotel</title>
  <meta charset="UTF-8" />
  <meta name="author" content="Luidjy Aubel" />
  <meta
    name="description"
    content="Ceci est le site de l'association des amis de Vitotel"
  />
  <meta name=" robots " content="index, follow" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="style.css" />
  <body>
    <nav>
      <div class="navbar">
        <a href="contact.html" title="Nous contactez"  class="active">Contact</a>
        <a href="agenda.html" title="Notre agenda">Agenda</a>
        <a href="repertoire.html" title="Notre répertoire">Répertoire</a>
        <a href="histoire.html" title="L'Histoire des amis de vitotel"
          >Histoire</a
        >
        <a href="index2.html" title="Information">Information</a>
        <a href="index.html" title="Accueil">Accueil</a>
        <h1 id="title">Les Amis de Vitotel</h1>
      </div>
      </div>
    </nav>
  <main>
    <article> 
      <div class="main">
        <h2 align="center" class="littletitle">Confirmation</h2>
<hr><br>
<?php
  $nom = $_GET['nom'] ;
  $prenom = $_GET['prenom'] ;
  $tel = $_GET['tel'] ;
  $mail = $_GET['mail'] ;
  $message = $_GET['message'] ;
  echo "<b> Votre Nom et votre Prenon :</b> $nom $prenom <br>";
  echo "<b> Votre Numéro de téléphone :</b> $tel <br>";
  echo "<b> Votre Adresse Mail est :</b> $mail <br>";
  echo "<b> Votre message :</b> $message";
  echo "<br><br>";
  echo '<form action="1.php" > ';
  echo '<input type=submit name="submit" value="Envoyer" >';
  echo '<input name="vhidden" type="hidden" value="$nom">';
  echo '</form>';
  echo '<button onclick="goBack()">Retour</button>
<script>
function goBack() {
  window.history.back();
}
</script>';
            // Ecrire dans un fichier

            $fichier = 'Données.txt';
	   file_put_contents($fichier, "Nom : ",FILE_APPEND) ;
	   file_put_contents($fichier, $nom,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Prenom : ",FILE_APPEND) ;
	   file_put_contents($fichier, $prenom,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Téléphone : ",FILE_APPEND) ;
	   file_put_contents($fichier, $tel,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Adresse mail : ",FILE_APPEND) ;
           file_put_contents($fichier, $mail,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;
	   file_put_contents($fichier, "Message : ",FILE_APPEND) ;
	   file_put_contents($fichier, $message,FILE_APPEND) ;
	   file_put_contents($fichier, "\n",FILE_APPEND) ;

?>
<br><br><hr>
</div>
</BODY>
<footer>
      <div class="footer">
        <p class="foot-footer">
          L'église Saint Michel de Vitotel est un site protégé, et l'église est
          classée monument historique depuis 103 ans.
        </p>
        <p class="certif-footer">
          © Créer en HTML, design et code par luidjy Aubel
        </p>
      </div>
    </footer>
</HTML>