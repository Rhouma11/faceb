<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$x=$_POST["iddd"];
mysql_connect("127.0.0.1","root","");
mysql_select_db("shop")or die ("imposible de se connecter au serveur web");
$req1="select * from produit where id='$x';";
$res1=mysql_query($req1);
$i=mysql_num_rows($res1);
if($i==0){
    echo " error";
}
else{
    $i=mysql_fetch_array($res1);
    $id=$i["id"];
    $nompr=$i["nompr"];
    $prix=$i["prix"];
    $quantiter=$i["quantiter"];
    $img=$i["img"];
}
    
    $req="insert into panier values ('$id','$nompr','$prix','$quantiter','$img')";
    $res=mysql_query($req);
    if ($res==null) {
        echo "operation d'ajout echouee <br>";
    }
    else {
        echo"Ajout effectue avec succes<br>";
    }
    mysql_close();
    
    echo "le id est : " .$x;
    header('location:home.php');
?>
<body>
    
</body>
</html>