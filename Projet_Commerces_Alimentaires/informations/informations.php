<!DOCTYPE html>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="css/style.css" rel="stylesheet">

        <title> Informations </title>

        <?php
        	session_start();

            include('../bd.php');
            $bdd = getBD();     
        ?>
    
    </head>
	
    <body>
        <header class="head-index">
        <h1>    
            Informations :
        </h1>
        </header>
		
        <h1>
            Site créé par Baptiste Nauguier, Yoan Ranchon, Léonardo Irala Palermo, Chloé Poupelin et Raphael Nestor Martin <br>
			dans le cadre du projet de semestre 6 de Licence MIASHS
        </h1>
		<h1>
            Le site s'appuie sur des données tirées d'OpenData
        </h1>
		<h2 id = "int"> <a href="../index.php" > Retour </a></h2>
    </body>
	
</html>