<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Générateur d'excuses</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="generator.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class = "Grid">
        <form class="formulaire" name="inscription" method="get" action="Générateur-d'excuse.php">
            Genre du professeur :   <br/><input type= "radio" name="genreprof" value="man"> Masculin<br/>
                                    <input type= "radio" name="genreprof" value="woman"> Féminin<br/>
            Nom du professeur :   <input type="text" name="nameprof"><br/>
            Genre de l'élève :  <br/><input type= "radio" name="genreel" value="man"> Masculin<br/>
                                <input type= "radio" name="genreel" value="woman"> Féminin<br/>
            Nom de l'élève :   <input type="text" name="nameel"><br/>
            Classe de l'élève :   <input type="text" name="classeel"><br/>
            Motif de l'excuse : <br/><input type="radio" name="motif" value="devoir"> Devoir non fait<br/>
                                <input type="radio" name="motif" value="etude"> Pas étudier<br/>
                                <input type="radio" name="motif" value="malade"> A été malade<br/>
                                <input type="radio" name="motif" value="absence"> Autre absence<br/>
                                <input type="radio" name="motif" value="nomotif"> Motif non précisé<br/>
            <br/>
            <input type="submit" name="valider" value="Générez votre excuse"/>
            <br/><br/><br/>
            <!-- Ce bouton n'est pas bon sémantiquement parlant du fait de l'intrusion de code js dans le fichier mais dans ce cas ce n'est pas vraiment important! -->
            <input type="button" onclick='window.location.reload(false)' value="Pas satisfait? Réessayez!"/>
        </form>

        <br/><br/>
        
        <?php
            $genreprof = $_GET['genreprof'];
            $nameprof = $_GET['nameprof'];
            $genreel = $_GET['genreel'];
            $nameel = $_GET['nameel'];
            $classeel = $_GET['classeel'];
            $motif = $_GET['motif'];
            $random1 = rand(1, 20);
            $random2 = rand(1, 20);
            $random3 = rand(1, 20);
            $random4 = rand(1, 20);
            $random5 = rand(1, 20);
            $random6 = rand(1, 20);
        ?> 
        <div class = "excuse">
            <?php
                if ($genreprof == "man") {
                    echo "Monsieur $nameprof, ";
                }
                else {
                    echo "Madame $nameprof, ";
                }
            ?> 
            <br/>
            <?php
                if ($genreel == "man" and $classeel != "") {
                    echo "Veuillez excuser mon fils $nameel, de la classe $classeel, ";
                }
                elseif ($genreel == "woman" and $classeel != "") {
                    echo "Veuillez excuser ma fille $nameel, de la classe $classeel, ";
                }
                elseif ($genreel == "man" and $classeel = "") {
                    echo "Veuillez excuser mon fils $nameel, ";
                }
                else {
                    echo "Veuillez excuser ma fille $nameel, ";
                }

                if ($motif == "etude") {
                    switch ($random1) {
                        case 1: 
                            echo "de n'avoir pas su étudier mais un zombie ";
                            break;
                        case 2: 
                            echo "de n'avoir pas su étudier mais le troll érudit ";
                            break;
                        case 3: 
                            echo "de n'avoir pas su étudier mais l'un des gardiens ";
                            break;
                        case 4: 
                            echo "de n'avoir pas su étudier mais un rat mutant ";
                            break;
                        case 5: 
                            echo "de n'avoir pas su étudier mais l'aubergiste ";
                            break;
                        case 6: 
                            echo "de n'avoir pas su étudier mais le bourreau ivre ";
                            break;
                        case 7: 
                            echo "de n'avoir pas su étudier mais un ménestrel moche ";
                            break;
                        case 8: 
                            echo "de n'avoir pas su étudier mais le gobelin de ménage ";
                            break;
                        case 9: 
                            echo "de n'avoir pas su étudier mais un orque d'élite ";
                            break;
                        case 10: 
                            echo "de n'avoir pas su étudier mais le sorcier stagiaire ";
                            break;
                        case 11: 
                            echo "de n'avoir pas su étudier mais un type suspect ";
                            break;
                        case 12: 
                            echo "de n'avoir pas su étudier mais le prisonnier barbu ";
                            break;
                        case 13: 
                            echo "de n'avoir pas su étudier mais l'herboriste ";
                            break;
                        case 14: 
                            echo "de n'avoir pas su étudier mais le chien d'un voisin ";
                            break;
                        case 15: 
                            echo "de n'avoir pas su étudier mais un garde de la ville ";
                            break;
                        case 16: 
                            echo "de n'avoir pas su étudier mais un colporteur ";
                            break;
                        case 17: 
                            echo "de n'avoir pas su étudier mais un aventurier ";
                            break;
                        case 18: 
                            echo "de n'avoir pas su étudier mais le plombier ";
                            break;
                        case 19: 
                            echo "de n'avoir pas su étudier mais l'ingénieur gobelin ";
                            break;
                        case 20: 
                            echo "de n'avoir pas su étudier mais un vieux fou ";
                            break;
                    }
                }
                elseif ($motif == "devoir") {
                    switch($random1) {
                        case 1: 
                            echo "de n'avoir pas su faire ses devoirs mais un zombie ";
                            break;
                        case 2: 
                            echo "de n'avoir pas su faire ses devoirs mais le troll érudit ";
                            break;
                        case 3: 
                            echo "de n'avoir pas su faire ses devoirs mais l'un des gardiens ";
                            break;
                        case 4: 
                            echo "de n'avoir pas su faire ses devoirs mais un rat mutant ";
                            break;
                        case 5: 
                            echo "de n'avoir pas su faire ses devoirs mais l'aubergiste ";
                            break;
                        case 6: 
                            echo "de n'avoir pas su faire ses devoirs mais le bourreau ivre ";
                            break;
                        case 7: 
                            echo "de n'avoir pas su faire ses devoirs mais un ménestrel moche ";
                            break;
                        case 8: 
                            echo "de n'avoir pas su faire ses devoirs mais le gobelin de ménage ";
                            break;
                        case 9: 
                            echo "de n'avoir pas su faire ses devoirs mais un orque d'élite ";
                            break;
                        case 10: 
                            echo "de n'avoir pas su faire ses devoirs mais le sorcier stagiaire ";
                            break;
                        case 11: 
                            echo "de n'avoir pas su faire ses devoirs mais un type suspect ";
                            break;
                        case 12: 
                            echo "de n'avoir pas su faire ses devoirs mais le prisonnier barbu ";
                            break;
                        case 13: 
                            echo "de n'avoir pas su faire ses devoirs mais l'herboriste ";
                            break;
                        case 14: 
                            echo "de n'avoir pas su faire ses devoirs mais le chien d'un voisin ";
                            break;
                        case 15: 
                            echo "de n'avoir pas su faire ses devoirs mais un garde de la ville ";
                            break;
                        case 16: 
                            echo "de n'avoir pas su faire ses devoirs mais un colporteur ";
                            break;
                        case 17: 
                            echo "de n'avoir pas su faire ses devoirs mais un aventurier ";
                            break;
                        case 18: 
                            echo "de n'avoir pas su faire ses devoirs mais le plombier ";
                            break;
                        case 19: 
                            echo "de n'avoir pas su faire ses devoirs mais l'ingénieur gobelin ";
                            break;
                        case 20: 
                            echo "de n'avoir pas su faire ses devoirs mais un vieux fou ";
                            break;
                    }
                }
                elseif ($motif == "malade") {
                    switch($random1) {
                        case 1: 
                            echo "d'avoir été malade mais un zombie ";
                            break;
                        case 2: 
                            echo "d'avoir été malade mais le troll érudit ";
                            break;
                        case 3: 
                            echo "d'avoir été malade mais l'un des gardiens ";
                            break;
                        case 4: 
                            echo "d'avoir été malade mais un rat mutant ";
                            break;
                        case 5: 
                            echo "d'avoir été malade mais l'aubergiste ";
                            break;
                        case 6: 
                            echo "d'avoir été malade mais le bourreau ivre ";
                            break;
                        case 7: 
                            echo "d'avoir été malade mais un ménestrel moche ";
                            break;
                        case 8: 
                            echo "d'avoir été malade mais le gobelin de ménage ";
                            break;
                        case 9: 
                            echo "d'avoir été malade mais un orque d'élite ";
                            break;
                        case 10: 
                            echo "d'avoir été malade mais le sorcier stagiaire ";
                            break;
                        case 11: 
                            echo "d'avoir été malade mais un type suspect ";
                            break;
                        case 12: 
                            echo "d'avoir été malade mais le prisonnier barbu ";
                            break;
                        case 13: 
                            echo "d'avoir été malade mais l'herboriste ";
                            break;
                        case 14: 
                            echo "d'avoir été malade mais le chien d'un voisin ";
                            break;
                        case 15: 
                            echo "d'avoir été malade mais un garde de la ville ";
                            break;
                        case 16: 
                            echo "d'avoir été malade mais un colporteur ";
                            break;
                        case 17: 
                            echo "d'avoir été malade mais un aventurier ";
                            break;
                        case 18: 
                            echo "d'avoir été malade mais le plombier ";
                            break;
                        case 19: 
                            echo "d'avoir été malade mais l'ingénieur gobelin ";
                            break;
                        case 20: 
                            echo "d'avoir été malade mais un vieux fou ";
                            break;
                    }
                }
                elseif ($motif == "absence") {
                    switch($random1) {
                        case 1: 
                            echo "d'avoir été absent mais un zombie ";
                            break;
                        case 2: 
                            echo "d'avoir été absent mais le troll érudit ";
                            break;
                        case 3: 
                            echo "d'avoir été absent mais l'un des gardiens ";
                            break;
                        case 4: 
                            echo "d'avoir été absent mais un rat mutant ";
                            break;
                        case 5: 
                            echo "d'avoir été absent mais l'aubergiste ";
                            break;
                        case 6: 
                            echo "d'avoir été absent mais le bourreau ivre ";
                            break;
                        case 7: 
                            echo "d'avoir été absent mais un ménestrel moche ";
                            break;
                        case 8: 
                            echo "d'avoir été absent mais le gobelin de ménage ";
                            break;
                        case 9: 
                            echo "d'avoir été absent mais un orque d'élite ";
                            break;
                        case 10: 
                            echo "d'avoir été absent mais le sorcier stagiaire ";
                            break;
                        case 11: 
                            echo "d'avoir été absent mais un type suspect ";
                            break;
                        case 12: 
                            echo "d'avoir été absent mais le prisonnier barbu ";
                            break;
                        case 13: 
                            echo "d'avoir été absent mais l'herboriste ";
                            break;
                        case 14: 
                            echo "d'avoir été absent mais le chien d'un voisin ";
                            break;
                        case 15: 
                            echo "d'avoir été absent mais un garde de la ville ";
                            break;
                        case 16: 
                            echo "d'avoir été absent mais un colporteur ";
                            break;
                        case 17: 
                            echo "d'avoir été absent mais un aventurier ";
                            break;
                        case 18: 
                            echo "d'avoir été absent mais le plombier ";
                            break;
                        case 19: 
                            echo "d'avoir été absent mais l'ingénieur gobelin ";
                            break;
                        case 20: 
                            echo "d'avoir été absent mais un vieux fou ";
                            break;
                    }
                }
                elseif ($motif == "nomotif") {
                    switch($random1) {
                        case 1: 
                            echo "mais un zombie ";
                            break;
                        case 2: 
                            echo "mais le troll érudit ";
                            break;
                        case 3: 
                            echo "mais l'un des gardiens ";
                            break;
                        case 4: 
                            echo "mais un rat mutant ";
                            break;
                        case 5: 
                            echo "mais l'aubergiste ";
                            break;
                        case 6: 
                            echo "mais le bourreau ivre ";
                            break;
                        case 7: 
                            echo "mais un ménestrel moche ";
                            break;
                        case 8: 
                            echo "mais le gobelin de ménage ";
                            break;
                        case 9: 
                            echo "mais un orque d'élite ";
                            break;
                        case 10: 
                            echo "mais le sorcier stagiaire ";
                            break;
                        case 11: 
                            echo "mais un type suspect ";
                            break;
                        case 12: 
                            echo "mais le prisonnier barbu ";
                            break;
                        case 13: 
                            echo "mais l'herboriste ";
                            break;
                        case 14: 
                            echo "mais le chien d'un voisin ";
                            break;
                        case 15: 
                            echo "mais un garde de la ville ";
                            break;
                        case 16: 
                            echo "mais un colporteur ";
                            break;
                        case 17: 
                            echo "mais un aventurier ";
                            break;
                        case 18: 
                            echo "mais le plombier ";
                            break;
                        case 19: 
                            echo "mais l'ingénieur gobelin ";
                            break;
                        case 20: 
                            echo "mais un vieux fou ";
                            break;
                    }
                }
                else {
                    echo "Il y a une erreur quelque part";
                }

                switch ($random2) {
                    case 1: 
                        echo "a glissé dans ";
                        break;
                    case 2: 
                        echo "a dérapé dans ";
                        break;
                    case 3: 
                        echo "a cassé un bidule dans ";
                        break;
                    case 4: 
                        echo "a brisé un truc dans ";
                        break;
                    case 5: 
                        echo "a vomi dans ";
                        break;
                    case 6: 
                        echo "a perdu ses clés dans ";
                        break;
                    case 7: 
                        echo "a fait ses besoins dans ";
                        break;
                    case 8: 
                        echo "était bloqué dans ";
                        break;
                    case 9: 
                        echo "s'est perdu dans ";
                        break;
                    case 10: 
                        echo "est tombé dans ";
                        break;
                    case 11: 
                        echo "s'est endormi dans ";
                        break;
                    case 12: 
                        echo "a passé la nuit dans ";
                        break;
                    case 13: 
                        echo "s'est réveillé dans ";
                        break;
                    case 14: 
                        echo "s'est tué dans ";
                        break;
                    case 15: 
                        echo "s'est fait mal dans ";
                        break;
                    case 16: 
                        echo "a trébuché dans ";
                        break;
                    case 17: 
                        echo "était coincé dans ";
                        break;
                    case 18: 
                        echo "s'est battu dans ";
                        break;
                    case 19: 
                        echo "a causé des ennuis dans ";
                        break;
                    case 20: 
                        echo "a mis le feu dans ";
                        break;
                }
                switch ($random3) {
                    case 1: 
                        echo "la cave et tout ça à cause ";
                        break;
                    case 2: 
                        echo "le souterrain nord et tout ça à cause ";
                        break;
                    case 3: 
                        echo "le grenier et tout ça à cause ";
                        break;
                    case 4: 
                        echo "mon bureau et tout ça à cause ";
                        break;
                    case 5: 
                        echo "la remise à ingrédients et tout ça à cause ";
                        break;
                    case 6: 
                        echo "les cuisines et tout ça à cause ";
                        break;
                    case 7: 
                        echo "la niche des chiens et tout ça à cause ";
                        break;
                    case 8: 
                        echo "la volière à corbeaux et tout ça à cause ";
                        break;
                    case 9: 
                        echo "la fosse à scorpions et tout ça à cause ";
                        break;
                    case 10: 
                        echo "votre bureau et tout ça à cause ";
                        break;
                    case 11: 
                        echo "l'escalier du deuxième niveau et tout ça à cause ";
                        break;
                    case 12: 
                        echo "le bac du limon glaireux et tout ça à cause ";
                        break;
                    case 13: 
                        echo "le couloir principal et tout ça à cause ";
                        break;
                    case 14: 
                        echo "le hangar de bricolage et tout ça à cause ";
                        break;
                    case 15: 
                        echo "l'atelier de forge et tout ça à cause ";
                        break;
                    case 16: 
                        echo "la salle de fouettage et tout ça à cause ";
                        break;
                    case 17: 
                        echo "le dortoir des orques et tout ça à cause ";
                        break;
                    case 18: 
                        echo "l'antre du Golbargh et tout ça à cause ";
                        break;
                    case 19: 
                        echo "le magasin et tout ça à cause ";
                        break;
                    case 20: 
                        echo "votre bibliothèque et tout ça à cause ";
                        break;
                }
                switch ($random4) {
                    case 1: 
                        echo "de cette bête ";
                        break;
                    case 2: 
                        echo "de cette stupide ";
                        break;
                    case 3: 
                        echo "d'une grosse ";
                        break;
                    case 4: 
                        echo "d'une infâme ";
                        break;
                    case 5: 
                        echo "d'une étrange ";
                        break;
                    case 6: 
                        echo "d'une incroyable ";
                        break;
                    case 7: 
                        echo "de l'improbable ";
                        break;
                    case 8: 
                        echo "de la fameuse ";
                        break;
                    case 9: 
                        echo "de cette imbécile de ";
                        break;
                    case 10: 
                        echo "de la ridicule ";
                        break;
                    case 11: 
                        echo "de, c'est balot hein, la ";
                        break;
                    case 12: 
                        echo "de l'existence d'une ";
                        break;
                    case 13: 
                        echo "de l'embûche causée par une ";
                        break;
                    case 14: 
                        echo "du piège que représentait une ";
                        break;
                    case 15: 
                        echo "de la présence de cette ";
                        break;
                    case 16: 
                        echo "d'une, vous allez rire, ";
                        break;
                    case 17: 
                        echo "de la, c'est bien dommage, ";
                        break;
                    case 18: 
                        echo "de la position d'une ";
                        break;
                    case 19: 
                        echo "de son penchant pour une ";
                        break;
                    case 20: 
                        echo "d'une médiocre ";
                        break;
                }
                switch ($random5) {
                    case 1: 
                        echo "brouette rouillée qui ";
                        break;
                    case 2: 
                        echo "manivelle tordue qui ";
                        break;
                    case 3: 
                        echo "scie abîmée qui ";
                        break;
                    case 4: 
                        echo "bassine oubliée qui ";
                        break;
                    case 5: 
                        echo "clé de douze qui ";
                        break;
                    case 6: 
                        echo "corbeille de linge qui ";
                        break;
                    case 7: 
                        echo "hallebarde tordue qui ";
                        break;
                    case 8: 
                        echo "chouette empaillée qui ";
                        break;
                    case 9: 
                        echo "terrine piégée qui ";
                        break;
                    case 10: 
                        echo "flûte empoisonnée qui ";
                        break;
                    case 11: 
                        echo "tête de goule qui ";
                        break;
                    case 12: 
                        echo "faux venimeuse qui ";
                        break;
                    case 13: 
                        echo "guitare disloquée qui ";
                        break;
                    case 14: 
                        echo "bielle biscornue qui ";
                        break;
                    case 15: 
                        echo "salière brisée qui ";
                        break;
                    case 16: 
                        echo "peau de banane qui ";
                        break;
                    case 17: 
                        echo "perruque décrépite qui ";
                        break;
                    case 18: 
                        echo "chaussette rouge qui ";
                        break;
                    case 19: 
                        echo "babouche verte qui ";
                        break;
                    case 20: 
                        echo "pantoufle usée qui ";
                        break;
                }
                switch ($random6) {
                    case 1: 
                        echo "venait de ma grand-mère donc c'est pas sa faute!";
                        break;
                    case 2: 
                        echo "était justement là donc c'est pas sa faute!";
                        break;
                    case 3: 
                        echo "est apparue comme par magie donc c'est pas sa faute!";
                        break;
                    case 4: 
                        echo "venait de votre cousin donc c'est pas sa faute!";
                        break;
                    case 5: 
                        echo "avait été abandonnée donc c'est pas sa faute!";
                        break;
                    case 6: 
                        echo "était suspecte donc c'est pas sa faute!";
                        break;
                    case 7: 
                        echo "n'aurait pas dû se trouver là donc c'est pas sa faute!";
                        break;
                    case 8: 
                        echo "avait justement l'air fourbe donc c'est pas sa faute!";
                        break;
                    case 9: 
                        echo "était dans l'ombre donc c'est pas sa faute!";
                        break;
                    case 10: 
                        echo "n'avait l'air de rien donc c'est pas sa faute!";
                        break;
                    case 11: 
                        echo "a été laissée par un voisin donc c'est pas sa faute!";
                        break;
                    case 12: 
                        echo "était bel et bien dangereuse donc c'est pas sa faute!";
                        break;
                    case 13: 
                        echo "était pourtant chère donc c'est pas sa faute!";
                        break;
                    case 14: 
                        echo "avait une odeur inquiétante donc c'est pas sa faute!";
                        break;
                    case 15: 
                        echo "avait changé de place donc c'est pas sa faute!";
                        break;
                    case 16: 
                        echo "aurait dû être rangée donc c'est pas sa faute!";
                        break;
                    case 17: 
                        echo "vous appartient donc c'est pas sa faute!";
                        break;
                    case 18: 
                        echo "s'est révélée glissante donc c'est pas sa faute!";
                        break;
                    case 19: 
                        echo "était peut-être à moi donc c'est pas sa faute!";
                        break;
                    case 20: 
                        echo "pose toujours des problèmes donc c'est pas sa faute!";
                        break;
                }
            ?>
        </div>
    </div>
</body>
</html>