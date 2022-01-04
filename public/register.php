<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a class="" href="#">Promeo Formation</a>
</nav>
<div id="container">
    <!-- zone de connexion -->

    <form action="register_traitement.php" method="POST">
        <p>S'enregistrer</p>
        <div class="box"></div>




        <input type="text" placeholder="Identifiant" name="username" required>
        <input type="password" placeholder="Mot de passe" name="password" required>
        <input type="password" placeholder="Confirmer le Mot de passe" name="confirmPassword" required>
        <input type="submit" id='submit' value='ENREGISTRER' >

        <a href="index.php" style='color:#095776'>Se connecter</a>
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>


</div>

</body>
</html>