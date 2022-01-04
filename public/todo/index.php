<?php
session_start();
$idUser = $_SESSION['idUser'];
$connexion = mysqli_connect('localhost','root','root','todoPromeo');
//var_dump($_SESSION);
if(isset($_POST['submit'])) {
    $task = $_POST['task'];
    if (empty($task)){
        $errors = "Vous devez entrer une tache afin de valider.";
    }else {
    $requete = mysqli_query($connexion,"INSERT INTO todo (`task`,`usernameId`) VALUES ('$task',$idUser)");
    header('Location: index.php');
    }
}
if(isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($connexion,"DELETE FROM todo WHERE id= $id");
    header('Location: index.php');
}
if(isset($_GET['valider_tache'])){
    $id = $_GET['valider_tache'];
    mysqli_query($connexion,"UPDATE `todo` SET `valider`='Y' WHERE id= $id");
    header('Location: index.php');

}
$task = mysqli_query($connexion,"SELECT * FROM todo WHERE usernameId = $idUser");
?>



<html>
<head>
<title>Todo-List</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="heading">
    <h2>Todo List Promeo Formation</h2>
</div>

<form method="post" action="index.php">
    <?php if (isset($errors)){ ?>
        <p> <?php echo $errors ?> <p>
    <?php }
    ?>
    <input type="text" name="task" class="task_input">
    <button type="submit" class="task_btn" name="submit">Ajouter une tache</button>
</form>
<table>
    <thead>
    <tr>
        <th>N</th>
        <th>Tache</th>
        <th>Supprimer</th>
        <th>Valider</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = mysqli_fetch_array($task)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="task"><?php echo $row['task']; ?></td>
        <td class="delete">
            <a href="index.php?del_task=<?php echo $row['id']; ?>">x</a>
        </td>
        <td>
                    <?php if($row['valider'] == 'N'){ ?>
                        <a href="index.php?valider_tache=<?php echo $row['id']; ?>">Valider</a>
            <?php } else{ ?>
            <p>Tache effectué </p>
            <?php } ?>

        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>