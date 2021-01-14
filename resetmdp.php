<?php 
session_start();
require('inc/pdo.php');
require('inc/function.php');

$title = 'Réinitialiser le mot de passe';

$errors = array();
$success = false;

//debug($_GET);




   // 1. Vérifier que email et token correspondent à celui de l'utilisateur (=sécurité dans la barre)
if(!empty($_GET['email']) && !empty($_GET['token']))
{
    $email = cleanXss($_GET['email']);
    $token = cleanXss($_GET['token']);

    $sql = "SELECT * FROM res_users WHERE email = :email AND token = :token";
    $var = $pdo->prepare($sql);
    $var->bindValue(':email',$email,PDO::PARAM_STR);
    $var->bindValue(':token',$token,PDO::PARAM_STR);
    $var->execute();
    $user = $var->fetch();
    //debug($user);

    if($email == $user['email'] && $token == $user['token'])
    {
        // token_at pour verifier la date ( mettre un limite d'une heure )
        if(tokenDelay($user['token_at'],3600))
        {
            
            include('inc/header.php'); ?>

            <div class="wrap-reset">
                <div id="reset-password">
                    <h2>Réinitialiser votre mot de passe</h2>
                    <form id="form-reset" method="post" action="ajax/ajax-reset.php">
                        <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Mot de passe">
                        <span class="error" id="error-reset-pass"></span>
                        </div>

                        <div class="form-group">
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirmer votre mot de passe">
                        <span class="error" id="error-reset-cpass"></span>
                        </div>

                        <div class="form-group">
                        <input type="submit" id="submitted-reset" name="submitted-reset" value="Confirmer">
                        </div>
                    </form>
                </div>
            </div>

            <?php
            include('inc/footer.php');

        } else {
            echo('Lien expiré.');
        }
    } else {
        header('Location: 404.php');
    }
} else {
    header('Location: 404.php');
}
   





