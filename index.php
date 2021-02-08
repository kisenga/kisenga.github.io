<?php
session_start();
$_SESSION['nom']=$userinfo['nom'];
require_once('connect.php');

if (isset($_POST['connection']))
 {
   
 $telephonelog=htmlspecialchars($_POST['telephone']);
 $mdplogin=htmlspecialchars(($_POST['mdp']));
     
     //verification de l'email et du mot de passe
     $mdp=sha1($mdplogin);
     
      
      $requser=$bdd->prepare('SELECT id FROM membre WHERE telephone=? AND mdp=? ');
      $requser->execute(array($telephonelog, $mdp));
      $userexiste=$requser->rowCount();
      if ($userexiste==1)
      {  
      $userinfo=$requser->fetch();
      

    
      
      }
      
      else
      {
      header('location:connection.php');
      }
   
   
     
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
  
  }
  
  .boutton {
display: inline-block;
background-color: #7b38d8;
border-radius: 40px;
border: 4px double #cccccc;
color: #eeeeee;
text-align: center;
font-size: 28px;
padding: 20px;
width: 200px;
-webkit-transition: all 0.5s;
-moz-transition: all 0.5s;
-o-transition: all 0.5s;
transition: all 0.5s;
cursor: pointer;
margin: 5px;
}

.boutton:hover {
background-color: green;
}
  </style>
</head>
<body class="bd">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Heart❤</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">accueuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connection.php">se connecter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="inscription.php">s'inscrire</a>
      </li>    
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  
  <div class="row">
  
    
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5></h5>
      <div class="fakeimg"> <img src="image/amour.jpeg"> </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      
      <br>
  
      <a href="home.php" ><botton class="boutton">commencer</botton></a>
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
     <div  class="fakeimg"> <img src="image/as.png">  </div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
  <a href="home.php"<botton class="boutton">commencer</botton></a>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
    <ul>
    <li>Nous contacter</li>
    <li>A propos de nous</li>
    <li>Conditions d'utilisation</li>
  </ul>
</div>
</div>
</body>
</html>
