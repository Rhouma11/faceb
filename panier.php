<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <h2 class="h22">Shop</h2>
        <nav class="nvlien">
            <a href="home.php">Home</a>
            <a href="shop.html">Shop</a>
            <a href="">Contact</a>
        </nav>
        <p class="ppp"> <img src="img/panier.png"><a href="panier.php" class="paniera">Panier</a></p>
       <img class="aaa" src="img/more.png">
    </header>
    <div class='home'>
    <?php
        mysql_connect("127.0.0.1","root","");
        mysql_select_db("shop");
        $req="select*from panier";
        $res=mysql_query($req);
        $numr= (mysql_num_rows($res));
        while ($i=mysql_fetch_array($res)){ 
            echo "
            <form action='supp.php' method='post'>
                <div class='boxx'>
                    <div class='img'>
                        <a href=''><img src='img/".$i['img']."'></a>
                    </div>
                    <div class='id'>
                        <p>".$i['id']."</p>
                        <input class='inputabsol' type='text' name='iddd' value='".$i['id']."'>
                    </div>
                    <div class='titre'>
                        <a href=''><p class='nomprd'>".$i['nompr']."</p></a>
                    </div>
                    <div class='prixqt'>
                        <p>".$i['prix']."  dt</p>
                        <input type='number' name='quantiter' id='numberqt' min='1' max='".$i['quantiter']."' value='1'>
                    </div>
                    <div class='btnn'>
                        <input type='submit' value='Supprimer'>
                    </div>
            </form>
        </div>";
        }
    ?>
</div>
</body>
</html>





