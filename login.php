<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

include './db_local.php';

$pdo = pdo_connect_mysql();

require './parametrage/database.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $loginError = ''; //on initialise nos messages d' erreurs
    $passwordError = '';
    $password = htmlentities(trim(md5($_POST['password']))); //on securise les données
    $login = htmlentities(trim($_POST['login']));

    // on vérifie les input
    $valid = true;
    if (empty($login)) {
        $loginError = 'Please enter Login';
        $valid = false;
    }
    if (empty($password)) {
        $passwordError = 'Please enter password';
        $valid = false;
    }


    if ($valid) { //si c'est bon, on connecte à la base
//        $pdo = Database :: connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM utilisateur WHERE US_LOGIN= ? AND US_PASSWORD=? ";
        $q = $pdo->prepare($sql);
        $q->execute(array($login, $password));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        if ($data['US_PASSWORD'] == $password && $data['US_LOGIN'] == $login) { // Acces OK ! s'il y a des data et qu'elle correspondent
            session_start(); //on ouvre la session
            $_SESSION['logged_in'] = true;
            $_SESSION['login'] = $data['US_LOGIN']; //on assigne nos valeurs
            $_SESSION['password'] = $data['US_PASSWORD'];

        $msg='';
            echo '<p>Bienvenue ' . $data['US_LOGIN'] . ', 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="./crud_admin/admin/adminUser.php">ici</a> 
			pour revenir à la page d accueil</p>';
            header('location:./crud_admin/admin/adminUser.php'); //et on renvoie vers l'index
        } else { // Acces refusé on reste sur la page!
            $msg='<p style="font-weight: bold;color: sienna;">Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le login 
            entré n\'est pas correcte.</p>';
            echo '<p style="font-weight: bold;color: sienna;">Une erreur s\'est produite 
	    pendant votre identification.<br /> Le mot de passe ou le login 
            entré n\'est pas correcte.</p>
            ';

//	    <p>Cliquez <a href="./login.php">ici</a>
        }
    }

//    Database::disconnect();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>mesDenrées_Connexion</title>
        <link href="css/bootstrap.min_1.css" rel="stylesheet">
        <script src="styles/bootstrap-4.1.3/bootstrap.min.js"></script>

    </head>
    <body style="background-color: black;">
        <div >
            <form class="form-group" style="background-color: rgb(255, 102, 0);height: 200px !important;
                  width: 40%;margin-left: 35%;margin-top: 10%;padding: 2.5% 14%;" method="POST" action="login.php">
                <fieldset>
                    <legend>Connexion</legend>
                <div class="control-group <?php echo!empty($loginError) ? 'error' : ''; ?>">
                    <label class="control-label">Login</label>
                    <div class="controls">
                        <input type="text" name="login" value="">
                <?php if (!empty($loginError)) : ?>
                        <!-- affiche erreur-->
                            <span class="help-inline"><?php echo $loginError; ?></span>
                <?php endif; ?>
                    </div>
                </div>
                <div class="control-group<?php echo!empty($passwordError) ? 'error' : ''; ?>">
                    <label class="control-label">Password</label>
                    <div class="controls">
                        <input type="password" name="password" value="">
                        <?php if (!empty($passwordError)) : ?> 
                        <!-- affiche erreur-->
                            <span class="help-inline"><?php echo $passwordError; ?></span>
                        <?php endif; ?>
                    </div>

                </div>
                <input type="submit" value="Se connecter" name="submit">
                </fieldset>
            </form>
        </div>
    </body>
</html>