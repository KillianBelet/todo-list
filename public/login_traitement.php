<?php

$userName = $_POST['username'];
$password = $_POST['password'];

//var_dump($_POST);


$connexion = mysqli_connect('localhost','root','root','todoPromeo');
$requete = mysqli_query($connexion,"SELECT `id`,`password`, `username` FROM `compte` WHERE `username` = '$userName'");
$tableau = $requete->fetch_assoc();
//var_dump($tableau);
//var_dump(password_verify($password,$tableau['password']));
if($userName == $tableau['username'] && password_verify($password,$tableau['password'])){
    session_start();
    $_SESSION['idUser'] = $tableau['id'];
    header('Location: todo/index.php');
}
else{
    header('Location: index.php?erreur=1');
}
