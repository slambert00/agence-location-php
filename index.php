<!DOCTYPE HTML>
<HTML xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="style/styletest2.css" type="text/css" media="screen" />





</head>
<body>

    <div id="header">

    </div>


    <div id="content">

    <h1>Connexion</h1>
    <form method="post" action="login.php">
        <label for="pseudo">pseudo:            </label>
        <input type="text" id="pseudo" name="pseudo"/><br>
        <label for="mdp">mot de passe:       </label>
        <input type="password" id="mdp" name="mdp"/><br>
        <input id="envoi" type="submit" value="se connecter"/>
    </form>


    <?php
  function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
  echo 'L adresse IP de l utilisateur est : '.getIp();

?>

    </div>