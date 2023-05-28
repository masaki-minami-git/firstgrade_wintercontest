
<?php
$name = $_GET['name'];
$yen = $_GET['yen'];
$total = 0;

$fp = fopen('../csv/dataYen.csv','a');

fputs($fp,$name.','.$yen."\n");
fclose($fp);

$list = [];
$fp = fopen('../csv/dataYen.csv','r');

$row = fgets($fp);
while($row !== false){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list[] = explode(',',$row);
    $row = fgets($fp);
}

foreach($list as $key => $val){
    $total = $total + $val[1];
}

$syousuu = $total / 500000;

// echo $syousuu;
// var_dump($list);
$total = number_format($total);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/styleIn.css">
    
    <title>ご支援ありがとうございます</title>
</head>
<body class="color">
<div class="kakusu">
<header>
        <nav class="navi">
        <h1 class="logoSp"><a href="./index.html">Animal Protection</a></h1>
        <a class="logoA"href="./index.html"><p>Animal</p><p>Protection</p></a>
        <ul class="navUl">
            <li><a href="../php/index.html#redlist">Red Listとは</a></li>
            <li><a href="../php/index.html#animalNow">動物たちの今</a></li>
            <li><a href="../php/index.html#sdgsAnk">SDGs</a></li>
            <li><a href="../php/input.php">募金する</a></li>
            <li><a href="../php/login.php">活動する</a></li>
        </ul>
    </nav>
    </header>
    <main>

    <div class="outputWrap">
    <div class="thankSp"><h1>ご支援ありがとうございます!<span> Thank you so much!</span></h1></div>
        <div id="parsentConte" class="container">
            <div class="dropTop"></div><div class="drop"></div>
            <div class="dropTop2"></div><div class="drop2"></div>
            <div class="dropTop3"></div><div class="drop3"></div>
            <p id="parsentMath"><?php echo $total; ?>円</p>
        </div>
        <div class="leafMae"><img src="../jpeg/leafbrar.png"></div>
        <div class="leaf"><img src="../jpeg/leaf.png"></div>
        <div class="leafGap"><img src="../jpeg/leafGap.png"></div>
        <!-- <div class=""></div> -->
        <div class="ele"><img src="../jpeg/eleRight.png"></div>
        <div class="monkey"><img src="../jpeg/monkey.png"></div>
    </div>
    <h1 class="thank">ご支援ありがとうございます!<span> Thank you so much!</span></h1>
    </main>
    <footer class="footer">
        <div class="footConteiner">
            <div class="footerBokin">
            <a class="footerBokinA" href="./input.php">
            <h1>寄付をする</h1>
            <h2>Animal Protectionへご支援いただける方</h2>
            </a>
            </div>
            <div class="footerClowd">
                <a class="footerClowdA" href="./login.php"><div>
                <h1>クラウドファンディング</h1>
                <h2>ともに環境問題に取り組んでいただける方</h2>
                </div></a>
            </div>
        </div>
            <p><a class="TopIndex" href="./index.html">TOP</a></p>
            <p>Copyright 2022 Animal Protection</p>
    </footer>
     
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <!-- <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/85188/raindrops.js"></script> -->
  <script src="../js/raindrops.js"></script>
  <script src="../js/rain.js"></script>
  </div>
</body>
</html>