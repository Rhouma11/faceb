<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("shop")or die ("imposible de se connecter au serveur web");
    $id=$ch;
    $nompr=$_POST["nompr"];
    $prix=$_POST["prix"];
    $quantiter=$_POST["quantiter"];
    $id=$_POST["idpr"];
    $img=$_POST["img"];
    $req="insert into produit values ('$id','$nompr','$prix','$quantiter','$img')";
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