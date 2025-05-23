<?php

    $isim = $_POST["isim"];
    $soyisim = $_POST["soyisim"];
    $eposta = $_POST["eposta"];
    $telno = $_POST["tel"];
    $cinsiyet = $_POST["cinsiyet"];
    $mesaj = $_POST["mesaj"];

    echo "İsim: $isim <br>";
    echo "Soyisim: $soyisim <br>";
    echo "E-posta: $eposta <br>";
    echo "Telefon: $telno <br>";
    echo "Cinsiyet: $cinsiyet <br>";
    echo "Mesaj: $mesaj <br> <br> <br>"; 

    echo "Anasayfaya yönlendiriliyorsunuz..";


    header("Refresh:4; url=anasayfa.html");


?>