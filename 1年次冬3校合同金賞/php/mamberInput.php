<?php

/**
 * 
 * 会員登録
 * 
 * 
 * 
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>会員登録</title>
</head>
<body>
    <header>
    <h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <main>
        <div class="container">
            <div>
                <div class="loginTitle"><h3>新規会員登録</h3></div>
                <div class="loginForm">
                    <form action="./loginOutput.php" method="GET">
                    <p>氏名</p><input type="text" name="name" placeholder="ニックネーム">
                    <p>ログインID</p><input type="text" name="id" placeholder="id">
                    <p>パスワード</p><input type="text" name="pass" placeholder="password">
                    <button type="submit">送信</button>
                    
                </div>
                <div class="addKaiin"><a href="./login.php"><p>ログインはこちら</a></p></div>
            </div>
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