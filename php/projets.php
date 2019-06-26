<div id="projets" class="competences center blue darken-2">
    <h3 class="black-text accent-4 competences1">Projets</h3>
</div>

<div class="row">

<?php
$reponse = $bdd->query('SELECT * FROM projets');

while ($donnees = $reponse->fetch())
{

echo"

    <div class='card medium col s12 m6 l4 z-depth-4 carteImages'>
    
        <div class='card-image'>
            <img class='imagesdelacarte' src='".$donnees['img']."'>
        </div>
        <div class='card-content center centerletextdvi'>
            <p><span class='card-title'>".$donnees['titre']."</span>".$donnees['description']."</p>
        </div>
        <div class='card-action center'>
            <a href='".$donnees['link_projet']."' target='_blank' >Lien ici</a>
        </div>
    </div>


    ";}

$reponse->closeCursor();
?>
        
</div>