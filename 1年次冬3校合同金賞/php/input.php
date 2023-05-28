<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/input.css">
    <title>募金する</title>
</head>
<body>
<header>

        <nav class="navi">
        <h1 class="logoSp"><a href="./index.html">Animal Protection</a></h1>
        <a class="logoA" href="./index.html"><p>Animal</p><p>Protection</p></a>
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
        <div class="inputConte">
            <div class="tigerIcon"><img src="../jpeg/tigerIcon.png"></div>
                <div class="inputConteMin">
                    <h1>ご支援いただける金額をご入力ください</h1>
                    <div class="form">
                        <form action="./outputYen.php" method="GET">
                        <p>氏名</p><input type="text" name="name" placeholder="氏名">
                        <p>金額入力 例 5000</p><input type="text" name="yen" placeholder="金額">
                        <button type="submit">募金する</button>
                    </div>
                </div>
        </div>
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
</body>
</html>