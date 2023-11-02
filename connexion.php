<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $email=$_POST['email'];
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("shop");
    echo" <br>";
    $req="select*from users where email='$email';";
    $res=mysql_query($req) or die ("immpossible d'exécuter la requéte<br>");
    $test=FALSE;
    $md=TRUE;
    while ($i=mysql_fetch_array($res)) {
        $test=TRUE;
        $verif=TRUE;
        $ps=$_POST["pass"];
        $pss=$i["password"];
        $email=$i["email"];
        if ($ps==$pss) {
            echo " <center><h1>Bienvenue </h1></center><br>";
            echo " <center><h1>" .$email." </h1></center><br>";
        }
        else {
            echo " <center><h1>".$email." </h1></center><br>";
            echo" <center><h1> votre modt passe est incorrect </h1></center><br>";
            $verif=FALSE;
            $md=FALSE;
        }
    }
    if($test==FALSE){
        echo "Verifier votre email";
        $verif=FALSE;
    }
    if ($verif){
        header('location:home.php');
    }
    

?>
<body>
<center><h1><a href="index.html">Reconnexion</a></h1></center>
</body>
</html>