<?php
/**
 * 
 * クラファンの投稿画面
 * 
 * 入力確認
 * 
 * ここでは送られた画像をセッションに画像保持→次のページに移行してからユーザーimgフォルダに移動する
 * 
 * 
 */

session_start();
$_SESSION['image']['data'] = file_get_contents($_FILES['image']['tmp_name']);
$_SESSION['image']['type'] = exif_imagetype($_FILES['image']['tmp_name']);

$name = $_POST['name'];
$genre = $_POST['genre'];
$title = $_POST['title'];
$needYen = $_POST['needYen'];
$matter = $_POST['matter'];
$file = $_FILES['image'];

$imgName = $file['name'];


$filePath = '../user_img/'. $file['name'];
$success = move_uploaded_file($file['tmp_name'] , $filePath);

//ジャンルの値と日本語ひっつけ
if($genre == 1){
    $genreAns = '動物保護';
}
elseif($genre == 2){
    $genreAns = '環境保全';
}
elseif($genre == 3){
    $genreAns = 'SDGs';
}
elseif($genre == 4){
    $genreAns = 'その他';
}




?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>金額確認</title>
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
            <div class="checkOutputFunConte">
            <div class="checkOutputKakunin"><p>以下の内容でよろしいですか?</p></div>
            <div class="checkOutputImg"><img src="./imgSession.php"></div>
                <h3><?php echo $title ;?></h3>
                <div class="checkMinConte">
                    <div class="checkName">
                        <p><i class="fas fa-user myAccount"></i> <?php echo $name;?></p>
                    </div>
                    <div class="checkGenre"><p><i class="fas fa-tag"></i> <?php echo $genreAns ;?></p></div>
                </div>
                <div class="checkMinConte2">
                    <div class="checkMinConteKingaku">
                        <div class="checkMinConteKingakuMin">
                            <p>目標金額</p>
                            <p><?php echo $needYen ;?>円</p>
                        </div>
                        <div class="checkMinConteKingakuMin2">
                            <p>累計金額</p>
                            <p>0円</p>
                        </div>
                    </div>
                    <div id="parsentConte"><div id="width"></div><p id="parsentMath">0%</p></div>
                </div>
                <div class="checkMatter">
                    <p class="checkMatterT">内容</p>
                    <p><?php echo $matter;?></p>
                </div>
                <form method="post" action="outputFun.php">
                <input type="hidden" name="genre" value="<?php echo $genre ;?>">
                <input type="hidden" name="name" value="<?php echo $name ;?>">
                <input type="hidden" name="title" value="<?php echo $title ;?>">
                <input type="hidden" name="needYen" value="<?php echo $needYen ;?>">
                <input type="hidden" name="matter" value="<?php echo $matter ;?>">
                <input type="hidden" name="imgName" value="<?php echo $imgName ;?>">
                <input type="submit" class="btn btn-outline-dark" value="プロジェクトを投稿">
            </form>
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
    <script src="../js/styleparasent.js"></script>
</body>
</html>