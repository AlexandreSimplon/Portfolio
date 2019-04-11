<div id="experiences" class="competences center blue darken-2">
    <h3 class="black-text accent-4 competences1">Experiences</h3>
</div>

<div id="home" class='container'>
    <div class="row paddingaccueil">
<?php
$reponse = $bdd->query('SELECT * FROM experiences');

while ($donnees = $reponse->fetch())
{
$debut = new DateTime($donnees['debut']);
$fin = new Datetime($donnees['fin']);

echo '
    <div class="col s12 m8 offset-m2 l6 offset-l3 divaccueil">
            <div class="card-panel grey lighten-5 z-depth-1">
                <div class="row valign-wrapper">
                <div class="col s2">
                    <img src="'.$donnees['img'].'" alt="image '.$donnees['text'].'" class="circle responsive-img">
                </div>
                <div class="col s1 offset-s1">
                    <span class="black-text">
                        '.$debut->format('Y').'
                    </span>
                </div>

                <div class="col s1">
                    <span class="black-text">
                        '.$fin->format('Y').'
                    </span>
                </div>

                <div class="col s10">
                    <span class="black-text">
                        '.$donnees['text'].'
                    </span>
                </div>
                </div>
            </div>
    </div>
    ';

}

$reponse->closeCursor();
?>
    </div>
</div>


