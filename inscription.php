<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    echo "<center><b>Mercie pour votre inscription</b></center>";
   
    echo "connexion au serveur web et a la base de données réussite<br>";
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $password=$_POST["pass"];
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("shop")or die ("imposible de se connecter au serveur web");
    $req="insert into users values ('$nom','$prenom','$email','$password')";
    $res=mysql_query($req);
    if ($res==null) {
        echo "operation d'ajout echouee";
    }
    else {
        echo"Ajout effectue avec succes";
    }
    mysql_close();
    header('location:home.php');
?>
<body>
</body>
</html>