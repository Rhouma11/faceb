<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $supp=$_POST["iddd"];
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("shop");
    echo "connexion au serveur de la base est réussite<br>";
    $req1="select * from panier where id='$supp';";
    $res1=mysql_query($req1);
    $i=mysql_num_rows($res1);
    if($i>0){
        $req2="delete from panier where id='$supp';";
        $res2=mysql_query($req2);
        echo ("suppression effectuée");
    }
    else
        echo "suppression non effectuée, personne inexistante";
    header('location:panier.php');
?>
<body>
    
</body>
</html>