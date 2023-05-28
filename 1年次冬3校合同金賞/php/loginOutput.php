<pre>
<?php

//登録完了ページ


$name = $_GET['name'];
$id = $_GET['id'];
$pass = $_GET['pass'];


$row = '';

$fp = fopen('../csv/member.csv','a');

fputs($fp,$name.','.$id.','.$pass."\n");
fclose($fp);

$list = [];
$fp = fopen('../csv/member.csv','r');

$row = fgets($fp);
while($row !== false){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list[] = explode(',',$row);
    $row = fgets($fp);
}
?>
</pre>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>登録完了</title>
</head>
<body>
<header>
<h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <main>
    <div class="container">
            <div class="loginErrorConte">
            <div>
            <h3 class="loginTitle">登録が完了しました</p>
            <!-- <p>15秒後にログインページに戻ります</p> -->

            </div>
            <div class="torokuKanD"><a class="tourokuKanA" href="./login.php"><p>ログインする</p></a></div>
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