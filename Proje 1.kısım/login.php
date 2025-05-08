<?php 

$sifre = $_POST['sifre'];
$username = $_POST ['username'];

    if(substr($username,-15) !== "@sakarya.edu.tr")
    {
        header ("Location: proje.html ");
        exit();

    }

    if($sifre == "b241210045" && $username == "b241210045@sakarya.edu.tr" )
    {
        header("Location: anasayfa.html");
        exit();
    }
    else {      
       header("Location: proje.html");
       exit();

    }




 ?>