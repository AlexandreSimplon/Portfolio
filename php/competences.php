<div class="competences center blue darken-2">
    <h3 class="black-text accent-4 competences1">Compétences</h3>
</div>

<div class="center progression"><br>
<?php
$reponse = $bdd->query('SELECT * FROM competences');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){

echo"
    <strong>".$donnees['titre']."</strong>
    <div class='container'>
        <div style='width: ".$donnees['pourcentage'].";background-color: ".$donnees['background_div'].";' class='skills'>".$donnees['pourcentage']."</div>
    </div><br>
";}
?>
</div>