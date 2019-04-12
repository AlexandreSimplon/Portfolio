<div id="presentation" class="competences center blue darken-2">
    <h3 class="black-text accent-4 competences1">Projets</h3>
</div>

<div class="row">
    <!-- <div class='col s12 m6 l6'> -->

<?php
$reponse = $bdd->query('SELECT * FROM projets');

while ($donnees = $reponse->fetch())
{

echo"



    <div class='card medium col s12 m6 l3 '>
        <div class='card-image'>
            <img src='".$donnees['img']."'>
        </div>
        <div class='card-content'>
            <span class='card-title'>".$donnees['titre']."</span>
            <p>".$donnees['description']."</p>
        </div>
        <div class='card-action'>
            <a href='#'>Link</a>
        </div>
    </div>



    ";}

$reponse->closeCursor();
?>
        
    <!-- </div> -->
</div>