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
}


?>