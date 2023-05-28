<?php
/**
 * 
 * ログインする
 * 
 * id 
 * pass
 * 
 * アカウントをお持ちでない場合
 * 新規登録
 * 
 * 
 */

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <!-- googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <title>ログイン</title>
</head>
<body>
    <header>
    <h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <main>
    <div class="lineFrend"><img src="../jpeg/linefrend.jpg"></div>
        <div class="container">
            <div class="loginTitle"><h3>ログイン</h3></div>
            <div class="loginForm">
                <form action="./listFun.php" method="GET">
                <p>ログインID</p>
                <input type="text" name="id" placeholder="id"></p>
                <p>パスワード</p>
                <input type="text" name="pass" placeholder="password">
                <button type="submit">ログイン</button>
            </div>
            <div class="addKaiin"><a href="./mamberInput.php"><p>新規会員登録はこちら</p></a></div>
        </div>
    </main>
    <footer class="footer">
        <div class="footConteiner">
        <div class="footerBokin">
                <a href="./input.php"><div>
            <h3>寄付をする</h3>
            <p>ご支援いただける方</p>
            </div></a>
            </div>
            <div class="footerTop">
                <a href="./index.html"><div>
                <h3>TOP</h3>
                <p>私たちの活動</p>
                </div></a>
            </div>
        </div>
            <p class="copyright">Copyright 2022 Animal Protection</p>
    </footer>
</body>
</html>
