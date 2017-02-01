<?php

$bdd = new PDO('mysql:host=localhost;dbname=mon_armoire;charset=utf8','root', 'root');
$reponse = $bdd->query("SELECT * FROM mes_chaussettes");


$donnee = $reponse->fetch();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>SQL</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>


<div class="ui segment">
  <table class="ui celled striped table">
    <thead>
      <tr>
        <th>ID</th>
        <th>pointure</th>
        <th>temp de lavage</th>
        <th>description </th>
        <th>couleur</th>
        <th>date de lavage</th>
<?php      
while ($donnee = $reponse->fetch()){
?>
      </tr></thead>
      <td><?php echo $donnee['id']; ?></td>
       <td><?php echo $donnee['pointure']; ?></td>
        <td><?php echo $donnee['temp_lavage']; ?></td>
        <td><?php echo $donnee['description']; ?></td>
         <td><?php echo $donnee['couleur']; ?></td>
          <td><?php echo $donnee['date_lavage']; ?></td>

<?php 
}

$reponse->closeCursor();
?>
    </table>

  </body>
  </html> 