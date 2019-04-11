<footer class="page-footer grey darken-3">
                <div class="row">
                    <div class="col offset-l1 l3 m3 s6">
                        <h5 class="yellow-text monnom">DOUCHET Alexandre</h5>
                        <p class="soutitre blue-grey-text">Développeur Fullstack WEB</p>
                    </div>

                    <div class="col offset-l1 l4 m5 s8">
                        <h5 class="orange-text text-lighten-2 contacter">Me Contacter</h5>
<?php
$reponse = $bdd->query('SELECT * FROM infos');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch()){
echo"
                        <p class='soutitre grey-text'><img src='/img/icons8-home-page-15.png'>".$donnees['adresse']." ".$donnees['code_p']."<br>".$donnees['ville']."<br><img src='/img/icons8-nokia-3310-13.png'></i>".$donnees['telephone']."<br><img src='/img/icons8-email-13.png'> ".$donnees['mail']."</p>
";}
?>
                    </div>
                    
                    <div class="col offset-l1 l2 offset-m1 m3 s12">
                    <ul class="ulfooter">
                        <h6>Navigation</h6>
                        <li><a class="grey-text text-lighten-2" href="#!">Accueil</a></li>
                        <li><a class="grey-text text-lighten-2" href="#!">Présentation</a></li>
                        <li><a class="grey-text text-lighten-2" href="#!">À propos de moi</a></li>
                        <li><a class="grey-text text-lighten-2" href="#!">Compétences</a></li>
                        <li><a class="grey-text text-lighten-2" href="#!">Expériences</a></li>
                        <li><a class="grey-text text-lighten-2" href="#!">Contact</a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright grey darken-4">
                <div class="container center">
                © 2019 <em>Copyright</em> Portfolio DOUCHET Alexandre
                </div>
        </footer>

<script type="text/javascript" src="/js/bin/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script type="text/javascript" src="/js/modifier/app.js"></script>
<link rel="stylesheet" href="css/app.min.css">
</body>
</html>