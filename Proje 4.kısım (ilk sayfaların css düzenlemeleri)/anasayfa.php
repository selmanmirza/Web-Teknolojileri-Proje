<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // 'hakkimda' verisi gönderilmişse yönlendirme yap
    if (isset($_POST['hakkimda'])) {
        header('Location: hakkimda.html');
        exit();
    }
    if(isset($_POST['anasayfa'])){
      header('Location: anasayfa.html');
      exit();
    }
    if(isset($_POST['iletisim'])){
      header ('Location: iletisim.html');
      exit();
    }
    if(isset($_POST['sehrim'])){
      header ('Location: sehrim.html');
      exit();
    }
    if(isset($_POST['cv'])){
      header ('Location: cv.html');
      exit();
    }
    if(isset($_POST['miras'])){
      header ('Location: miras.html');
      exit();
    }
    if(isset($_POST['ilgi'])){
      header('Location: ilgi.html');
      exit();
    }
}


?>
