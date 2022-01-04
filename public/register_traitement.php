<?php
$userName = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
var_dump($_POST);

if($password !== $confirmPassword){
    header('Location: register.php');
}
$passwordCrypte = password_hash($password, PASSWORD_DEFAULT);
$connexion = mysqli_connect('localhost','root','root','todoPromeo');
$requete = mysqli_query($connexion,"INSERT INTO `compte`(`username`, `password`) VALUES ('$userName','$passwordCrypte')");
var_dump($requete);
header('Location: index.php');