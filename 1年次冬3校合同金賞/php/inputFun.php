<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>プロジェクト投稿</title>
</head>
<body>
    <header>
    <h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <nav>
    <ul>
        <a href="./inputFun.php"><li>プロジェクトをはじめる</li></a>
        <a href="./listFun.php?id=<?php echo $_COOKIE['cookieID'];?>&pass=<?php echo $_COOKIE['cookiePass'];?>"><li>プロジェクトをさがす</li></a>
    </ul>
    </nav>
    <main>
    <div class="container">
        <div class="loginTitle"><h3>プロジェクト内容</h3></div>
        <div class="loginForm">
        <form action="./checkOutputFun.php" method="post" enctype="multipart/form-data">
        <p>氏名</p><input type="text" name="name" value="<?php echo $_COOKIE['cookieName'];?>">
        <p>ジャンル</p>
                <select  id="categorySearch" name="genre">
                <option value="1">動物保護</option>
                <option value="2">環境保全</option>
                <option value="3">SDGs</option> 
                <option value="4">その他</option> 
                </select>
        <p class="cateIn">タイトル</p><input type="text" name="title" placeholder="ここにタイトルがはいります">
        <p>募集金額 <span>例 200000</span></p><input type="text" name="needYen" placeholder="金額を入力してください">
        <p>内容</p><textarea name="matter" placeholder="内容"></textarea>
        <p>画像<span>ファイル拡張子 .jpeg .jpg .png .gif</span></p><input type="file" name="image" accept="image/*">
        <button class="checkFunPut" type="submit">送信</button>
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