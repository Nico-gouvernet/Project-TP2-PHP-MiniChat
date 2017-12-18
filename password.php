<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mot de passe pour les infos du serveur central de TF1 </title>
    </head>
    <body>  
        <style>
        body {
            background-color: #B78178;
            color: white;  
            text-align: center; 
            font-family:sans-serif;
            font-size: 1.2em;
            }
          #contenu{
            background: #895959;
            height: 100px;
            color: white;
            font-family: sans-serif;
            font-size: 1em;
            padding-top: 30px;
            }
            input{
                background:#B78178;
                color: white;
                border-radius: 10px;
                font-size:1em;
                cursor: pointer;
    </style>
 <?php
    if (isset($_POST['password']) AND $_POST['password'] ==  "kangourou") // Mot de passe correct
    {
// nous mettons en places le code suivant :
?>
<h1>Voilà le code :</h1>
        <p><strong>KK09-365I-C585-JDFM-DSFN-78D1-FS28-SFFV</strong></p>   
        
        <p>
        Cette page est pour le personnel de TF1. Attention N'oubliez pas que les codes d'accès sont changés régulièrement.<br />
        TF1 vous remercie de votre visite.
        </p>
        <div id="contenu">
         <p>Cliquez sur valider pour accéder à la discussion instantanée .</p>
            <form action="secret.php" method="post">
                <input type="submit" value="Valider" />
             </form>
       </div>
         <?php
    }
    else // Sinon, message d'erreur
    {
        echo '<p>Mot de passe invalide</p>';
    }
    ?>
</body>
</html>