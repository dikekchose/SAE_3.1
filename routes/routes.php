<?php

// La route 'GET /' est la route permettant d'afficher l'accueil, elle vérifie aussi si une personne est
// connecté
Flight::route('GET /', function(){

    session_start();

    if (isset($_SESSION['s1'])){
        Flight::render("index.tpl",['message' => 'Bonjour '.$_SESSION['s1'], 'connection' => true]);
    }
    else{
        Flight::render("index.tpl",['message' => 'Contenu du site', 'connection' => false]);
    }
});

// La route 'GET /register' affiche le template register.tpl qui permet de s'inscrire, elle permet aussi
// de récupérer le contenu du formulaire si une erreur à été faite et de réafficher ce contenu
Flight::route('GET /register', function(){
    $tableauAssociatif = ['nom' => '', 'email' => '', 'mdp' => '', 'message' => ''];
    Flight::render("register.tpl", $tableauAssociatif);
});

// La route 'POST /register' permet de tester le contenu du formulaire envoyé : elle vérifie si les
// champs ne sont pas vides, si l'email est valide et s'il n'existe pas dans la base et enfin enregistre
// les données dans la BD
Flight::route('POST /register', function(){
    $db = Flight::get('db');
    if (strlen($_POST['name']) != 0 && strlen($_POST['email']) != 0 && strlen($_POST['mdp']) != 0){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === $_POST['email']){
            $testemail = $db->prepare('SELECT email FROM UTILISATEUR WHERE email = :email');
            $testemail->execute(['email' => $_POST['email']]);
            $testemail = $testemail->fetchColumn();
            if ($testemail != $_POST['email']) {
                if (strlen($_POST['mdp']) >= 8){
                    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                    $enregistrerdonnées = $db->prepare('INSERT INTO UTILISATEUR VALUES(:nom, :email, :mdp, null, null)');
                    $enregistrerdonnées->execute(['nom' => $_POST['name'], 'email' => $_POST['email'], 'mdp' => $mdp]);
                    header('Location: /TP4/success');
                    exit();
                }
                else{
                    $tableauAssociatif = ['nom' => $_POST['name'], 'email' => $_POST['email'], 'mdp' => $_POST['mdp'], 'message' => 'Le mot de passe ne fait pas 8 caractères'];
                    Flight::render("register.tpl", $tableauAssociatif);
                }
            }
            else{
                $tableauAssociatif = ['nom' => $_POST['name'], 'email' => $_POST['email'], 'mdp' => $_POST['mdp'], 'message' => "L'email est déjà enregistré"];
                Flight::render("register.tpl", $tableauAssociatif);
            }
        }
        else{
            $tableauAssociatif = ['nom' => $_POST['name'], 'email' => $_POST['email'], 'mdp' => $_POST['mdp'], 'message' => "Le mot de passe n'est pas valide"];
            Flight::render("register.tpl", $tableauAssociatif);
        }
    }
    else{
        $tableauAssociatif = ['nom' => $_POST['name'], 'email' => $_POST['email'], 'mdp' => $_POST['mdp'], 'message' => 'Les données entrées sont vides'];
        Flight::render("register.tpl", $tableauAssociatif);
    }
});

// La route '/success' est une route de redirection lorsque l'utilisateur réussi à s'inscrire, le framework
// affiche un message de succés
Flight::route('/success', function(){
    Flight::render("success.tpl",array());
});

// La route 'GET /login' affiche le template login.tpl qui permet à l'utilisateur de se connecter, cette
//route permet aussi de récupérer le contenu du formulaire si une erreur à été faite et de l'afficher
Flight::route('GET /login', function(){
    $tableauAssociatif = ['email' => '', 'mdp' => '', 'message' => ''];
    Flight::render("login.tpl", $tableauAssociatif);
});

// La route 'POST /login' récupère les informations du formulaires et vérifie si elles sont correctes :
// elle vérifie si les champs ne sont pas vides, si l'email existe dans la base et si le mot de passe corespond
Flight::route('POST /login', function(){

    $db = Flight::get('db');
    session_start();

    if (strlen($_POST['email']) != 0 && strlen($_POST['mdp']) != 0){
        $testemail = $db->prepare('SELECT email FROM UTILISATEUR WHERE email = :email');
        $testemail->execute(['email' => $_POST['email']]);
        $testemail = $testemail->fetchColumn();

        if ($testemail == $_POST['email']) {
            $testMdp = $db->prepare('SELECT Motdepasse FROM UTILISATEUR WHERE email = :email');
            $testMdp->execute(['email' => $_POST['email']]);
            $testMdp = $testMdp->fetchColumn();

            $username = $db->prepare('SELECT Nom FROM UTILISATEUR WHERE email = :email');
            $username->execute(['email' => $_POST['email']]);
            $username = $username->fetchColumn();

            if (password_verify($_POST['mdp'], $testMdp)){
                unset($_SESSION['s1']);
                $_SESSION['s1'] = $username;
                header('Location: /TP4/');
                exit();
            }
        }
    }
    $tableauAssociatif = ['email' => $_POST['email'], 'mdp' => $_POST['mdp'], 'message' => 'Echec de la connexion'];
    Flight::render("login.tpl", $tableauAssociatif);
});

// La route 'GET /profil' vérifie si un utilisateur est connécté, puis si il est connécté l'envoie vers
// son profil, sinon le renvoie vers la page de connexion
Flight::route('GET /profil', function(){

    session_start();

    if (isset($_SESSION['s1'])) {
        Flight::render("profil.tpl", array());
    }
    else {
        $tableauAssociatif = ['email' => '', 'mdp' => '', 'message' => ''];
        Flight::render("login.tpl", $tableauAssociatif);
    }
});

// La route 'GET /logout' permet à l'utilisateur de se déconnecter de sa session, en vidant la variable
// super-global $_SESSION['s1']
Flight::route('GET /logout', function(){

    session_start();
    unset($_SESSION['s1']);
    Flight::render("index.tpl", ['message' => 'Vous êtes bien déconnecté', 'connection' => false]);
});
?>