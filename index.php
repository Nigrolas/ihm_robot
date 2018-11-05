<!DOCTYPE html>
<html>
<head>
    <title>IHM ROBOT</title>
</head>
<body style="text-align: center;">
    <dir id="titre" style="border-style: solid;"><h1>Mon site Web</h1></dir>
    <div style="border-style: solid;">
        <p>Salut les amis</p>
          <a href="https://www.google.fr">Lien vers google</a></br>
    </div>
    <div id="php">
        <?php
            echo  "Nous sommes aujourd'hui " . date("l").".";
	    phpinfo();
        ?>
    </div>
    
</html>
